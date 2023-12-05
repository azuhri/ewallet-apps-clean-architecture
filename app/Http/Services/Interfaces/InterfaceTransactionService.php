<?php

namespace App\Http\Services\Interfaces;

interface InterfaceTransactionService {
    public function createTransaction($receiverPhonenumber, $pin, $amount);
    public function topup($amount);
    public function getUserTransactionById($userId);
}