<?php

use Illuminate\Database\Seeder;
use App\Models\TransactionTypes;
class TransactionTypeSeede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 // DB::table('transactiontypes')->delete();
         $type1 = TransactionTypes::create(array(
            'name' => 'Income',
             'id'=>1
          
        ));

            $type2 = TransactionTypes::create(array(
              'name' => 'Outcome',
              'id'=>2
        ));
    }
}
