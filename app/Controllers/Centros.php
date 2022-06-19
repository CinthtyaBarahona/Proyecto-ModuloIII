<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Centro;
class Centros extends Controller{

    public function index(){

        $Centro = new Centro();
        $datos['centros']=$Centro->orderBy('IdCentro', 'ASC')->findAll();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('centros/listar',$datos);

    }

    public function crear(){

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('centros/crear', $datos);
    }

    public function guardar(){

        $Centro = new Centro();

        $datos = [
            'nombreCentro'=>$this->request->getVar('nombre'),
            'descripcionCentro'=>$this->request->getVar('descripcion')
        ];

        $Centro->insert($datos);

        return $this->response->redirect(site_url('centros/listar'));

    }

    public function borrar($id=null){

        $Centro = new Centro();
        $datosCentro=$Centro->where('IdCentro',$id)->first();

        $Centro->where('IdCentro',$id)->delete($id);

        return $this->response->redirect(site_url('centros/listar'));
    }

    public function editar($id=null){

        $Centro= new Centro();
        $datos['Centro']=$Centro->where('IdCentro',$id)->first();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('centros/editar', $datos);
    }

    public function actualizar(){

        $Centro = new Centro();
        $datos = [
            'nombreCentro'=>$this->request->getVar('nombre'),
            'descripcionCentro'=>$this->request->getVar('descripcion')
        ];
        $id = $this->request->getVar('id');

        $Centro->update($id,$datos);

        return $this->response->redirect(site_url('centros/listar'));
    }
}