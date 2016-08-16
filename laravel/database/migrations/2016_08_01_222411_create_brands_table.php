<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create( 'brands', function ( Blueprint $table )
    {
      $table->increments( 'id' );
      $table->string( 'brand' );
      $table->string( 'slogan' );
      $table->string( 'title_h1' );
      $table->string( 'title_gallery_fancybox' );
      $table->string( 'description_gallery_fancybox' );
      $table->string( 'title_versions_gallery' );
      $table->integer( 'car_description_gallery_one_id' )
            ->unsigned();
      $table->foreign( 'car_description_gallery_one_id' )
            ->references( 'id' )
            ->on( 'car_description_gallery_ones' )
            ->onUpdate( 'cascade' );
      $table->integer( 'car_description_gallery_two_id' )
            ->unsigned();
      $table->foreign( 'car_description_gallery_two_id' )
            ->references( 'id' )
            ->on( 'car_description_gallery_twos' )
            ->onUpdate( 'cascade' );
      $table->string( 'title_driving_animation' );
      $table->string( 'title_footer' );
      $table->string( 'description_footer' );
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
    Schema::drop( 'brands' );
  }
}
