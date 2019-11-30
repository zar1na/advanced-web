<?php

namespace App\Repositories;
// specific implementation that conforms to the terms of the contract
class DbUserRepository interface UserRepository {
    
    public function create($attributes) {
        
        // User::create() eloquent specific code
        dd('creating the user');
    }
}