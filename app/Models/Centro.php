<?php 
namespace App\Models;

use CodeIgniter\Model;

class Centro extends Model{
    protected $table = 'centros';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'IdCentro';
    protected $allowedFields = ['nombreCentro', 'descripcionCentro'];
}