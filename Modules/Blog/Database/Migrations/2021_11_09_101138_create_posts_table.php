<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('posts', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->longText('body');
      $table->string('image')->nullable();
      $table->string('slug')->unique()->nullable();
      $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT');
      $table->text('summary')->nullable();
      $table->boolean('featured')->default(0);
      $table->unsignedInteger('visits')->default(0);
      $table->foreignId('user_id')->nullable()->index()->onDelete('CASCADE');
      $table->bigInteger('proposed_by')->unsigned()->nullable()->onDelete('set null');
      $table->foreignId('category_id')->nullable()->index();
      $table->timestamp('published_at')->nullable();
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
    Schema::dropIfExists('posts');
  }
}
