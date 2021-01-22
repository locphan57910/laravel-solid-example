<?php
namespace App\Http\Repositories\Server;

use App\Http\Repositories\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;

/**
 * Interface EloquentServerRepositoryInterface.
 */
interface EloquentServerRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Retrieve server
     *
     * @param string $column
     * @param mixed $value
     * @param string $sort
     * @return Builder
     */
    public function retrieveServer(string $column, $value, string $sort = 'ASC'): Builder;
}