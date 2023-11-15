<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Rule;
use Livewire\Component;

class RegisterForm extends Component
{
    #[Rule('required')] 
    public $name;

    #[Rule('required|email')] 
    public $email;

    #[Rule('required')] 
    public $password;

    #[Rule('required')] 
    public $confirm_password;

    public function save()
    {
        $this->validate();


        if($this->password == $this->confirm_password){

        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->save();

        return redirect(route('login'));

        }else{
            session()->flash("error", 'password did not match');

            return Redirect::back();
        }
    }
    public function render()
    {
        return view('livewire.register-form');
    }
}
