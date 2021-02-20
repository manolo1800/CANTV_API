<?php
/*todas las vistas estan en resources/views/clientes y la conexion esta configurada tanto en
app/config/database.php como en el archibo .env 
las rutas estan configuradas en el archivo web del fichero routes</div> */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;


class ClienteController extends Controller
{
    

    public function BuscarDatos(Request $request)
    {
       
        $request->validate(['national_id'=> 'required']);
        $national_id=$request->national_id;    
        
        $buscar=Cliente::where('national_id',$national_id)->first();
        
        if(!empty($buscar))
        {
            return url('https://www.google.com/search?client=opera&q=google&sourceid=opera&ie=UTF-8&oe=UTF-8'); /*$buscar;*///aqui se tiene que enviar al usuario sus datos mediante un post
                                
        }else{
        return "no existe";/*aqui va la direccion que reenvia a crear el nuevo cliente si no existe 
                             la cedula https://10.2.36.179/api/clientes/nuevo*/ 
        
        }

    }

    public function buscar()
    {
        return view('cliente.buscar');//este metodo es solo de prueba borrar para produccion
    }
    
}
