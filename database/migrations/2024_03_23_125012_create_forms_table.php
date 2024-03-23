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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->date('dob');
            $table->string('gender');
            $table->string('address');
            $table->string('number');
            $table->string('email');
            $table->string('pname');
            $table->string('pnumber');
            $table->string('qualification');
            $table->string('currentedu');
            $table->string('major');
            $table->string('result');
            $table->text('description');
            $table->string('document_citizenship')->nullable();
            $table->string('document_sop')->nullable();
            $table->string('document_transcript')->nullable();
            $table->string('document')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};