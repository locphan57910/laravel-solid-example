<?php
namespace App\Http\Repositories;

/**
 * Interface BaseRepositoryInterface.
 */
interface BaseRepositoryInterface
{
    /**
     * Get element based on id
     *
     * @param $id
     *
     * @return mixed
     */
    public function find($id);
}