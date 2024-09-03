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
            $table->string('user_name')->nullable();
            $table->string('profile_created_by')->nullable();
            $table->string('gender')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('religion')->nullable();
            $table->string('caste')->nullable();
            $table->string('sub_caste')->nullable();
            $table->string('mother_tongue')->nullable();
            $table->string('occupation')->nullable();
            $table->string('monthly_income')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('confirm_password')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('user_name');
            $table->dropColumn('profile_created_by');
            $table->dropColumn('gender');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('marital_status');
            $table->dropColumn('religion');
            $table->dropColumn('caste');
            $table->dropColumn('sub_caste');
            $table->dropColumn('mother_tongue');
            $table->dropColumn('occupation');
            $table->dropColumn('monthly_income');
            $table->dropColumn('mobile_number');
            $table->dropColumn('whatsapp_number');
            $table->dropColumn('confirm_password');
         
        });
    }
};
