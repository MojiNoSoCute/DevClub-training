<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('majors', function (Blueprint $table) {
            $table->id('id');
            $table->string('major');
            $table->timestamps();
        });

        Schema::create('userDev', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->notnull();
            $table->string('last_name')->notnull();
            $table->string('email')->unique() ->notnull();
            $table->unsignedBigInteger('major_id')->notnull();
            $table->unsignedInteger('year_of_study')->notnull();
            $table->timestamps();

            //create foreign key
            $table->foreign('major_id')->references('id')->on('majors')->onDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userDev');
        Schema::dropIfExists('majors');
    }
};
