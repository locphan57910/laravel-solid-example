<?php
namespace App\Http\Services\Server;

use App\Http\Services\BaseServiceInterface;

interface ServerServiceInterface extends BaseServiceInterface
{
    /**
     * Retrieves active server
     */
    public function retrieveActiveServer();
}
