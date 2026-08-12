<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class RepositoryAbstract
{
    protected Model $model;

    /**
     * get all data
     *
     * @return Collection
     */
    abstract public function all();

    /**
     * get all data order by created at desc
     *
     * @return Collection
     */
    abstract public function getLatest();

    /**
     * get all data order by created at desc
     *
     * @return Collection
     */
    abstract public function getOrderBy(string $column, string $method = 'asc');

    /**
     * store data to db
     *
     * @return Model
     */
    abstract public function create(array $data);

    /**
     * store data to db
     *
     * @return Model
     */
    abstract public function store(array $data);

    /**
     * find data by id
     *
     * @param  mixed  $id
     * @return Model
     */
    abstract public function find($id);

    /**
     * update data by id
     *
     * @return Model
     */
    abstract public function update(array $data, int $id);

    /**
     * delete data by id
     *
     * @return Model
     */
    abstract public function delete(int $id);

    /**
     * delete data by id
     *
     * @return Model
     */
    abstract public function destroy(int $id);
}
