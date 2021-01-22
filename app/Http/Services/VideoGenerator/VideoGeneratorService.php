<?php
namespace App\Http\Services\VideoGenerator;

use App\Http\Services\Server\ServerServiceInterface;

class VideoGeneratorService implements VideoGeneratorServiceInterface
{

    private $serverService;

    public function __construct(ServerServiceInterface $serverService)
    {
        $this->serverService = $serverService;
    }

    /**
     * Generates video
     * 
     * array $params
     */
    public function generateVideo(array $params)
    {
        $this->serverService->makeVideoServerRequest($params);
    }
}