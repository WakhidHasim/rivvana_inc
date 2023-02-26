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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('portfolio_category_id')->constrained('portfolio_categories')->onDelete('cascade');
            $table->string('name');
            $table->string('slug');
            $table->string('client');
            $table->date('project_date');
            $table->text('description');
            $table->text('thumbnail');
            $table->text('image1');
            $table->text('image2');
            $table->softDeletes();
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
        Schema::dropIfExists('portfolios');
    }
};
