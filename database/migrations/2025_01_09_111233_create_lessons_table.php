<?php

use App\Models\Course;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Course::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

//            $table->unsignedBigInteger('course_id');
//            $table->foreign('course_id')->references('id')->on('courses');

            $table->unsignedSmallInteger('number');
            $table->string('title');
            $table->string('video_url');
            $table->string('commit_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
