<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectDefectsAndNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notes', function (Blueprint $table) {

            # Add a new INT field called `defect_id` that has to be unsigned
            $table->integer('defect_id')->unsigned();

            # This field `defect_id` is a foreign key that connects to the `id`
            # field in the `defects` table
            $table->foreign('defect_id')->references('id')->on('defects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notes', function (Blueprint $table) {

            $table->dropForeign('notes_defect_id_foreign');

            $table->dropColumn('defect_id');
        });
    }
}
