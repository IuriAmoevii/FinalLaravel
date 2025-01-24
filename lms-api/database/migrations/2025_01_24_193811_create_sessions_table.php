<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create sessions table with necessary columns
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string('payload');
            $table->integer('last_activity');
            $table->bigInteger('user_id')->unsigned()->nullable(); // Add user_id column
            $table->string('ip_address')->nullable();  // Add ip_address column
            $table->string('user_agent')->nullable();  // Add user_agent column
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
        Schema::dropIfExists('sessions');
    }
}
