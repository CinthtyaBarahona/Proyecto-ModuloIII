<?php 
namespace App\Models;

use CodeIgniter\Model;

class estados extends Model{
    protected $table = 'estados';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'IdEstado';
    protected $returnType = 'object';
    protected $useSoftDeletes = false;


    protected $allowedFields = ['Estado'];

}