<?php

use Illuminate\Support\Facades\Hash;
use App\Models\User;

$request->validate([
    'name' => 'required',
    'email' => 'required|email|unique:users',
    'password' => 'required|confirmed|min:8|regex:/[a-z]/i|regex:/[0-9]/',
]);

$user = new User;
$user->name = request('name');
$user->email = request('email');
$user->password = Hash::make(request('password'));
$user->save();

return redirect()->route('signup-success');


