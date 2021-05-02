<?php

namespace Modules\Investments\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
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
        $investments = $this->investment->queryWithStatus();
        return view('investments::index')->with('investments',$investments);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(),[
            'name' => ['required','string'],
            'daysOfMining' => ['required','numeric'],
            'startDate' => ['required','date'],
            'rate' => ['required','string']
        ]);
        if ($validator->failed()){
            return redirect()->back()->withErrors($validator);
        }
        $this->investment->create($validator->validated());
        return redirect()->back()->with('success','Investment plan added successfully');
    }


    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
      $validator =   Validator::make($request->all(),[
          'name' => ['required','string'],
          'daysOfMining' => ['required','numeric'],
          'startDate' => ['required','date'],
            'rate' => ['required','string']
        ]);
        if ($validator->failed()){
            return redirect()->back()->withErrors($validator);
        }
        $id = $request['id'];
        $this->investment->edit($id,$validator->validated());
        return redirect()->back()->with('success','Investment plan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->investment->delete($id);
        return redirect()->back()->with('success','Investment plan deleted successfully');
    }

    public function viewAll(){
       $investments =  $this->investment->all();
       return view('investments::viewAll')->with('investments',$investments);
    }

    public function deactivatePlan($id){
        $this->investment->edit($id,['status'=>'false']);
        return redirect()->back()->with('success','Investment plan updated successfully');
    }

    /**
     *getPlan method
     * This handles the purchase of plans by users
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getPlan(Request $request)
    {
        $validate = validator($request, ['file.*' => 'file|image|mimes:jpeg,png,jpg'], ['Invalid File detected']);
        $path = 'payments' . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR;
        $destinationPath = public_path($path);
        if (!$destinationPath) {
            \Illuminate\Support\Facades\File::makeDirectory($destinationPath, 0777, true, true);
        }
        $filename = Auth::user()->fullName().Str::random(10).Carbon::now();
        DB::table('payments')
            ->insert(
                [
                  'user_id' => auth()->id(),
                  'investment_id' => $request->investment_id,
                    'file' => $filename,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            );
        $validate->move($destinationPath, $filename);
        return redirect()->back()->with('success','Offer made successfully, await confirmation');

    }

    public function btclog(){

        $response = Http::get('https://api.blockcypher.com/v1/btc/main/txs');

        dd($response);

    }

}
