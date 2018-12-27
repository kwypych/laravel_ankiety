<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    use AuthenticableTrait;
    public $fillable =['name', 'email', 'password'];
    //public  $fillable =['imie', 'nazwisko', 'login', 'haslo', 'email'];
    
    /*public function getImie(){ return $this->imie; }
    public function getNazwisko(){ return $this->nazwisko; }
    public function getHaslo(){ return $this->haslo; }
    public function getLogin(){ return $this->login; }
    public function getEmail(){ return $this->email; }*/
    
}
