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
        Schema::create('historiques', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->foreignId('plaque_id')->constrained('plaques')->onDelete('cascade'); 
            $table->enum('status', ['en_fourrière', 'libre', 'en_cours'])->default('en_cours');
            $table->string('adresse');
            $table->string('telephone'); 
            $table->boolean('archived')->default(false);
            $table->date('date_recherche')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historiques');
    }
};
