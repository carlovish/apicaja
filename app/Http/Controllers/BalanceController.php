<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    //

    public static function balance(Request $request)
    {
        $data = $request->all();
        $from=date($data['start_date']);
        $to=date($data['end_date']);
        Balance::fill_table();
        $balances=Balance::whereBetween('date', [$from, $to])->orderBy('date','asc')->orderBy('id','asc')->get();

        return $balances;
    }
}
