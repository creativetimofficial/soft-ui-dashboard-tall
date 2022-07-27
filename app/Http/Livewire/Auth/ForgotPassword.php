<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;

use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPassword;

class ForgotPassword extends Component
{
    use Notifiable;

    public $email = '';

    protected $rules = [
        'email' => 'required|email',
    ];

    public function routeNotificationForMail()
    {
        return $this->email;
    }

    public function recoverPassword()
    {
        if (env('IS_DEMO')) {
            return back()->with('demo', "You are in a demo version, resetting password is disabled.");
        } else {
            $this->validate();
            $user = User::where('email', $this->email)->first();
            if ($user) {
                $this->notify(new ResetPassword($user->id));
                return back()->with('status', "An email for resetting your password has been sent!");
            } else {
                return back()->with('email', "We could not find any user with that email address.");
            }
        }
    }

    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}
