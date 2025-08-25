<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('loan_applications', function (Blueprint $table) {
        $table->id();
        $table->string('email');
        $table->string('phone');
        $table->enum('civil_status', ['single', 'married', 'divorced', 'widowed']);
        $table->boolean('has_children')->default(false);
        $table->boolean('has_coapplicant')->default(false);
        $table->enum('residence_type', ['rent', 'own']);
        $table->decimal('monthly_housing_cost', 10, 2)->nullable();
        $table->enum('employment_type', ['employed', 'self_employed']);
        $table->decimal('monthly_income', 10, 2);
        $table->year('hired_since_year')->nullable();
        $table->string('hired_since_month')->nullable();
        $table->string('company_name')->nullable();
        $table->enum('loan_type', ['mortgage', 'vehicle', 'personal'])->nullable();
        $table->decimal('loan_amount', 15, 2)->nullable();
        $table->integer('loan_term')->nullable(); // in years
        $table->enum('currency', ['ETB', 'USD', 'EUR'])->nullable();
        $table->string('status')->default('pending');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_applications');
    }
};
