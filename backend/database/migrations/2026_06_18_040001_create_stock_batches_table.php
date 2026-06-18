<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stock_batches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->restrictOnDelete();
            $table->foreignId('branch_id')->constrained('branches')->restrictOnDelete();
            $table->foreignId('purchase_order_item_id')->nullable()->constrained('purchase_order_items')->nullOnDelete();
            $table->string('batch_code', 50)->nullable();
            $table->decimal('quantity', 12, 2)->default(0);
            $table->date('expiry_date')->nullable();
            $table->date('received_at');
            $table->timestamps();

            $table->index(['product_id', 'branch_id', 'expiry_date']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock_batches');
    }
};