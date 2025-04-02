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
        Schema::table('plaques', function (Blueprint $table) {
            $table->integer('frequence_verification_status')->default(1440)->after('date_recherche'); // après date_recherche

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plaques', function (Blueprint $table) {
            $table->dropColumn('frequence_verification_status');

        });
    }
};
