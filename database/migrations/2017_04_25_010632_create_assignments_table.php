<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {

		        # Increments method will make a Primary, Auto-Incrementing field.
		        $table->increments('id');

		        # This generates two columns: `created_at` and `updated_at` to
		        # keep track of changes to a row
		        $table->timestamps();

		        # The rest of the fields...
		        $table->char('short_name', 2);
            $table->string('long_name');
            $table->boolean('active')->default(1);
            
	      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('assignments');
    }
}
