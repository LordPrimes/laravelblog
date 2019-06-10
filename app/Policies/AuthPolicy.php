<?php

namespace App\Policies;

use App\User;
use Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class AuthPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public static function guest()
    {
        if (Auth::check() == true)
        {
        
            return redirect()->route('admin')->with('success', 'Вы успешно вошли как админ');   
        }
        else {
            return redirect()->route('login')->with('warning', 'Только авторезированным пользователям можно войти!!!');     
            }
    }

}
