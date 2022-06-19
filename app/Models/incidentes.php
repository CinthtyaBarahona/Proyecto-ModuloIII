<?php 
namespace App\Models;

use CodeIgniter\Model;

class incidentes extends Model{
    protected $table = 'incidentes';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'IdIncidente';
    protected $returnType = 'object';
    protected $useSoftDeletes = false;


    protected $allowedFields = ['nombreIncidente', 'descripcionIncidente'];

}