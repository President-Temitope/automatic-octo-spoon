<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Modules\Investments\Repositories\InvestmentsRepository;


class SiteController extends Controller
{
    protected $investment = '';

    public function __construct(InvestmentsRepository $investmentsRepository)
    {
        $this->investment = $investmentsRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = DB::table('settings')->first();
        $investments = $this->investment->queryWithStatus();
        return view('index')->with('investments', $investments)
            ->with('setting', $setting);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }


}
