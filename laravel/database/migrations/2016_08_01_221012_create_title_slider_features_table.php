<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitleSliderFeaturesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create( 'title_slider_features', function ( Blueprint $table )
    {
      $table->increments( 'id' );
      $table->integer( 'brand_id' );
      $table->longtext( 'content' );
      $table->timestamps();
    } );
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table( 'title_slider_features', function ( $table )
    {
      $table->dropColumn( 'id' );
      $table->dropColumn( 'brand_id' );
      $table->dropColumn( 'content' );
    } );
    Schema::drop( 'title_slider_features' );
  }
}
