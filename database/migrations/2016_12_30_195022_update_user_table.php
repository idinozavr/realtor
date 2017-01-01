<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table){
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');
            $table->string('father_name')->nullable()->after('last_name');
            $table->boolean('status')->after('remember_token')->default(false);
            $table->dropColumn('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table){
            $table->string('name')->after('id');
            $table->dropColumn('first_name','last_name','father_name','status');
        });
    }
}
