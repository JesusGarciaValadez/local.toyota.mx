<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExternalSpecifications extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create( 'external_specifications', function ( Blueprint $table )
    {
      $table->increments( 'id' );
      $table->integer( 'external_specifications_categories_id' )
            ->unsigned();
      $table->foreign( 'external_specifications_categories_id' )
            ->references( 'id' )
            ->on( 'external_specifications_categories' );
      $table->string( 'description' );
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
    Schema::drop( 'external_specifications' );
  }
}
