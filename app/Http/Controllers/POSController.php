<?php

namespace App\Http\Controllers;

use App\Repositories\TransactionsRepository;
use Illuminate\Http\Request;

class POSController extends Controller
{
    protected TransactionsRepository $transactionsRepository;

    public function __construct()
    {
        $this->transactionsRepository = new TransactionsRepository();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('transactions.transactions', ['transactions' => $this->transactionsRepository->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transactions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'item' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
            'status' => 'required|in:success,pending,failed',
        ]);
    
        $transactions = $this->transactionsRepository->all();
        $lastId = end($transactions)['id'];
        $id = $lastId + 1; 
    
        $this->transactionsRepository->add(
            $id,
            $request->input('name'),
            $request->input('item'),
            $request->input('amount'),
            $request->input('status')
        );

        $transactions = $this->transactionsRepository->all();

        return view('transactions.transactions', ['transactions' => $transactions]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaction = $this->transactionsRepository->find($id);
        return view('transactions.transaction', ['transaction' => $transaction]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaction = $this->transactionsRepository->find($id);
        return view('transactions.edit', ['transaction' => $transaction]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'item' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
            'status' => 'required|in:success,pending,failed',
        ]);
    
        $this->transactionsRepository->update(
            $id,
            $request->input('name'),
            $request->input('item'),
            $request->input('amount'),
            $request->input('status')
        );

        $transactions = $this->transactionsRepository->all();

        return view('transactions.transactions', ['transactions' => $transactions]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->transactionsRepository->delete($id);
        return redirect()->back();
    }
}
