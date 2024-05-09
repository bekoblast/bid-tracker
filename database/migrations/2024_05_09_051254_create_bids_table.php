<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->bigInteger('number')->unique();
            $table->bigInteger('refernce')->unique();
            $table->text('description');
            $table->decimal('price');
            $table->string('status');
            $table->integer('duration');
            $table->boolean('insurance');
            $table->string('Type');
            $table->integer('entity_id');
            $table->date('start');
            $table->date('end');
            $table->integer('remain_days');
            $table->integer('remain_hours');
            $table->string('docs');
            $table->boolean('ig');
            $table->decimal('ig_percentage');
            $table->date('queries_last_date');
            $table->date('open_bids_date');
            $table->date('check_bids_date');
            $table->date('winning_date');
            $table->date('begin_working_date');
            $table->date('participation_confirmation_date');
            $table->string('opening_bids_location');
            $table->string('working_location');
            $table->string('bid_type');
            $table->string('bidders');
            $table->string('winner_bidder');
            $table->string('ig_address');
            $table->integer('fg');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bids');
    }
};
