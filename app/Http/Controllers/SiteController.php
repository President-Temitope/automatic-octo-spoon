<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Investments\Entities\Investment;


class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $investments = Investment::all();
        return view('index')->with('investments',$investments);
    }

    public function about(){
        return view('about');
    }


}
