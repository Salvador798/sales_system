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
        Schema::create('shoppings', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_time');
            $table->decimal('tax', 8, 2)->unsigned();
            $table->string('voucher_number', 255);
            $table->decimal('total', 8, 2)->unsigned();
            $table->tinyInteger('status')->default(1);
            $table->foreignId('voucher_id')->nullable()->constrained('vouchers')->onDelete('set null');
            $table->foreignId('supplier_id')->nullable()->constrained('vouchers')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shoppings');
    }
};
