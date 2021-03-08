<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Investments\Repositories\InvestmentsRepository;


class SiteController extends Controller
{
    protected $investment ='';
    public function __construct(InvestmentsRepository $investmentsRepository)
    {
        $this->investment = $investmentsRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $investments = $this->investment->queryWithStatus();
        return view('index')->with('investments',$investments);
    }

    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }


}
