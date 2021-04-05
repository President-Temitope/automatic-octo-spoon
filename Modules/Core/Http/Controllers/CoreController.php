<?php

namespace Modules\Core\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class CoreController extends Controller
{
    /**
     * Add settings table.
     * @param Request $request
     * @return Renderable
     */
    public function addSettings(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'bitcoinWalletAddress' => ['required','string','min:26','max:35'],
            'litecoinWalletAddress' => ['required','string','min:26','max:35'],
            'ethereumWalletAddress' => ['required','string','min:26','max:35']
        ]);
        if ($validator->failed()){
            return redirect()->back()->withErrors($validator);
        }
        if (DB::table('settings')->where('id', 1)->exists()) {
            DB::table('settings')->where('id', 1)->delete();
        }
        DB::table('settings')
            ->insert(
                [
                    'id' => 1,
                    'bitcoinWalletAddress'=> $request->bitcoinWalletAddress,
                    'litecoinWalletAddress'=> $request->litecoinWalletAddress,
                    'ethereumWalletAddress'=> $request->ethereumWalletAddress,
                    ]
            );
        return redirect()->back()->with('success','Wallet addresses added successfully');

    }
}
