<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('budget_tax', function (Blueprint $table) {
            $table->id();
            $table->foreignId('budget_id')->onDelete('cascade');
            $table->foreignId('tax_id')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('budget_tax');
    }
};
