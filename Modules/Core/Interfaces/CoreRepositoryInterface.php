<?php

namespace Modules\Core\Interfaces;

interface CoreRepositoryInterface
{
    public function all($model);

    public function create($model, array $data);

    public function update($model, $id, array $data);

    public function delete($model, $id);


    public function queryWithACondition($condition,$query,$model);

    public function show($model,$id);
}
