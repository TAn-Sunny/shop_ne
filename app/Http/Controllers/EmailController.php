<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EmailController extends Controller
{
    public function validateEmail(Request $request)
    {
        $email = $request->get('email');
        $users = User::where('email', $email)->first();

        return response()->json(['available' => is_null($users)]);
    }

}
