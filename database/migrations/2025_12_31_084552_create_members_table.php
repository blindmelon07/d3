<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('id_number')->unique();
            $table->string('full_name');
            $table->string('position')->nullable();
            $table->enum('status', ['Active', 'Inactive', 'Alumni', 'Suspended'])->default('Active');
            $table->enum('member_status', ['Old', 'New'])->default('New');
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
