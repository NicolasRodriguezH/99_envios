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
            $table->integer('peso_bruto'); // 1Kg
            $table->string('unidad'); // Kg / Lb - me suena mas este
            $table->string('dice_contener', 50)->nullable();
            $table->string('observaciones', 250)->nullable();
            $table->decimal('peso')->nullable();
            $table->decimal('largo')->nullable();
            $table->decimal('ancho')->nullable();
            $table->decimal('alto')->nullable();
            //$table->decimal('valor_flete')->nullable(); //campo ubicado en origins_table
            $table->boolean('shipping_pickup')->nullable();
            $table->string('urlguide')->nullable();

            //$table->string('paquetes_guardados')->nullable();
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
