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
        Schema::table('condolences', function (Blueprint $table) {
            $table->string('affiliation')->nullable()->after('name');
            $table->string('photo_path')->nullable()->after('message');
        });
    }

    public function down(): void
    {
        Schema::table('condolences', function (Blueprint $table) {
            $table->dropColumn(['affiliation', 'photo_path']);
        });
    }
};
