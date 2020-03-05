<?php
/**
 * Created by PhpStorm.
 * User: accubits
 * Date: 5/3/20
 * Time: 5:16 PM
 */

namespace App\Repositories;


abstract class BaseRepository implements BaseRepositoryInterface
{

    protected $model;

    abstract public function getModelClass(): string;

    public function __construct()
    {
        $this->model    =   app($this->getModelClass());
    }

    public function getOneById($id)
    {
        return $this->model->find($id);
    }

    public function getByIds($ids)
    {
        return $this->model->whereIN($ids);
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function removeById($id)
    {
        $this->model->destroy($id);
    }

}