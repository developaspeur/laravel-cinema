<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function createSession()
    {
        return view('session.loginform');
    }
    
    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Votre Email ou Mot de Passe est INCORRECT!'
            ]);
        }
        
        return redirect()->to('/movies');
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/movies');
    }
}
