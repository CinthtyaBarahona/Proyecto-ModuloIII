<?php 
namespace App\Models;

use CodeIgniter\Model;

class dispositivos extends Model{
    protected $table = 'dispositivos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'IdDispositivo';
    protected $returnType = 'object';
    protected $useSoftDeletes = false;


    protected $allowedFields = ['nombreDispositivo'];

}