<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Dispositivo;

class Dispositivos extends Controller
{


    public function index()
    {
        $dispositivo= new Dispositivo();
        $datos['dispositivos']= $dispositivo->orderBy('IdDispositivo','ASC')->paginate(10);
        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('dispositivos/listar', $datos);
    }

    public function crear()
    {
        $model = model('centros');
        $datos['centros'] = $model->findAll();
        $datos['cabecera']= view('template/cabecera');
        return view('dispositivos/crear', $datos);
    }

    public function guardar()
    {
     
        $dispositivo = new Dispositivo();
        $datos=[
            'nombreDispositivo'=>$this->request->getVar('nombre'),
            'descripcionDispositivo'=> $this->request->getVar('descripcion'),
            'marcaDispositivo'=>$this->request->getVar('marca'),
            'modeloDispositivo'=>$this->request->getVar('modelo'),
            'IdCentro'=>$this->request->getVar('centro')
        ];

        $dispositivo->insert($datos);
       

       return $this->response->redirect(site_url('dispositivos/listar'));
    }
    
    public function borrar($id=null)
    {
        $dispositivo= new dispositivo();
        $datosDispositivo=$dispositivo->where('id',$id)->first();
        \unlink($ruta);

        $dispositivo->where('Iddispositivo',$id)->delete($id);

        return $this->responsive->redirect(site_url('dispositivos/listar'));
    }

    public function editar($id=null)
    {
        print_r($id);
        $dispositivo= new dispositivo();
        $datos['dispositivo']=$dispositivo->where('IdDispositivo',$id)->first();

        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('dispositivos/editar', $datos);
    }

    public function actualizar()
    {
        $dispositivo=new dispositivo();
        $datos=[
            'NombreDispositivo'=>$this->request->getVar('nombre'),
            'MarcaDispositivo'=>$this->request->getVar('marca'),
            'ModeloDispositivo'=>$this->request->getVar('modelo'),
            'IdCentro'=>$this->request->getVar('centro'),
            'Descripcion'=>$this->request->getVar('descripcion')

        ];
        $id=$this->request->getVar('id');
        $dispositivo->update($id,$datos);
    }
}
