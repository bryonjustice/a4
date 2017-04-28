<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectComponentsAndDefects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('defects', function (Blueprint $table) {

            # Add a new INT field called `component_id`
            $table->integer('component_id')->unsigned();

            # This field `component_id` is a foreign key that connects to the
            # `id` field in the `components` table
            $table->foreign('component_id')
                ->references('id')->on('components');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('defects', function (Blueprint $table) {
            $table->dropForeign('defects_component_id_foreign');

            $table->dropColumn('component_id');
        });

    }
}
