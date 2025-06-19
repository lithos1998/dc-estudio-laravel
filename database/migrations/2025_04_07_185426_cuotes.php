<?php

use App\Models\Sale;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cuotes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Sale::class);
            $table->integer('number');
            $table->integer('amount');
            $table->string('status')->nullable();
            $table->string('expires_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cuotes');
    }
};
