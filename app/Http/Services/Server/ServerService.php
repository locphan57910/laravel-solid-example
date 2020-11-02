<?php
namespace App\Http\Services\Server;

use App\Http\Repositories\Server\EloquentServerRepositoryInterface;

class ServerService implements ServerServiceInterface
{
    /**
     * Server repository variable
     * @var $serverRepository
     */
    private $serverRepository;
    
    public function __construct(EloquentServerRepositoryInterface $serverRepository)
    {
        $this->serverRepository = $serverRepository;
    }
    
    
    public function retrieveActiveServer(array $params = [])
    {
        
    }
}