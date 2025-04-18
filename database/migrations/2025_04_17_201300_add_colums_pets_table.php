<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumsPetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pets', function (Blueprint $table) {
			$table->date('admission_date')->nullable();
            $table->integer('walk')->nullable();
            $table->integer('morning')->nullable();
            $table->integer('afternoon')->nullable();
            $table->time('other_morning')->nullable();
            $table->time('other_afternoon')->nullable();
            $table->time('night')->nullable();
            $table->string('house_place')->nullable();
            $table->integer('housemates')->nullable();
            $table->string('indoor')->nullable();
            $table->string('outdoor')->nullable();
			$table->boolean('allergy');
			$table->string('allergy_details')->nullable();
			$table->boolean('fracture');
			$table->string('fracture_details')->nullable();
			$table->boolean('scar');
			$table->string('scar_details')->nullable();
			$table->boolean('hospitalization');
			$table->string('hospitalization_details')->nullable();
			$table->boolean('training');
            $table->string('training_details')->nullable();
			$table->string('arrive')->nullable();
			$table->string('behavior_dogs')->nullable();
            $table->string('behavior_people')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
