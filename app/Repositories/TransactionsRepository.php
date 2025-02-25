<?php

namespace App\Repositories;

class TransactionsRepository
{
    protected $transactions = [
        ['id' => 1, 'name' => 'Budi', 'item' => 'baby kid', 'amount' => 12, 'status' => 'success'],
        ['id' => 2, 'name' => 'Siti', 'item' => 'toy car', 'amount' => 25, 'status' => 'pending'],
        ['id' => 3, 'name' => 'Agus', 'item' => 'story book', 'amount' => 15, 'status' => 'failed'],
        ['id' => 4, 'name' => 'Dewi', 'item' => 'teddy bear', 'amount' => 30, 'status' => 'success'],
        ['id' => 5, 'name' => 'Joko', 'item' => 'board game', 'amount' => 40, 'status' => 'pending'],
        ['id' => 6, 'name' => 'Rina', 'item' => 'doll house', 'amount' => 55, 'status' => 'success'],
        ['id' => 7, 'name' => 'Eko', 'item' => 'lego set', 'amount' => 60, 'status' => 'failed'],
        ['id' => 8, 'name' => 'Tina', 'item' => 'coloring book', 'amount' => 10, 'status' => 'success'],
        ['id' => 9, 'name' => 'Adi', 'item' => 'puzzle', 'amount' => 20, 'status' => 'pending'],
        ['id' => 10, 'name' => 'Lina', 'item' => 'stuffed bunny', 'amount' => 35, 'status' => 'success']
    ];    

    public function all()
    {
        return $this->transactions;
    }

    public function find($id)
    {
        return collect($this->transactions)->firstWhere('id', $id);
    }

    public function add($id, $name, $item, $amount, $status)
    {
        $this->transactions[] = [
            'id' => $id, 
            'name' => $name, 
            'item' => $item, 
            'amount' => $amount, 
            'status' => $status
        ];
    }

    public function update($id, $name, $item, $amount, $status): void
    {
        foreach ($this->transactions as &$transaction) {
            if ($transaction['id'] == $id) {
                $transaction['name'] = $name;
                $transaction['item'] = $item;
                $transaction['amount'] = $amount;
                $transaction['status'] = $status;
                break;
            }
        }
    }

    public function delete($id): void
    {
        $this->transactions = array_filter($this->transactions, function($element) use ($id) {
            return $element['id'] !== $id;
        });
    }
}
