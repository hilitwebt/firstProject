<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $this->call(TransactionTypeSeede::class);
          $this->call(TransactionCategoriesSeede::class);
          $this->call(TransactionsSeede::class);
    }
}
