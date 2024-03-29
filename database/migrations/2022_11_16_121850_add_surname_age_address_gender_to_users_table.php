<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->nullable();
            $table->integer('age')->nullable();
            $table->string('address')->nullable();
            $table->unsignedSmallInteger('gender')->nullable();
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
            $table->dropColumn('surname');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('age');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('address');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('gender');
        });
    }
};
