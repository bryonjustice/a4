<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectSubmittersAndDefects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('defects', function (Blueprint $table) {

            # Add a new INT field called `submitter_id`
            $table->integer('submitter_id')->unsigned();

            # This field `submitter_id` is a foreign key that connects to the
            # `id` field in the `submitters` table
            $table->foreign('submitter_id')
                ->references('id')->on('submitters');
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
            $table->dropForeign('defects_submitter_id_foreign');

            $table->dropColumn('submitter_id');
        });
    }
}
