<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVoteToRuleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rule_user', function (Blueprint $table) {
            $table->string('vote')->after('comment_date');
            $table->boolean('vote_check')->after('vote');
            $table->date('voting_date')->after('voting_date');
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
