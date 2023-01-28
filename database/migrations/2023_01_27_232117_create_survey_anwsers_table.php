<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_anwsers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Survey::class, 'survey_id');
            $table->timestamp('start-date')->nullable();
            $table->timestamp('end-date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_anwsers');
    }
};
