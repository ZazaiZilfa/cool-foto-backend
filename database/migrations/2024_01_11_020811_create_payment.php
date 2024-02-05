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
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->string('invoice');
            $table->string('kodeImage');
            $table->string('buyer')->default(null);
            $table->string('seller')->default(null);
            $table->integer('price')->default(null);
            $table->integer('status')->default(null);
            $table->timestamps();

            $table->foreign('buyer')->references('kodeUser')->on('users');
            $table->foreign('seller')->references('kodeUser')->on('users');
            $table->foreign('kodeImage')->references('kodePost')->on('post');
            // $table->foreign('postCategory')->references('kodeKategori')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
