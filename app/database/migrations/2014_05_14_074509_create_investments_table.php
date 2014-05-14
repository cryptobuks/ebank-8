<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvestmentsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('investor_id');
            $table->unsignedInteger('project_id');
            $table->text('description');
            $table->boolean('paid_off');
            $table->decimal('amount', 16, 2)->default('0');
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
        Schema::table('investments', function(Blueprint $table) {
            $table->drop();
        });
    }
}