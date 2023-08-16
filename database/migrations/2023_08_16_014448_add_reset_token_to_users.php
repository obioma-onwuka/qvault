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
        Schema::table('users', function (Blueprint $table) {
            
            $table->string('reset_token')->after('updated_at')->nullable();
            $table->timestamp('reset_lifespan')->after('reset_token')->nullable();
            $table->string('reset_complete')->after('reset_lifespan')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->dropColumn('reset_token');
            $table->dropColumn('reset_lifespan');
            $table->dropColumn('reset_complete');

        });
    }
};
