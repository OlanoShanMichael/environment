<?php
 namespace App\Models;
 use Illuminate\Database\Eloquent\Model;
 
 class User extends Model{
 protected $table = 'users';
 // column sa table
 protected $fillable = [
 'username', 'password'
 ];

public $timestamps = false;
 protected $primaryKey = 'id';
}