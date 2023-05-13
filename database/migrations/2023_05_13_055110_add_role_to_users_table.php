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
            $table->string('first_name')->nullable()->after('id');
            $table->string('last_name')->nullable()->after('first_name');
            $table->string('role')->nullable()->after('password');
            $table->string('phone')->nullable()->after('role');
            $table->string('photo')->nullable()->after('phone');
            $table->string('country')->nullable()->after('photo');
            $table->string('state')->nullable()->after('country');
            $table->string('city')->nullable()->after('state');
            $table->string('zip_code')->nullable()->after('city');
            $table->string('address')->nullable()->after('zip_code');
            $table->tinyInteger('active')->nullable()->default(1)->after('zip_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
