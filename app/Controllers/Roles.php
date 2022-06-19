<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Rol;
class Roles extends Controller{

    public function index(){

        $rol = new Rol();
        $datos['roles']=$rol->orderBy('IdRol', 'ASC')->findAll();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('roles/listar',$datos);

    }

    public function crear(){

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('roles/crear', $datos);
    }

    public function guardar(){

        $rol = new Rol();

        $datos = [
            'nombreRol'=>$this->request->getVar('nombre'),
            'descripcionRol'=>$this->request->getVar('descripcion')
        ];

        $rol->insert($datos);

        return $this->response->redirect(site_url('roles/listar'));

    }

    public function borrar($id=null){

        $rol = new Rol();
        $datosRol=$rol->where('IdRol',$id)->first();

        $rol->where('IdRol',$id)->delete($id);

        return $this->response->redirect(site_url('roles/listar'));
    }

    public function editar($id=null){

        $rol= new Rol();
        $datos['rol']=$rol->where('IdRol',$id)->first();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('roles/editar', $datos);
    }

    public function actualizar(){

        $rol = new Rol();
        $datos = [
            'nombreRol'=>$this->request->getVar('nombre'),
            'descripcionRol'=>$this->request->getVar('descripcion')
        ];
        $id = $this->request->getVar('id');

        $rol->update($id,$datos);

        return $this->response->redirect(site_url('roles/listar'));
    }
}