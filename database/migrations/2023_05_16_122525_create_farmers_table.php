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
        Schema::create('farmers', function (Blueprint $table) {
            $table->id();
            $table->string("groupname");
            $table->string('county')->nullable();
            $table->string('subcounty')->nullable();
            $table->string('location')->nullable();
            $table->string("firstname");
            $table->string("middlename");
            $table->string("lastname");
            $table->date('dob');
            $table->string("village");
            $table->string("mobile");
            $table->string("maritalStatus");
            $table->string("idnumber");
            $table->string("occupation");
            $table->string("incomeSource");
            $table->string("monthlyincome");
            $table->boolean("children");
            $table->integer("under5");
            $table->integer("children6to11");
            $table->integer("children12to18");
            $table->string("landstatus");
            $table->float("landsize");
            $table->string("cropgrown");
            $table->string("marketaccess");
            $table->string("wateraccess");
            $table->string("lastcrop");
            $table->string('animal');
            $table->integer("cropearnings");
            $table->float("projectland");
            $table->integer("projecttime");
            $table->boolean("pumpkin");
            $table->string('geolocation');
            $table->string('photo');
            $table->string("terms");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmers');
    }
};
