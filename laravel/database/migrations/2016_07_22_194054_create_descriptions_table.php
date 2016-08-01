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
        $table->longtext( 'sliderFeatures' );
        $table->longtext( 'titleSliderFeatures' );
        $table->string( 'titleGalleryFancybox' );
        $table->longtext( 'galleryFancybox' );
        $table->string( 'descriptionGalleryFancybox' );
        $table->string( 'titleVersionsGallery' );
        $table->longtext( 'carsDescriptionsGalleryOne' );
        $table->longtext( 'carsDescriptionsGalleryTwo' );
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