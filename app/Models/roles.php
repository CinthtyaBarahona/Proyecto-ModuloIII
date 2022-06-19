<?php 
namespace App\Models;

use CodeIgniter\Model;

class roles extends Model{
    protected $table = 'roles';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'IdRol';
    protected $returnType = 'object';
    protected $useSoftDeletes = false;


    protected $allowedFields = ['nombreRol', 'descripcionRol'];

}