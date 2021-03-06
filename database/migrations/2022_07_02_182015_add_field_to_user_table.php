<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // membuat data
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('roles')->after('email')->default('user');
            $table->string('phone')->after('email')->nullable('');
            $table->string('username')->after('email')->nullable('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // menghapus semua data
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->dropColumn('roles');
            $table->dropColumn('phone');
            $table->dropColumn('username');
        });
    }
}
