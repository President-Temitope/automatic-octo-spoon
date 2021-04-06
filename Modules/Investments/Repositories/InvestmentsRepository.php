<?php
namespace Modules\Investments\Repositories;
use Modules\Core\Repositories\CoreRepository;
use Modules\Investments\Entities\Investment;
use Modules\Investments\Interfaces\InvestmentsRepositoryInterface;

class InvestmentsRepository implements InvestmentsRepositoryInterface
{
    protected $model = '';
    protected $core = '';

    public function __construct(CoreRepository $core, Investment $model)
    {
        $this->core = $core;
        $this->model = $model;
    }

    public function all()
    {
        // TODO: Implement all() method.
        return $this->core->all($this->model);
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
        return $this->core->create($this->model, $data);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        return $this->core->delete($this->model, $id);
    }

    public function edit($id, array $data)
    {
        // TODO: Implement edit() method.
        return $this->core->update($this->model, $id, $data);
    }

    public function queryWithStatus()
    {
        // TODO: Implement queryWithStatus() method.
        return $this->core->queryWithACondition('status', '1', $this->model);

    }

}
