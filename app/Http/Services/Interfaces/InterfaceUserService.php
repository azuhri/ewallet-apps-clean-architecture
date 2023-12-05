<?php

namespace App\Http\Services\Interfaces;

use App\Http\DTO\UserDTO;

interface InterfaceUserService {
    public function register(UserDTO $dto);        
    public function loginWithEmail(string $email, $password);
    public function loginWithPhonenumber(string $phonenumber, string $password);
    public function getUserLogin();
    public function setPinUser($userId, $pin);
    public function updateDataUser(UserDTO $user, $userId);
    public function getAllUser();
    public function getUserByPhonenumberOrId($parameterId);
    public function validatePinUser($userId, $pin);
    public function getSpendingMoney($userId);
}