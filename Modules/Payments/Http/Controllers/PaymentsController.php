<?php

namespace Modules\Payments\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

use Illuminate\Routing\Controller;
use Modules\Payments\Entities\Payment;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
       $payments = Payment::all();
        return view('payments::index')->with('payments',$payments);
    }

    /**
     * Approve Payment.
     * @param int $id
     * @return Renderable
     */
    public function approvePayment($id)
    {

    }

    /**
     * Transaction history.

     * @return Renderable
     */
    public function transactionHistory()
    {
        //
    }

    /**
     * Delete Payment.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
