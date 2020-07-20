<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->integer('cases');
            $table->integer('todayCases');
            $table->integer('deaths');
            $table->integer('todayDeaths');
            $table->integer('recovered')->nullable();
            $table->integer('active')->nullable();
            $table->integer('critical');
            $table->integer('casesPerOneMillion');
            $table->integer('deathsPerOneMillion');
            $table->integer('totalTests');
            $table->integer('testsPerOneMillion');
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
        Schema::dropIfExists('information');
    }
}
