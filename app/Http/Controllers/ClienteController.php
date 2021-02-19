<?php
/*todas las vistas estan en resources/views/clientes y la conexion esta configurada tanto en
app/config/database.php como en el archibo .env */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;


class ClienteController extends Controller
{
    public function CrearCliente(Request $request)
    {

        $request->validate([
            'national_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'mari_id' => 'required',
            'nac_id' => 'required',
            'sex_id' => 'required',
            'prof_id' => 'required',
            'ctv_birthdate' => 'required',
            'salutation_cd' => 'required',
            'phone' => 'required',
            'email_addr' => 'required',
            'ctv_lgr_nacimiento' => 'required',
            'postal' => 'required',
            'nied_id' => 'required',
            'cata_id' => 'required',
            'parr_id' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'address3' =>'required'
        ]);

        $cliente= new Cliente();
        $cliente->national_id = $request->national_id;
        $cliente->first_name= $request->first_name;
        $cliente->last_name= $request->last_name;
        $cliente->mari_id= $request->mari_id;
        $cliente->nac_id= $request->nac_id;
        $cliente->sex_id= $request->sex_id;
        $cliente->prof_id= $request->prof_id;
        $cliente->ctv_birthdate= $request->ctv_birthdate;
        $cliente->salutation_cd= $request->salutation_cd;
        $cliente->phone= $request->phone;
        $cliente->email_addr= $request->email_addr;
        $cliente->ctv_lgr_nacimiento= $request->ctv_lgr_nacimiento;
        $cliente->postal= $request->postal;
        $cliente->nied_id= $request->nied_id;
        $cliente->cata_id= $request->cata_id;
        $cliente->parr_id= $request->parr_id;
        $cliente->address1= $request->address1;
        $cliente->address2= $request->address2;
        $cliente->address3= $request->address3;

        $guardar=$cliente->save();
        if($guardar)
        {
            $mensaje="sus datos se han cargado con exito";
            return view('cliente/mensaje',compact('mensaje'));
        }else{
            $mensaje="sus datos se han podido cargar por favor intente mas tarde";
            return view('cliente/mensaje',compact('mensaje'));
        }
    }

    public function BuscarDatos(Request $request)
    {
       
        $request->validate(['national_id'=> 'required']);    
        $buscar=Cliente::where('national_id',$request->national_id)->get();
        
        return view('cliente/MostrarDatos',compact('buscar'));
       

    }

    public function buscar()
    {
        return view('cliente.buscar');
    }
    
    public function Formulario()
    {
        return view('cliente.Nuevo');
    }
}
