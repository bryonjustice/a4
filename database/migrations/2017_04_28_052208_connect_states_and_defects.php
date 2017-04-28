<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectStatesAndDefects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('defects', function (Blueprint $table) {

            # Add a new INT field called `state_id`
            $table->integer('state_id')->unsigned();

            # This field `state_id` is a foreign key that connects to the
            # `id` field in the `states` table
            $table->foreign('state_id')
                ->references('id')->on('states');
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
            $table->dropForeign('defects_state_id_foreign');

            $table->dropColumn('state_id');
        });

    }
}
