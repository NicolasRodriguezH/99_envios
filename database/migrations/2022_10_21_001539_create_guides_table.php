<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor_declarado')->nullable();
            $table->boolean('aplica_contrapago')->nullable();
            $table->integer('peso_bruto')->nullable(); // 1Kg
            $table->string('unidad')->nullable(); // Kg / Lb - me suena mas este
            $table->string('dice_contener', 50)->nullable();
            $table->string('observaciones', 250)->nullable();
            $table->decimal('peso')->nullable();
            $table->decimal('largo')->nullable();
            $table->decimal('ancho')->nullable();
            $table->decimal('alto')->nullable();
            $table->boolean('recogida_envio')->nullable();
            $table->string('urlguide')->nullable();
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
        Schema::dropIfExists('guides');
    }
}
