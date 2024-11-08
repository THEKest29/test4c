<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create() {
        return view('login');
    }
    public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('learns')->with('success', 'Вы успешно вошли в систему!');
        }
        return redirect()->back()->withErrors([
            'email' => 'Эти учетные данные не соответствуют нашим записям.',
        ])->withInput();
    }
}
