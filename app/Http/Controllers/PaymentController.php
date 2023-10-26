<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::latest()->paginate(10);
        return [
            "status" => 1,
            "data" => $payments
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'local_amount' => 'required',
            'concept'=>'required'
        ]);
 
        $payment = Payment::create($request->all());
        return [
            "status" => 1,
            "data" => $payment
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        return [
            "status" => 1,
            "data" =>$payment
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'date' => 'required',
            'local_amount' => 'required',
            'concept'=>'required'
        ]);
 
        $payment->update($request->all());
 
        return [
            "status" => 1,
            "data" => $payment,
            "msg" => "Payment updated successfully"
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return [
            "status" => 1,
            "data" => $payment,
            "msg" => "Payment deleted successfully"
        ];
    }
}
