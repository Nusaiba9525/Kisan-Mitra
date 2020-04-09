<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AdminLogins', function (Blueprint $table) {
            $table->bigIncrements('LoginId');
            $table->string('Username');
            $table->string('Password');
            $table->string('Status');
            $table->bigInteger('FarmerId')->unsigned()->nullable();
            $table->foreign('FarmerId')
                  ->references('FarmerId')->on('FarmerRegistration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AdminLogins');
    }
}
