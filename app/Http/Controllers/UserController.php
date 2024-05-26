<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('users.dashboard', ['content' => '']);
    }
    public function debt()
    {
        return view('users.debt', ['content' => '']);
    }
    public function createDebt()
    {
        return view('users.createDebt', ['content' => '']);
    }
    public function userDebt()
    {
        return view('users.userDebt', ['content' => '']);
    }
    public function userDebtDetail()
    {
        return view('users.userDebtDetail', ['content' => '']);
    }
    public function updateDebtDetail()
    {
        return view('users.updateDebt', ['content' => '']);
    }
    public function transaction()
    {
        return view('users.transaction', ['content' => 'Transaction']);
    }

    public function createDebtPost(Request $request)
    {
        $validateData = $request;

        $amountString = $request->input('amount');
        // Remove non-numeric characters
        $amount = preg_replace('/[^0-9]/', '', $amountString);

        // dd($amount);
        // Ensure the amount is correctly formatted as a float
        // $amount = (float) str_replace(',', '.', $amount);


        Transaction::create([
            'customer_id' => 1,
            'amount' => $amount,
            'note' => $validateData['note'],
            // 'date' => $validateData['date'],
            'user_id' => session()->get('user_id'),
            'status_id' => 1,
            'category_id' => 1
        ]);

        return redirect()->route('debt')->with('success', 'Debt created successfully.');



        // $user = auth()->user();
        // $user->transactions()->create($request->all());
        // return redirect()->route('transaction')->with('success', 'Transaction created successfully.');
    }
}
