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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');  // Removed length constraint
            $table->string('last_name');   // Removed length constraint
            $table->string('email')->unique();
            $table->string('phone_number', 20);  // Increased length for phone numbers
            $table->date('date_of_birth');
            $table->string('gender', 10);  // Assuming 'male' and 'female'
            $table->string('marital_status', 20);  // 'married', 'single', 'divorced', etc.
            $table->text('address');  // Made it a text field to allow longer addresses
            $table->string('city');
            $table->string('postal_code', 10);
            $table->string('country');
            $table->string('job_title');
            $table->string('department');
            $table->string('employment_type', 20);  // 'full-time', 'part-time', etc.
            $table->date('hire_date');
            $table->decimal('salary', 10, 2);
            $table->decimal('bonus', 10, 2)->nullable();
            $table->string('work_email')->nullable();
            $table->string('work_phone', 20)->nullable();
            $table->string('office_location')->nullable();
            $table->time('shift_start_time')->nullable();
            $table->time('shift_end_time')->nullable();
            $table->integer('vacation_days')->default(0);
            $table->integer('sick_days')->default(0);
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_phone', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
