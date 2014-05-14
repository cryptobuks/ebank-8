<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountrecordsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountrecords', function(Blueprint $table) {
            $table->increments('id');
            $table->text('description');
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
        Schema::table('accountrecords', function(Blueprint $table) {
            $table->drop();
        });
    }
}