<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectEnvironmentsAndDefects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('defects', function (Blueprint $table) {

            # Add a new INT field called `environment_id`
            $table->integer('environment_id')->unsigned();

            # This field `environment_id` is a foreign key that connects to the
            # `id` field in the `environments` table
            $table->foreign('environment_id')
                ->references('id')->on('environments');
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
            $table->dropForeign('defects_environment_id_foreign');

            $table->dropColumn('environment_id');
        });

    }
}
