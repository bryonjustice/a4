<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectCausesAndDefects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('defects', function (Blueprint $table) {

            # Add a new INT field called `cause_id`
            $table->integer('cause_id')->unsigned();

            # This field `cause_id` is a foreign key that connects to the
            # `id` field in the `causes` table
            $table->foreign('cause_id')
                ->references('id')->on('causes');
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
            $table->dropForeign('defects_cause_id_foreign');

            $table->dropColumn('cause_id');
        });

    }
}
