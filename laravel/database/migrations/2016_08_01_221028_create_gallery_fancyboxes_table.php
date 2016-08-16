<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryFancyboxesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create( 'gallery_fancyboxes', function ( Blueprint $table )
    {
      $table->increments( 'id' );
      $table->integer( 'brands_id' );
      $table->string( 'title' );
      $table->string( 'thumb_big' );
      $table->string( 'thumb_small_1' );
      $table->string( 'thumb_small_2' );
      $table->string( 'thumb_small_3' );
      $table->string( 'image_big' );
      $table->string( 'image_small_1' );
      $table->string( 'image_small_2' );
      $table->string( 'image_small_3' );
      $table->string( 'title_big' );
      $table->string( 'title_small_1' );
      $table->string( 'title_small_2' );
      $table->string( 'title_small_3' );
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
    Schema::drop( 'gallery_fancyboxes' );
  }
}
