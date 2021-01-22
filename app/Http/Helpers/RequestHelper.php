<?php
namespace App\Http\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Psr7\Response;

class RequestHelper
{

    /**
     * Makes a request to third party
     *
     * @param string $url
     * @param array $params
     * @param string $method
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public static function makeRequest(string $url, array $params, string $method = 'GET', array $headers = [])
    {
        // Guzzle request
        $client = new Client();

        // Usually pass API Tokens or AUTH Credentials
        $headers = [];

        try {
            $response = $client->request($method, $url, [
                'json' => $params,
                'headers' => $headers
            ]);

            return self::handleResponse($response);
        } catch (GuzzleException $ex) {

            Log::channel('video')->error($ex->getMessage());
        }
    }

    /**
     * Handle response
     *
     * @param Response $response
     * @return array
     */
    public static function handleResponse(Response $response): array
    {
        $content = json_decode($response->getBody()->getContents());

        return [
            'status' => $response->getStatusCode(),
            'message' => (! empty($content->message)) ? $content->message : null,
            'data' => (! empty($content->data)) ? $content->data : null
        ];
    }
}