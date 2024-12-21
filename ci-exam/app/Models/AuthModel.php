<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'auth';
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name','last_name','email','password','semester','gender','phone'];
}
