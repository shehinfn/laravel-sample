<?php
/**
 * Created by PhpStorm.
 * User: accubits
 * Date: 5/3/20
 * Time: 5:19 PM
 */

namespace App\Repositories;

interface BaseRepositoryInterface {

    public function getModelClass();
    public function getOneById($id);
    public function getByIds($ids);
    public function getAll();
    public function removeById($id);

}