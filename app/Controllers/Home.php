<?php

namespace App\Controllers;
// use App\Models

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    } 
    
    

    public function prueba ()
    {
        echo 'hola esto es una prueba';
    }

    public function api ()
    {


        echo 'API REST DE VENTAS DE CARROS';

        $descrip= array (
                "usuario"=>"ELCHORDY",
                "nombres"=>"Jordy Alava",
                "Ciudad"=>"Quito",
                "Direccion"=>"Av.America",
                "telefono"=>"+593993760230"
    
    );

        
        $distriChev= array (
            "usuario"=>"Chevrolet",
            "Empresa matriz:"=>"General Motors ",
            "Ciudad"=>"Quito",
            "Tipo"=>"división, productor de automóviles y marca de automóviles",
            "Industria"=>":Industria automotriz",  
            "Fundador"=>"Louis Chevrolet, William Crapo Durant"

        );
        $distriKIA= array (
            "usuario"=>"KIA Motors",
            "Empresa matriz:"=>"Hyundai Motor Group",
            "Ciudad"=>"Quito",
            "Tipo"=>"Subsidiaria, Automóviles",
            "Industria"=>":Automotriz",  
            "Fundador"=>"Kim Cheol-ho"
        );

        $distriFORD= array (
            "usuario"=>"FORD",
            "Empresa matriz:"=>"FORD MOTOR COMPANY",
            "Ciudad"=>"Quito",
            "Tipo"=>"productor de automóviles, negocio, empresa de capital abierto, marca y holding",
            "Industria"=>":industria automotriz",  
            "Fundador"=>"Henry Ford"
        );


        $distriMaz= array (
            "usuario"=>"MAZDA",
            "Empresa matriz:"=>"Mazda Motor Corporation",
            "Ciudad"=>"Quito",
            "Tipo"=>"productor de automóviles, empresa de capital abierto y marca",
            "Industria"=>":industria automotriz",  
            "Fundador"=>"Jujiro Matsuda"
        );

        
        $resultado = array($descrip,$distriChev,$distriKIA,$distriFORD,$distriMaz);

        return $this->response->setJSON($resultado);
        }   
    
            
    
        public function login(){
    
    return view('login');
        
        }
    
    
        public function testbd($cedula)
        {
    
            $this->db=\Config\Database::connect();
            $query=$this->db->query("SELECT idpersonal, cedula, apellido1, apellido2, nombres, genero 
            FROM esq_datos_personales.personal where cedula='$cedula'  ");
            $result=$query->getResult();
            return $this->response->setJSON($result);
    
    
            // echo "hi";
        
        }
    }