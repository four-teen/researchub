<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'tblaccount';
    protected $primaryKey       = 'accountid';
    protected $DBGroup          = 'default';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'oauth_id', 
        'fullname', 
        'email', 
        'profile_image', 
        'createat', 
        'updatedat'

    ];


}
