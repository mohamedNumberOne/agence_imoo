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
        Schema::create('real_states', function (Blueprint $table) {
            $table->id();
            $table->string("titre_bien")-> nullable() ;
            $table->string("photo_principale");
            $table->string("etage");
            $table->enum(  'statut' , [ "disponible", 'réservé' , "loué" , "vendu" ]);
            
            $table->text("adresse");

            $table->unsignedBigInteger("type_bien_id");
            $table->tinyInteger("wilaya_id")-> nullable() ;
            $table->tinyInteger("daira_id")->nullable();

            $table->foreign('wilaya_id')->references('id')->on('wilayas')->onDelete('set null');
            $table->foreign('daira_id')->references('id')->on('dairas')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('real_states');
    }
};
