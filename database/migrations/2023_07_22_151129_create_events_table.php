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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('artist_id')->nullable()->constrained();
            // $table->foreignId('live_id')->nullable()->constrained();
            $table->string('event_title')->comment('イベント名');
            $table->string('event_body')->nullable()->comment('イベント内容');
            $table->foreignId('user_id')->constrained();
            $table->text('body', 2000);
            $table->timestamps();
            $table->text('start_date');
            $table->text('end_date');
            $table->text('color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
