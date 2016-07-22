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
        $table->string( 'title_h1' );
        $table->longtext( 'slider_features' );
        $table->longtext( 'title_slider_features' );
        $table->string( 'title_gallery_fancybox' );
        $table->longtext( 'gallery_fancybox' );
        $table->string( 'description_gallery_fancybox' );
        $table->string( 'title_versions_gallery' );
        $table->longtext( 'cars_descriptions_gallery' );
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
      Schema::drop( 'descriptions' );
    }
}
