<?php

namespace Modules\Investments\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Modules\Investments\Repositories\InvestmentsRepository;

class InvestmentsController extends Controller
{
    /**
     * @var InvestmentsRepository
     */
    protected $investment;

    public function __construct(InvestmentsRepository $investmentsRepository)
    {
        $this->investment = $investmentsRepository;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $investments = $this->investment->all();
        return view('investments::index')->with('investments',$investments);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        Validator::make($request->all(),[
            'title' => ['required | string'],
            'price' => ['required | numeric'],
            'proposed_amount' => ['required | numeric']
        ]);
        $investment = $this->investment->create($request->all());
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        Validator::make($request->all(),[
            'title' => ['required | string'],
            'price' => ['required | numeric'],
            'proposed_amount' => ['required | numeric']
        ]);
        $this->investment->edit($id,$request->all());
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->investment->delete($id);
        return 'done';
    }
}
