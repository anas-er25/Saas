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
        Schema::create('invoices', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('code')->unique();
            $table->foreignId('user_id')->constrained();
            $table->string('stripe_invoice');
            $table->enum('status', ['sent', 'paid', 'unpaid'])->default('sent');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
