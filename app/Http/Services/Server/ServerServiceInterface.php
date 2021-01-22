<?php
namespace App\Http\Services\Server;

use App\Http\Services\BaseServiceInterface;
use App\Models\Server;

interface ServerServiceInterface extends BaseServiceInterface
{

    /**
     * Retrieve active server
     *
     * @params array $params
     * @return Server
     */
    public function retrieveActiveServer(array $params = []): Server;
}
