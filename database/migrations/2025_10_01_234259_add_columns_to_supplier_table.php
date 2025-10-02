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
        Schema::table('suppliers', function (Blueprint $table) {
            $table->string('cnpj');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->integer('number_address');
            $table->string('neighborhood');
            $table->string('city');
            $table->string('uf');
            $table->string('cep');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('suppliers', function (Blueprint $table) {
            $table->dropColumn('cnpj');
            $table->dropColumn('email');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('number_address');
            $table->dropColumn('neighborhood');
            $table->dropColumn('city');
            $table->dropColumn('uf');
            $table->dropColumn('cep');
        });
    }
};
