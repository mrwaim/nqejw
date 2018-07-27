<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('project_id');
$table->string('user_id');
$table->string('scope');
$table->string('key');
$table->string('value');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entries');
    }
}