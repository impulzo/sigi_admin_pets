<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashAuditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_audits', function (Blueprint $table) {
            $table->id();
			$table->integer('user_id');
			$table->string('start_date');
			$table->string('finish_date');
			$table->float('total_bills');
			$table->float('total_ingress');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cash_audits');
    }
}
