<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Add the 'name' column of type string
            $table->string('street'); // Add the 'street' column of type string
            $table->string('home_nr'); // Add the 'home_nr' column of type string
            $table->string('zipcode'); 
            $table->string('city'); 
            $table->string('phone_nr'); 
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person');
    }
};
