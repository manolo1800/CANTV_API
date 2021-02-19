<?php

namespace Database\Seeders;
use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente= new Cliente();
        
        $cliente->ticlie_id=1;
        $cliente->national_id="V011111111";
        $cliente->first_name="LUIS";
        $cliente->last_name="PEPEZ";
        $cliente->mari_id="1";
        $cliente->nac_id=286;
        $cliente->sex_id="1";
        $cliente->prof_id=18;
        $cliente->ctv_birthdate="1900-01-02";
        $cliente->salutation_cd="SR.";
        $cliente->phone="2423610963";
        $cliente->email_addr="CARGERNV111975@GMAIL.COM";
        $cliente->ctv_lgr_nacimiento="VENEZUELA";
        $cliente->postal="1040";
        $cliente->nied_id=2;
        $cliente->cata_id=2;
        $cliente->parr_id=286;
        $cliente->address1= "SECTOR LOMAS DEL AVILA";
        $cliente->address2="CALLE SUR";
        $cliente->address3="CASA #12-3";

        $cliente->save();
    }
}
