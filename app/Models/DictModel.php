<?php

namespace App\Models;

use CodeIgniter\Model;

class DictModel extends Model
{
    protected $table      = 'tblusers';
    protected $primaryKey = 'userid';

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;


    protected $allowedFields = 
    [
        'lastname', 
        'firstname',
        'middlename',
        'username',
        'password'
    ];
    protected bool $updateOnlyChanged = true;
    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'entrydate';
    protected $updatedField  = 'lastupdatingdate';
    protected $deletedField  = 'datedeleted';
}
