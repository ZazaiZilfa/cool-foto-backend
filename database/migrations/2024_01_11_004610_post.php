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
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('postTitle', 255);
            $table->string('kodePost', 100)->index();
            $table->string('kodeUser', 100);
            $table->string('postCategory', 100);
            $table->string('postImage', 255);
            $table->mediumText('postUrl');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('kodeUser')->references('kodeUser')->on('users');
            $table->foreign('postCategory')->references('kodeKategori')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
