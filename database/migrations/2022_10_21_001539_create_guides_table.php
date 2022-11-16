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
            //$table->string('cliente');
            //$table->integer('codigo_convenio_remitente')->nullable();
            $table->decimal('valor_declarado')->nullable();
            //$table->integer('id_tipo_envio')->nullable(); // seria campo en relacion a tabla tipo_envio
            $table->string('nombre_tipo_envio', 50)->nullable(); // ¿ O se puede usar este campo ?
            $table->boolean('aplica_contrapago')->nullable();
            $table->integer('peso_bruto'); // 1Kg
            $table->string('unidad'); // Kg / Lb - me suena mas este
            $table->string('dice_contener', 50)->nullable();
            $table->string('observaciones', 250)->nullable();
            $table->decimal('peso')->nullable();
            $table->decimal('largo')->nullable();
            $table->decimal('ancho')->nullable();
            $table->decimal('alto')->nullable();

            $table->string('paquetes_guardados')->nullable();


            /* Estos campos, podrian servir para el PDF? */

            /* $table->integer('id_forma_pago')->nullable();
            $table->integer('numero_pieza')->nullable();
            $table->string('descripcion_tipo_entrega', 50)->nullable();
            $table->integer('codigo_convenio')->nullable();
            $table->integer('id_sucursal')->nullable(); */
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
