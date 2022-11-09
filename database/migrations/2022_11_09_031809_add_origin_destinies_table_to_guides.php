<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOriginDestiniesTableToGuides extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guides', function (Blueprint $table) {
            $table->unsignedBigInteger('origin_id')
            ->nullable()
            ->after('status_id');
            $table->foreign('origin_id')
            ->references('id')
            ->on('origins');

            $table->unsignedBigInteger('destiny_id')
            ->nullable()
            ->after('origin_id');
            $table->foreign('destiny_id')
            ->references('id')
            ->on('destinies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('guides', function (Blueprint $table) {
            //
        });
    }
}
