<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect('/panel');
        }
        
        return view('login.index');
    }

    public function authenticate(Request $r){
        $credentials = [
            'user' => $r['user'],
            'password' => $r['password']
        ];
        
        if (Auth::attempt($credentials)) {
            $r->session()->regenerate();       
        }

        return redirect('panel');
    }

    public function manage(Request $r){
        if($r['options'] == 'change'){
            return view('login.edit');
        }elseif ($r['options'] == 'logout') {
            $r->session()->invalidate();
            $r->session()->regenerateToken();
        
            return redirect(env('APP_URL'));
        }
    }

    public function changePassword(Request $r, String $id){
        $user = User::findOrFail($id);

        $user->update([
            'password' => Hash::make($r['password'])
        ]);

        return view('panel.index');
    }
}
