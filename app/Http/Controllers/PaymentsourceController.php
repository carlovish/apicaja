<?php

namespace App\Http\Controllers;

use App\Models\Paymentsource;
use Illuminate\Http\Request;

class PaymentsourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentsources = Paymentsource::latest()->paginate(10);
        return [
            "status" => 1,
            "data" => $paymentsources
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
            'source' => 'required',
            'account' => 'required',
        ]);

        $paymentsource = Paymentsource::create($request->all());
        return [
            "status" => 1,
            "data" => $paymentsource
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Paymentsource $paymentsource)
    {
        return [
            "status" => 1,
            "data" => $paymentsource
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paymentsource $paymentsource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paymentsource $paymentsource)
    {
        $request->validate([
            'source' => 'required',
            'account' => 'required',
        ]);
 
        $paymentsource->update($request->all());
 
        return [
            "status" => 1,
            "data" => $paymentsource,
            "msg" => "Paymentsource updated successfully"
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paymentsource $paymentsource)
    {
        $paymentsource->delete();
        return [
            "status" => 1,
            "data" => $paymentsource,
            "msg" => "Paymentsource deleted successfully"
        ];
    }
}
