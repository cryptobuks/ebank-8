]<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('enterprise_id');
            $table->string('title');
            $table->longtext('description');
            $table->boolean('approved');
            $table->enum('status', array('raising_money', 'in_progress', 'completed'));
            $table->decimal('current_fund', 16, 2)->default('0');
            $table->decimal('expect_fund', 16, 2)->default('0');
            $table->timestamps();
            $table->date('expect_date');
            $table->engine = 'MyISAM';
        });
        DB::statement('ALTER TABLE projects ADD FULLTEXT search(title, description)');
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function(Blueprint $table) {
            $table->dropIndex('search');
            $table->drop();
        });
    }
}