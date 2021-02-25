<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class ClienteController extends Controller
{
    

    public function index (Request $request)
    {
        $client = new Client([
            //url de base con la que se hace la peticion
            'base_uri' => 'https://10.2.36.179/api/',
            //tiempo de espera para conectar a la api
            'timeout'  => 5.0,
        ]);
        $national_id=$request->national_id;    
        $response = $client->request('GET', "clientes/?national_id=$national_id");
    
        $user= ($response->getBody()->getContents());
        if(!empty($user) ||$user=="[]" || $user=="{}" || $user="[{}]"){
            return view('cliente.nuevo');
        }else{    
        return view('cliente.mostrar',compact('user'));
        } 
            
    }

    public function show (Request $request)
    {
       
        $client = new Client([
            //url de base con la que se hace la peticion
            'base_uri' => 'https://10.2.36.179/api/',
            //tiempo de espera para conectar a la api
            'timeout'  => 5.0,
        ]);
        $national_id=$request->national_id;    
        $response = $client->request('GET', "clientes/?national_id=$national_id");
    
        $user= ($response->getBody()->getContents());
        if($user=="[]" || $user=="{}"){
            return view('cliente.nuevo');
        }else{    
        return view('cliente.mostrar',compact('user'));
        } 
    }

    public function formulario()
    {
        return view('cliente/buscar');
    }

    public function crear(Request $request)
    {
        $client = new Client([
            //url de base con la que se hace la peticion
            'base_uri' => 'https://10.2.36.179/api/',
            //tiempo de espera para conectar a la api
            'timeout'  => 5.0,
        ]);
          
        $national_id = $request->national_id;
        $first_name= $request->first_name;
        $last_name= $request->last_name;
        $mari_id= $request->mari_id;
        $nac_id= $request->nac_id;
        $sex_id= $request->sex_id;
        $prof_id= $request->prof_id;
        $ctv_birthdate= $request->ctv_birthdate;
        $salutation_cd= $request->salutation_cd;
        $phone= $request->phone;
        $email_addr= $request->email_addr;
        $ctv_lgr_nacimiento= $request->ctv_lgr_nacimiento;
        $postal= $request->postal;
        $nied_id= $request->nied_id;
        $cata_id= $request->cata_id;
        $parr_id= $request->parr_id;
        $address1= $request->address1;
        $address2= $request->address2;
        $address3= $request->address3;
        
        $response = $client->request('POST', "clientes",[
        
        'form_params'=>[ 
        'national_id'=>$national_id,
        'first_name'=> $first_name,
        'last_name'=> $last_name,
        'mari_id'=> $mari_id,
        'nac_id'=> $nac_id,
        'sex_id'=> $sex_id,
        'prof_id'=> $prof_id,
        'ctv_birthdate'=>$ctv_birthdate,
        'salutation_cd'=> $salutation_cd,
        'phone'=> $phone,
        'email_addr'=>$email_addr,
        'ctv_lgr_nacimiento'=>$ctv_lgr_nacimiento,
        'postal'=>$postal,
        'nied_id'=>$nied_id,
        'cata_id'=> $cata_id,
        'parr_id'=> $parr_id,
        'address1'=> $address1,
        'address2'=> $address2,
        'address3'=> $address3
        ]
        ]);        
        return view('cliente/buscar');
    }
    
   
    
}
