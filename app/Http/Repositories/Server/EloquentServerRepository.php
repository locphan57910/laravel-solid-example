<?php
namespace App\Http\Repositories\Server;

use App\Http\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Server;

class EloquentServerRepository extends BaseRepository implements EloquentServerRepositoryInterface
{

    protected $model;
    
    /**
     * Server repository constructor
     *
     * @param Server $model
     */
    public function __construct(Server $model)
    {
        $this->model = $model;
    }

    /**
     * Retrieve server
     *
     * @param string $column
     * @param mixed $value
     * @param string $sort
     * @return Builder
     */
    public function retrieveServer(string $column, $value, string $sort = 'ASC'): Builder
    {
        return $this->model->where($column, $value);
    }
}