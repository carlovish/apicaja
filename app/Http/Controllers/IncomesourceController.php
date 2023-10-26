<?php

namespace App\Http\Controllers;

use App\Models\Incomesource;
use Illuminate\Http\Request;

class IncomesourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomesources = Incomesource::latest()->paginate(10);
        return [
            "status" => 1,
            "data" => $incomesources
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

        $incomesource = Incomesource::create($request->all());
        return [
            "status" => 1,
            "data" => $incomesource
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Incomesource $incomesource)
    {
        return [
            "status" => 1,
            "data" => $incomesource
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Incomesource $incomesource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Incomesource $incomesource)
    {
        $request->validate([
            'source' => 'required',
            'account' => 'required',
        ]);
 
        $incomesource->update($request->all());
 
        return [
            "status" => 1,
            "data" => $incomesource,
            "msg" => "Incomesource updated successfully"
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Incomesource $incomesource)
    {
        
        $incomesource->delete();
        return [
            "status" => 1,
            "data" => $incomesource,
            "msg" => "Incomesource deleted successfully"
        ];
    }
}
