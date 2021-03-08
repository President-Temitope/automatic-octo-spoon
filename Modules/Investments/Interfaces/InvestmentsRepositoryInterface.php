<?php


namespace Modules\Investments\Interfaces;


interface InvestmentsRepositoryInterface
{
    public function all();
    public function create(array $data);
    public function edit($id,array $data);
    public function delete($id);
    public function queryWithStatus();
}
