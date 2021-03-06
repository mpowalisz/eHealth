<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->boolean('active')->default(false);
            $table->string('firstname', 191);
            $table->string('middle', 191)->nullable();
            $table->string('lastname', 191);
            $table->string('address_1', 191);
            $table->string('address_2', 191)->nullable();
            $table->integer('streetnumber');
            $table->string('postalcode');
            $table->string('city', 191);
            $table->string('state', 191);
            $table->string('county', 191);
            $table->string('phonenumber', 20)->nullable();
            $table->string('mobilenumber', 20)->nullable();
            $table->string('email', 191)->nullable();
            $table->year('birth_year')->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('maritalstatus', 10)->nullable();
            $table->text('my_history')->nullable();
            $table->text('family_history')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
