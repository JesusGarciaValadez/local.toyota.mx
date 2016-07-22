<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicalSpecificationsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create( 'technical_specifications', function ( Blueprint $table )
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
    Schema::table( 'technical_specifications', function ( $table )
    {
      $table->dropColumn( 'id' );
      $table->dropColumn( 'car_id' );
      $table->dropColumn( 'description' );
    } );
    Schema::drop( 'technical_specifications' );
  }
}
