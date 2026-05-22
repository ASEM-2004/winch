<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;
// use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $user = User::findorfail(1);
        $user->profile()->updateorcreate(['user_id' => $user->id],['bio'=>'laravel developer' , 'phone'=>'0594045051']);
        return $user->load('profile');
    }

}   
