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
        Schema::table('events', function(Blueprint $table) {
            $table->foreignId('venue_id')->constrained('venues', 'venue_id')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users', 'user_id')->cascadeOnDelete();
        });

        Schema::table('game_history', function(Blueprint $table) {
            $table->foreignId('user_id')->constrained('users', 'user_id')->cascadeOnDelete();
        });

        Schema::table('game_questions', function(Blueprint $table) {
            $table->foreignId('a_id')->after('q_id')->constrained('game_answers', 'a_id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
