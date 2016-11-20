<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Transaction;
use DateTime;

class TransactionsController extends Controller
{
    public function index(){
    	$transactions=Transaction::all();
    	return response()->json($transactions);
    }

    public function store(){
        // $validator = Validator::make($this->request->all(), [
        //   'transactiontypes_id' => 'bail|required',
        //     'amount' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return redirect('/home')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
        $data = $this->json();
        $validation=$this->validate($this->request, [
        'transactiontypes_id' => 'bail|required',
        'amount' => 'required',
        'description' => 'required',
        'categories_id' => 'required'
         ]);
        $data['date'] = new DateTime;;
    	$transaction = new Transaction;
        $transaction->fill($data);
    	$transaction->save();
        return Response()->json($transaction);
    }
}
