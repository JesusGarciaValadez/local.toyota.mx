+<?php

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
      $table->increments( 'id' )
            ->unsigned( );

      $table->string( 'title' );
      $table->string( 'description' );
      $table->string( 'name' );
      $table->string( 'slogan' );
      $table->string( 'title_h1' );
      $table->string( 'title_gallery_fancybox' );
      $table->string( 'description_gallery_fancybox' );
      $table->string( 'title_versions_gallery' );
      $table->string( 'title_driving_animation' );
      $table->string( 'title_footer' );
      $table->string( 'description_footer' );
      $table->string( 'slug' );
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
