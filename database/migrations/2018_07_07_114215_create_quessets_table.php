<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuessetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quessets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('package',50);
            $table->integer('set');
            $table->integer('question_id');
            $table->timestamps();
            $table->timestamp('expired_at')->nullable();
            $table->unique(['package','set','question_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quessets');
    }
}
