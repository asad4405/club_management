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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('phone_number')->unique();
            $table->string('email')->unique();
            $table->date('date_of_birth');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('id_no');
            $table->string('nationality');
            $table->string('religion');
            $table->string('profession');
            $table->string('blood_group');
            $table->string('education');
            $table->string('donation_amount_numbers');
            $table->string('donation_amount_words');
            // $table->string('member_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
