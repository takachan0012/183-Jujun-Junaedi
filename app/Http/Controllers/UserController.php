<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = User::find(session()->get('user_id'));
        $transactions = $user->transaction->map(function ($transaction) {
            return [
                'id' => $transaction['id'],
                'status_id' => $transaction['status_id'],
                'category_id' => $transaction['category_id'],
                'amount' => $transaction['amount'],
                'created_at' => Carbon::parse($transaction['created_at'])->locale('id')->isoFormat('DD MMMM YYYY'),
                'note' => $transaction['note'] ?: '',
            ];
        })->toArray();
        return view('users.dashboard', ['transactions' => $transactions]);
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
    public function createTransaction()
    {
        return view('users.createTransaction', ['content' => 'Transaction']);
    }

    public function createDebtPost(Request $request)
    {
        $amountString = $request->input('amount');
        // Remove non-numeric characters
        $amount = preg_replace('/[^0-9]/', '', $amountString);
        $date = Carbon::parse($request['date'])->setTimeFromTimeString(Carbon::now()->toTimeString())->format('Y-m-d H:i:s');

        //Modify timestamps
        Transaction::withoutTimestamps(function () use ($request, $amount, $date) {
            Transaction::create([
                'customer_id' => 1,
                'amount' => $amount,
                'note' => $request['note'],
                'updated_at' => $date,
                'created_at' => $date,
                'user_id' => session()->get('user_id'),
                'status_id' => 1,
                'category_id' => 1
            ]);
        });
        return redirect()->route('debt')->with('success', 'Debt created successfully.');



        // $user = auth()->user();
        // $user->transactions()->create($request->all());
        // return redirect()->route('transaction')->with('success', 'Transaction created successfully.');
    }
}
