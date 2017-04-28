<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectPrioritiesAndDefects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('defects', function (Blueprint $table) {

            # Add a new INT field called `priority_id`
            $table->integer('priority_id')->unsigned();

            # This field `priority_id` is a foreign key that connects to the
            # `id` field in the `priorities` table
            $table->foreign('priority_id')
                ->references('id')->on('priorities');
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
            $table->dropForeign('defects_priority_id_foreign');

            $table->dropColumn('priority_id');
        });
    }
}
