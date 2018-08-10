<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();

            $table->string('email');

            $table->integer('specialization_id')->unsigned();
            $table->integer('degree_id')->unsigned();

            $table->text('description');

            $table->timestamp('reception_at')->useCurrent();
            $table->boolean('is_paid')->default(false);

            $table->timestamps();

            $table->foreign('specialization_id')->references('id')->on('specializations');
            $table->foreign('degree_id')->references('id')->on('degrees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
