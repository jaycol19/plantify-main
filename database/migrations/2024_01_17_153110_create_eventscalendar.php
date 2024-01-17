<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
     public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('location');
            $table->string('description');
            // Add other columns as needed

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
    
};
