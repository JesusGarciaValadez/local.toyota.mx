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
      $table->string( 'title_h1' );
      $table->integer( 'slider_features_id' )
            ->unsigned();
      $table->foreign( 'slider_features_id' )
            ->references( 'id' )
            ->on( 'slider_features' )
            ->onDelete( 'cascade' );
      $table->integer( 'title_slider_features_id' )
            ->unsigned();
      $table->foreign( 'title_slider_features_id' )
            ->references( 'id' )
            ->on( 'title_slider_features' )
            ->onDelete( 'cascade' );
      $table->string( 'title_gallery_fancybox' );
      $table->integer( 'gallery_fancyboxes_id' )
            ->unsigned();
      $table->foreign( 'gallery_fancyboxes_id' )
            ->references( 'id' )
            ->on( 'gallery_fancyboxes' )
            ->onDelete( 'cascade' );
      $table->string( 'description_gallery_fancybox' );
      $table->string( 'title_versions_gallery' );
      $table->integer( 'car_description_gallery_one_id' )
            ->unsigned();
      $table->foreign( 'car_description_gallery_one_id' )
            ->references( 'id' )
            ->on( 'car_description_gallery_ones' )
            ->onDelete( 'cascade' );
      $table->integer( 'car_description_gallery_two_id' )
            ->unsigned();
      $table->foreign( 'car_description_gallery_two_id' )
            ->references( 'id' )
            ->on( 'car_description_gallery_twos' )
            ->onDelete( 'cascade' );
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