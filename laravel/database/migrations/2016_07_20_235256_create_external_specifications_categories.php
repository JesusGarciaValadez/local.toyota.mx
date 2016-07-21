<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExternalSpecificationsCategories extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create( 'external_specifications_categories', function ( Blueprint $table )
    {
      $table->increments( 'id' );
      $table->string( 'name' );
      $table->timestamp();
    } );
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop( 'external_specifications_categories' );
  }
}
