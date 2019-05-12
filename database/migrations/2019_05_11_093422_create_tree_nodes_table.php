<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreeNodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tree_nodes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('is_root')->default(false);
            $table->unsignedBigInteger('left_child_id')->nullable()->default(null)->unique();
            $table->unsignedBigInteger('right_child_id')->nullable()->default(null)->unique();
            $table->integer('credits_left');
            $table->integer('credits_right');
            $table->integer('username');
            $table->timestamps();

            $table->foreign('left_child_id')
                ->references('id')->on('tree_nodes')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreign('right_child_id')
                ->references('id')->on('tree_nodes')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tree_nodes');
    }
}
