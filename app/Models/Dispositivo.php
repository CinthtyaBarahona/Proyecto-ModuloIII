<?php 
namespace App\Models;

use CodeIgniter\Model;

class Dispositivo extends Model{
    protected $table = 'dispositivos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'IdDispositivo';
    protected $allowedFields = ['nombreDispositivo', 'marcaDispositivo', 'modeloDispositivo', 'IdCentro'];
}