<?php

use Illuminate\Database\Seeder;
use App\Models\TransactionCategories;
class TransactionCategoriesSeede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // DB::table('transactioncategories')->delete();
          $category1 =TransactionCategories::create(array(
            'name' => 'Shopping',
          
        ));

            $category2 = TransactionCategories::create(array(
             'name' => 'Rent',
          
        ));
    }
}
