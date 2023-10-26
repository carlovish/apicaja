<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Balance extends Model
{
    use HasFactory;

    public static function fill_table()
    {
        DB::table('balances')->delete();;
        DB::table('balances')->insertUsing([
            'amount_in', 'date', 'concept'
        ], DB::table('incomes')->select(
            'local_amount', 'date', 'concept'
        ));
        DB::table('balances')->insertUsing([
            'amount_out', 'date', 'concept'
        ], DB::table('payments')->select(
            'local_amount', 'date', 'concept'
        ));

        static::update_balances();
    }

    private static function update_balances()
    {
        $balances = DB::table('balances')->orderBy('date','asc')->orderBy('id','asc')->get();

        $aux=0;

        foreach ($balances as $balance) {
            $aux +=($balance->amount_in-$balance->amount_out);
            DB::table('balances')
            ->where('id', $balance->id)
            ->update(['amount_balance' => $aux]);
        }
    }    
}
