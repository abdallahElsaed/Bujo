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
        Schema::create('brain_storms', function (Blueprint $table) {
            $table->id();
            $table->string('contents')->nullable();
            $table->string('inbox')->nullable();
            $table->string('tasks')->nullable();
            $table->string('goals')->nullable();
            $table->string('reading_list')->nullable();
            $table->integer('done')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brain_storms');
    }
};
