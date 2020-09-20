<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFormulas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('formulas', function (Blueprint $table) {
            $table->id();
            $table->string("official_name");
            $table->string("name");
            $table->string("engine");
            $table->string("year");
            $table->string("weight");
            $table->string("power");
            $table->string("fuel");
            $table->string("acceleration");
            $table->string("gearbox");
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
        Schema::dropIfExists('table_formulas');
    }
}
