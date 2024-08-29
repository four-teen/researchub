<?php

namespace App\Models;

use CodeIgniter\Model;

class SubjectModel extends Model
{
    protected $table            = 'tblsubjects';
    protected $primaryKey       = 'subject_id ';

    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;

    protected $allowedFields    = [
            'subject_code', 
            'subject_desc'
    ];

    protected bool $updateOnlyChanged = true;
    // Dates
    protected $useTimestamps = false;
    protected $deletedField  = 'datedeleted';
}
