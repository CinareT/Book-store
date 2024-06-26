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
        Schema::create('contacts_data', function (Blueprint $table) {
            $table->id();
            $table->string('con_name');
            $table->string('con_email');
            $table->string('con_phone')->nullable();
            $table->text('con_message')->nullable();
            $table->string('subject');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts_data');
    }
};
