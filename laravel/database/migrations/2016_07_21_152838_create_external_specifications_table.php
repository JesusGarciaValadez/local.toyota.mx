<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExternalSpecificationsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create( 'external_specifications', function ( Blueprint $table )
    {
      $table->increments( 'id' );
      $table->integer( 'car_id' );
      $table->longtext( 'description' );
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
    Schema::table( 'external_specifications', function ( $table )
    {
      $table->dropColumn( 'id' );
      $table->dropColumn( 'car_id' );
      $table->dropColumn( 'description' );
    } );
    Schema::drop( 'external_specifications' );
  }
}
