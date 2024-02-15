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
        Schema::table('admin_products', function (Blueprint $table) {
            
            $table->string('description')->nullable();

            $table->string('availability')->nullable();
            $table->string('about')->nullable();
            $table->number('qty')->nullable();
            $table->boolean('is_discount')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
