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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->decimal('total_amount', 10, 2)->default(0.00);
            $table->string('firstName');
            $table->string('lastName');
            $table->string('companyName');
            $table->string('countryName');
            $table->string('email');
            $table->string('phoneNo');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zipCode', 10, 2);
            $table->text('orderNote')->nullable();
            // Foreign Key Constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
