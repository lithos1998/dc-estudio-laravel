<?php

use App\Models\Service;
use App\Models\Client;
use App\Models\Item;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Client::class)->onDelete('cascade');
            $table->foreignIdFor(Item::class);
            $table->string('status');
            $table->integer('amount')->nullable();
            $table->integer('discount')->nullable();
            $table->string('currency');
            $table->date('created_at');
            $table->date('expires_at');
            $table->string('observations')->nullable();
            $table->string('details')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('budgets');
    }
};