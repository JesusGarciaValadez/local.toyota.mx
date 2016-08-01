<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternalSpecificationsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create( 'internal_specifications', function ( Blueprint $table )
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
    Schema::table( 'internal_specifications', function ( $table )
    {
      $table->dropColumn( 'id' );
      $table->dropColumn( 'car_id' );
      $table->dropColumn( 'description' );
    } );
    Schema::drop( 'internal_specifications' );
  }
}
