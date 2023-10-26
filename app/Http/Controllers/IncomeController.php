<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomes = Income::latest()->paginate(10);
        return [
            "status" => 1,
            "data" => $incomes
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
 
        $income = Income::create($request->all());
        return [
            "status" => 1,
            "data" => $income
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Income $income)
    {
        return [
            "status" => 1,
            "data" =>$income
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Income $income)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Income $income)
    {
        $request->validate([
            'date' => 'required',
            'local_amount' => 'required',
            'concept'=>'required'
        ]);
 
        $income->update($request->all());
 
        return [
            "status" => 1,
            "data" => $income,
            "msg" => "Income updated successfully"
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Income $income)
    {
        $income->delete();
        return [
            "status" => 1,
            "data" => $income,
            "msg" => "Income deleted successfully"
        ];
    }
}
