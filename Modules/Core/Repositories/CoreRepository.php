<?php


namespace Modules\Core\Repositories;


use Modules\Core\Interfaces\CoreRepositoryInterface;

class CoreRepository implements CoreRepositoryInterface
{

    public function all($model)
    {
        // TODO: Implement all() method.
        return $model::paginate(100);
    }

    public function create($model, array $data)
    {
        // TODO: Implement create() method.
        return $model::create($data);
    }

    public function update($model, $id, array $data)
    {
        // TODO: Implement update() method.
        return $model::where('id',$id)->update($data);
    }

    public function delete($model, $id)
    {
        // TODO: Implement delete() method.
        return $model::where('id',$id)->delete();
    }
}
