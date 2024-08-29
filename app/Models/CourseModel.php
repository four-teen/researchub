<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table            = 'tblcourses';
    protected $primaryKey       = 'courseid ';

    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;

    protected $allowedFields    = [
            'coursecode', 
            'coursedesc'
    ];

    protected bool $updateOnlyChanged = true;
    // Dates
    protected $useTimestamps = false;
    protected $deletedField  = 'datedeleted';
}
