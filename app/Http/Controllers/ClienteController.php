<?php
/*todas las vistas estan en resources/views/clientes y la conexion esta configurada tanto en
app/config/database.php como en el archibo .env 
las rutas estan configuradas en el archivo web del fichero routes</div> */
namespace App\Http\Controllers;


use App\Models\Cliente;
use Illuminate\support\Facades\Http;

class ClienteController extends Controller
{
    

    public function BuscarDatos()
    {
       
        $cliente= HTTP::post('https://10.2.36.179/api/clientes');//recoge datos post de la api
        $cliente->string();
        $buscar=Cliente::where('national_id',$cliente)->first();
        if(!empty($buscar))
        {
            return $buscar;//aqui se tiene que enviar al usuario sus datos mediante un post
                                
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
