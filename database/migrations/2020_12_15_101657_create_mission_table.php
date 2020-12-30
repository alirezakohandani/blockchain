<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mission', function (Blueprint $table) {
            $table->id();
            $table->string('code')->index();
            $table->string('title')->index();
            $table->string('operator')->index();
            $table->mediumText('propose')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_ratified')->default(false);
            $table->timestamp('planned_at')->nullable()->index();
            $table->timestamp('started_at')->nullable()->index();
            $table->timestamp('succeeded_at')->nullable()->index();
            $table->timestamp('failed_at')->nullable()->index();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mission');
    }
}
