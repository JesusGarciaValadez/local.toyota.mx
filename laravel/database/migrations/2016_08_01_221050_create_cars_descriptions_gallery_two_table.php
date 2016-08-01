<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsDescriptionsGalleryTwoTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create( 'cars_descriptions_gallery_two', function ( Blueprint $table )
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
    Schema::table( 'cars_descriptions_gallery_two', function ( $table )
    {
      $table->dropColumn( 'id' );
      $table->dropColumn( 'brand_id' );
      $table->dropColumn( 'content' );
    } );
    Schema::drop( 'cars_descriptions_gallery_two' );
  }
}
