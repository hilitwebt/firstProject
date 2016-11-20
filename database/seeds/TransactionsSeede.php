<?php

use Illuminate\Database\Seeder;
use App\Models\Transaction;
class TransactionsSeede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('transactions')->delete();
          $transaction1 = Transaction::create(array(
            'date' => new DateTime,
            'transactiontypes_id'=>2,
            'amount'=>1000,
            'description'=> 'winter clothes',
            'categories_id'=>1
        ));

            $transaction2 = Transaction::create(array(
             'date' => new DateTime,
            'transactiontypes_id'=>2,
            'amount'=>3000,
            'description'=> 'home rental',
            'categories_id'=>2
        ));
         
    }
}
