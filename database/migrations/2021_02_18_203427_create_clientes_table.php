<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('ticlie_id')->primary();
            $table->string('national_id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mari_id');
            $table->integer('nac_id');
            $table->enum('sex_id',["0","1"]);
            $table->integer('prof_id');
            $table->string('ctv_birthdate');
            $table->string('salutation_cd');
            $table->string('phone');
            $table->string('email_addr');
            $table->string('ctv_lgr_nacimiento');
            $table->string("postal");
            $table->integer("nied_id");
            $table->integer("cata_id");
            $table->integer("parr_id");
            $table->string("address1");
            $table->string("address2");
            $table->string("address3");
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}


