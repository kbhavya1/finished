<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{

    /*private function addMediumBlobColumnsInQuestions($columnsArr){
            $sql="ALTER TABLE questions";
            echo $sql;
            for($i=count($columnsArr);$i>0;$i--){
                $sql=$sql." ADD COLUMN ".$columnsArr[$i]." MEDIUMBLOB  ";
                if($i > 1)
                    $sql = $sql.",";
            }




        //return $sql;
    }*/

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->char('subject',1);

            $table->boolean('istxt_ques')->default(true);

            $table->boolean('istxt_op1')->default(true);

            $table->boolean('istxt_op2')->default(true);

            $table->boolean('istxt_op3')->default(true);

            $table->boolean('istxt_op4')->default(true);

            $table->boolean('istxt_op5')->default(true);

            $table->boolean('istxt_op6')->default(true);
            $table->boolean('iscorrect_op1')->default(false);
            $table->boolean('iscorrect_op2')->default(false);
            $table->boolean('iscorrect_op3')->default(false);
            $table->boolean('iscorrect_op4')->default(false);
            $table->boolean('iscorrect_op5')->default(false);
            $table->boolean('iscorrect_op6')->default(false);
            $table->timestamps();
        });

        \DB::statement("ALTER TABLE questions ADD ques MEDIUMBLOB");
         \DB::statement("ALTER TABLE questions ADD op1 MEDIUMBLOB");
          \DB::statement("ALTER TABLE questions ADD op2 MEDIUMBLOB");
           \DB::statement("ALTER TABLE questions ADD op3 MEDIUMBLOB");
            \DB::statement("ALTER TABLE questions ADD op4 MEDIUMBLOB");
            DB::statement("ALTER TABLE questions ADD op5 MEDIUMBLOB");
            DB::statement("ALTER TABLE questions ADD op6 MEDIUMBLOB");




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
