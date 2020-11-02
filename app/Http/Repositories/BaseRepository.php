<?php
namespace App\Http\Repositories;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;
    
    /**
     * Get element based on id
     *
     * @param $id
     *
     * @return mixed
     */
    public function find($id)
    {
        return $this->model->find($id);
    }
}