<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraineeProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainee_profiles', function (Blueprint $table) {
            $table->id();
            $table->binary("picture");
            $table->string("name");
            $table->string("age");
            $table->string("weight");
            $table->string("height");
            $table->string("gender");
            $table->string("exe");
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
        Schema::dropIfExists('trainee_profiles');
    }
}
