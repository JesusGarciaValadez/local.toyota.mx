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
      $table->integer( 'gallery_fancybox_id' )
            ->unsigned();
      $table->foreign( 'gallery_fancybox_id' )
            ->references( 'id' )
            ->on( 'gallery_fancybox' )
            ->onDelete( 'cascade' );
      $table->string( 'descriptionGalleryFancybox' );
      $table->string( 'titleVersionsGallery' );
      $table->integer( 'cars_descriptions_gallery_one_id' )
            ->unsigned();
      $table->foreign( 'cars_descriptions_gallery_one_id' )
            ->references( 'id' )
            ->on( 'cars_descriptions_gallery_one' )
            ->onDelete( 'cascade' );
      $table->integer( 'cars_descriptions_gallery_two_id' )
            ->unsigned();
      $table->foreign( 'cars_descriptions_gallery_two_id' )
            ->references( 'id' )
            ->on( 'cars_descriptions_gallery_two' )
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
