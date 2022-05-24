<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ProfiloController extends Controller
{
    protected $modello_user;
    
    public function __contruct(){
        $this->modello_user=new User;
    }
    public function pagina_profilo_locatario($username_locatario){
        
        $user = $this->modello_user::where('username', $username_locatario)->get()->first();
        return view(visualizza_profilo_locatario)
        ->with('user', $user);
    }   
}
