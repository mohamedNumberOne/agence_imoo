<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('real_states', function (Blueprint $table) {
            $table->id();
            $table->string("titre_bien")->nullable();
            $table->string("photo_principale");
            $table->string("etage");
            $table->enum('statut', ["disponible", 'réservé', "loué", "vendu"])->default("disponible");

            $table->text("adresse");
            $table->text("description");
          
            $table->string("Superficie");
            $table->string("prix");
            $table->string("num_prop");
            $table->enum('transaction', ["vente", 'location', "partenariat", "autre"])->default("vente");
            $table->tinyInteger("nb_pieces") -> nullable() ;


            $table->unsignedBigInteger("real_state_type_id")->nullable();
            $table->tinyInteger("wilaya_id")->nullable();
            $table->smallInteger("daira_id")->nullable();

            $table->foreign('wilaya_id')->references('id')->on('wilayas')->onDelete('set null');
            $table->foreign('daira_id')->references('id')->on('dairas')->onDelete('set null');
            $table->foreign('real_state_type_id')->references('id')->on('real_state_types')->onDelete('set null');

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
