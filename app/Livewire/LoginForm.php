<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class LoginForm extends Component
{

    #[Rule('required|email')]
    public $email;

    #[Rule('required')]
    public $password;

    public function save()
    {
        $this->validate();

        $credentails = [
            'email' => $this->email,
            'password' => $this->password,
        ];
        
        if (Auth::attempt($credentails)) {

            return redirect(route('dashboard'));

        }else{
            return redirect()->back()->with('error', 'incorrect logins details');

        }


    }

    public function render()
    {
        return view('livewire.login-form');
    }
}
