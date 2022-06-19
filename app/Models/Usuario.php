<?php 
namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model{
    protected $table = 'usuarios';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'IdUsuario';
    protected $useAutoIncrement = true;
    protected $returnType = "array";
    protected $allowedFields = ['NombreUsuario','Usuario','IdRol','DuiUsuario','TelUsuario','CorreoUsuario','FechaNacimiento','PASSWORD'];
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = [];
}