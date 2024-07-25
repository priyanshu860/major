<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name")->nullable()->default("0");
            $table->integer("price")->nullable()->default("0");
            $table->tinyinteger("status")->nullable()->default("0");
            $table->timestamps();
            
        });
    }

    /**

     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher');
    }
}
