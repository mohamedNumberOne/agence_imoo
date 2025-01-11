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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string("company_name");
            $table->string("company_tlf1", 15 );
            $table->string("company_tlf2", 15 );
            $table->string("company_email") ;
            $table->string("company_adresse" )  ;
            $table->string("fb_link")  ;
            $table->string("insta_link")  ;
            $table->string("tiktok_link")  ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
