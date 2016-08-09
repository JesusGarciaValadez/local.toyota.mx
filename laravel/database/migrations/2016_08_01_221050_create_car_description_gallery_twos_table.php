<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarDescriptionGalleryTwosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create( 'car_description_gallery_twos', function ( Blueprint $table )
    {
      $table->increments( 'id' );
      $table->integer( 'brands_id' );
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
    Schema::drop( 'car_description_gallery_twos' );
  }
}