<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectAssignmentsAndDefects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('defects', function (Blueprint $table) {

  		  # Add a new INT field called `assignment_id` that is to be unsigned
        # (i.e. positive)
            $table->integer('assignment_id')->unsigned();

        # This field `assignment_id` is a foreign key that connects to the
        # `id` field in the `assignments` table
            $table->foreign('assignment_id')
                ->references('id')->on('assignments');
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
            $table->dropForeign('defects_assignment_id_foreign');

            $table->dropColumn('assignment_id');
        });
    }
}
