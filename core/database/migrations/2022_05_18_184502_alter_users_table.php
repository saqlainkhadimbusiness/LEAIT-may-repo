<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->decimal('matching_bonus',18,8)->default(0);
            $table->decimal('pairing_bonus',18,8)->default(0);
            $table->enum('credit_drb',[0,1])->default(0);
            $table->enum('credit_cb',[0,1])->default(0);
            $table->enum('credit_pb',[0,1])->default(0);
            $table->enum('credit_mb',[0,1])->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn('matching_bonus');
            $table->dropColumn('pairing_bonus');
            $table->dropColumn('credit_drb');
            $table->dropColumn('credit_cb');
            $table->dropColumn('credit_pb');
            $table->dropColumn('credit_mb');
        });
    }
}
