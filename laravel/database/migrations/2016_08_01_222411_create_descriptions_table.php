<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescriptionsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create( 'descriptions', function ( Blueprint $table )
    {
      $table->increments( 'id' );
      $table->string( 'brand' );
      $table->string( 'titleH1' );
      $table->integer( 'sliderFeatures_id' )
            ->unsigned();
      $table->foreign( 'sliderFeatures_id' )
            ->references( 'id' )
            ->on( 'sliderFeatures' )
            ->onDelete( 'cascade' );
      $table->integer( 'titleSliderFeatures_id' )
            ->unsigned();
      $table->foreign( 'titleSliderFeatures_id' )
            ->references( 'id' )
            ->on( 'titleSliderFeatures' )
            ->onDelete( 'cascade' );
      $table->string( 'titleGalleryFancybox' );
      $table->integer( 'galleryFancybox_id' )
            ->unsigned();
      $table->foreign( 'galleryFancybox_id' )
            ->references( 'id' )
            ->on( 'galleryFancybox' )
            ->onDelete( 'cascade' );
      $table->string( 'descriptionGalleryFancybox' );
      $table->string( 'titleVersionsGallery' );
      $table->integer( 'carsDescriptionsGalleryOne_id' )
            ->unsigned();
      $table->foreign( 'carsDescriptionsGalleryOne_id' )
            ->references( 'id' )
            ->on( 'carsDescriptionsGalleryOne' )
            ->onDelete( 'cascade' );
      $table->integer( 'carsDescriptionsGalleryTwo_id' )
            ->unsigned();
      $table->foreign( 'carsDescriptionsGalleryTwo_id' )
            ->references( 'id' )
            ->on( 'carsDescriptionsGalleryTwo' )
            ->onDelete( 'cascade' );
      $table->string( 'titleDrivingAnimation' );
      $table->string( 'titleFooter' );
      $table->string( 'descriptionFooter' );
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
    Schema::drop( 'descriptions' );
  }
}
