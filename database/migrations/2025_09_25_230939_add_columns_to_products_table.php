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
        Schema::table('products', function (Blueprint $table) {
            $table->string('reference');
            $table->bigInteger('barcode');
            $table->integer('stock_quantity');
            $table->string('observation')->nullable();
            $table->string('add_info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('reference');
            $table->dropColumn('barcode');
            $table->dropColumn('stock_quantity');
            $table->dropColumn('observation');
            $table->dropColumn('add_info');
        });
    }
};
