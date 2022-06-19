<?php 
namespace App\Models;

use CodeIgniter\Model;

class centros extends Model{
    protected $table = 'centros';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'IdCentro';
    protected $returnType = 'object';
    protected $useSoftDeletes = false;


    protected $allowedFields = ['nombreCentro', 'descripcionCentro'];

}