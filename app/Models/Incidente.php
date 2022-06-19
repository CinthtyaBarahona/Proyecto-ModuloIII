<?php 
namespace App\Models;

use CodeIgniter\Model;

class Incidente extends Model{
    protected $table = 'incidentes';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'IdIncidente';
    protected $allowedFields = ['NombreIncidente', 'DescripcionIncidente', 'IdEstado', 'IdCentro', 'IdDispositivo'];
}