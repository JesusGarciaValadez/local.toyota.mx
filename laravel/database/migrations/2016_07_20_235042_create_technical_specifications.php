<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicalSpecifications extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create( 'technical_specifications', function ( Blueprint $table )
    {
      $table->increments( 'id' );
      $table->integer( 'technical_specifications_categories_id' )
            ->unsigned();
      $table->foreign( 'technical_specifications_categories_id' )
            ->references( 'id' )
            ->on( 'technical_specifications_categories' );
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
    Schema::drop( 'technical_specifications' );
  }
}
