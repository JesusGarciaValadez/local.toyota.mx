<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternalSpecifications extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create( 'internal_specifications', function ( Blueprint $table )
    {
      $table->increments( 'id' );
      $table->integer( 'internal_specifications_categories_id' )
            ->unsigned();
      $table->foreign( 'internal_specifications_categories_id' )
            ->references( 'id' )
            ->on( 'internal_specifications_categories' );
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
    Schema::drop( 'internal_specifications' );
  }
}
