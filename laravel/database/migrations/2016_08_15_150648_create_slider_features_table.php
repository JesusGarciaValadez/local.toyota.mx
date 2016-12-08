<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderFeaturesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create( 'slider_features', function ( Blueprint $table )
    {
      $table->increments( 'id' );
      $table->integer( 'brands_id' )
            ->unsigned();
      $table->foreign( 'brands_id' )
            ->references( 'id' )
            ->on( 'brands' )
            ->onDelete( 'cascade' )
            ->onUpdate( 'cascade' );
      $table->string( 'title' );
      $table->string( 'title_list' );
      $table->longtext( 'content' );
      $table->timestamps( );
    } );
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop( 'slider_features' );
  }
}
