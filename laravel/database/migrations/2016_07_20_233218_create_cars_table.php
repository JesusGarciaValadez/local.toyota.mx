<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create( 'cars', function ( Blueprint $table )
    {
      $table->increments( 'id' );
      $table->string( 'model' )->unique();
      $table->integer( 'technical_specifications_id' )
            ->unsigned();
      $table->foreign( 'technical_specifications_id' )
            ->references( 'id' )
            ->on( 'technical_specifications' );
      $table->integer( 'external_specifications_id' )
            ->unsigned();
      $table->foreign( 'external_specifications_id' )
            ->references( 'id' )
            ->on( 'external_specifications' );
      $table->integer( 'internal_specifications_id' )
            ->unsigned();
      $table->foreign( 'internal_specifications_id' )
            ->references( 'id' )
            ->on( 'internal_specifications' );
      $table->timestamp();
    } );
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('password_resets');
  }
}
