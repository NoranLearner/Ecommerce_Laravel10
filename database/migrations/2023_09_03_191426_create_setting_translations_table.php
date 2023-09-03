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
        Schema::create('setting_translations', function (Blueprint $table) {
            // The id method is an alias of the bigIncrements method.
            $table->id();
            // $table->increments('id');
            // $table->integer('setting_id')->unsigned();
            $table->bigInteger('setting_id')->unsigned();
            $table->string('locale');
            $table->longText('value')->nullable();
            $table->unique(['setting_id', 'locale']);
            // For Relationship
            $table->foreign('setting_id')->references('id')->on('settings')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_translations');
    }
};
