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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('task_name')->nullable();
            $table->string('contract_number')->nullable();
            $table->string('prefix', 100)->nullable();
            $table->date('start_date')->nullable();
            $table->date('stop_date')->nullable();
            $table->unsignedBigInteger('contract_stage_id')->default(0);
            $table->unsignedBigInteger('contract_study_id')->nullable();
            // $table->foreign('contract_status_id')->references('id')->on('contract_statuses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
};
