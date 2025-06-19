<?php

use App\Models\Budget;
use App\Models\Client;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Budget::class);
            $table->foreignIdFor(User::class);
            $table->integer('number');
            $table->string('type');
            $table->string('status');
            $table->date('created_at');
            $table->date('expires_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};