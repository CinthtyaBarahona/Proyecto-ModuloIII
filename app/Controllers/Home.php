<?php

namespace App\Controllers;
use App\Models\Usuario;
use CodeIgniter\HTTP\RequestInterface;
use Throwable;

class Home extends BaseController
{
    private $usuarios;
    protected $request,$session;

    public function __construct(){
        $this->usuarios= new Usuario();
        $this->request = \Config\Services::request();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $this->session->destroy();
        return view('login');
    }

    public function inicio(){

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('inicio', $datos);
    }

    public function login(){
        try{
            $usuario = $this->request->getPost('usuario');
            $password = $this->request->getPost('password');

            if(!isset($usuario) || !isset($password)){
                $errores= 'no se han recibido parametros';
                return view('login', ['errores'=>$errores]);
            }

            $respuesta = $this->usuarios->where([
                'Usuario'=>$usuario,
                'PASSWORD'=>$password
            ])->first();

            if($respuesta==null){
                $errores= 'Usuario o password incorrecto';
                return view('login', ['errores'=>$errores]);
            }

            $this->session->set('usuario',$respuesta['Usuario']);
            return redirect()->to('/inicio');

        }catch(Throwable $e){
            return view('login',['errores'=>$e->getMessage()]);
        }
    }
}