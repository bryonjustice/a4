<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefectTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defect_tag', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();

            # `defect_id` and `tag_id` will be foreign keys and unsigned

            $table->integer('defect_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            # Make foreign keys
            # `defect_id` will reference the `defects table` and
            # `tag_id` will reference the `tags` table.

            $table->foreign('defect_id')->references('id')->on('defects');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('defect_tag');
    }
}
