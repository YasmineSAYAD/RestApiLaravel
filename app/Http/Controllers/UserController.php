<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\ApiController;

class UserController extends ApiController
{
    //get user by id
    public function show(User $user)
     {
         return $this->showOne($user);
     }
     //get all users
     public function index()
     {
         $users=User::all();
         return $this->showAll($users);
     }
     //delete user
     public function destroy(User $user)
     {
         $user->delete();
         return $this->showOne($user);
   
     }

}
