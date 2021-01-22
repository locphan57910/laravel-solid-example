<?php
namespace App\Http\Services\Server;

use App\Http\Repositories\Server\EloquentServerRepositoryInterface;
use App\Enums\Status;
use App\Models\Server;
use App\Http\Helpers\RequestHelper;
use App\Http\Traits\VideoGenerator\VideoGeneratorApiTrait;

class ServerService implements ServerServiceInterface
{

    use VideoGeneratorApiTrait;

    /**
     * Api server host url
     *
     * @var $host
     */
    private $host;

    /**
     * Server repository variable
     *
     * @var $serverRepository
     */
    private $serverRepository;

    public function __construct(EloquentServerRepositoryInterface $serverRepository)
    {
        $this->serverRepository = $serverRepository;
    }

    /**
     * Retrieve active server
     *
     * @params array $params
     * @return Server
     */
    public function retrieveActiveServer(array $params = []): Server
    {
        $server = $this->serverRepository->retrieveServer('status', Status::Active)->first();

        $this->host = $server->host;

        return $server;
    }

    /**
     * Makes request to video server
     *
     * @param array $params
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function makeVideoServerRequest(array $params)
    {
        $this->retrieveActiveServer();

        return RequestHelper::makeRequest($this->getVideoGeneratorApiUrl(), $params, 'POST');
    }
}