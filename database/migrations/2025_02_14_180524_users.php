<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('password');
            $table->string('cuit')->nullable();
            $table->integer('ptovta')->nullable();
            $table->string('privileges');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
