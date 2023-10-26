<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //

    public function cash(Request $request)
    {
        $balances=BalanceController::balance($request);        
        return [
            "status" => 1,
            "balances" => $balances
        ];
    }

    
}
