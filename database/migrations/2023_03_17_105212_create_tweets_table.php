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
        Schema::create('tweets', function (Blueprint $table) {
            $table->id(); // Auto Increment の id カラムを作ってくれる
            $table->string('message'); // 追記部分 VARCHAR(255) が作成される
            $table->foreignId('user_id')->constrained(); // 外部キー制約をつける
            $table->timestamps(); // created_at と updated_at カラムを作ってくれる
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tweets');
    }
};
