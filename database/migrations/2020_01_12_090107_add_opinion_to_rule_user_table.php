<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOpinionToRuleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rule_user', function (Blueprint $table) {
            $table->string('opinion')->after('user_id');
            $table->text('comment')->after('opinion');
            $table->date('comment_date')->after('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rule_user', function (Blueprint $table) {
            //
        });
    }
}
