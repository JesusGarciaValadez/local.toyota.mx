<?php

namespace Toyota;

use Illuminate\Database\Eloquent\Model;

class TechnicalSpecification extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [ 'car_id', 'description' ];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $guarded  = [ 'id', 'created_at', 'updated_at' ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden   = [ '' ];

  public function getCarIdAttribute ( )
  {
    return $this->car_id;
  }

  public function getDescriptionAttribute ( $value )
  {
    return unserialize( base64_decode( $value ) );
  }

  public function getMotorAttribute ( )
  {
    return $this->description[ 'Motor' ];
  }

  public function getMotorCapacityAttribute ( )
  {
    return $this->description[ 'Motor' ][ 'Capacidad' ];
  }

  public function getMotorPotencyAttribute ( )
  {
    return $this->description[ 'Motor' ][ 'Potencia' ];
  }

  public function getMotorCylindersAttribute ( )
  {
    return $this->description[ 'Motor' ][ 'Cilindros' ];
  }

  public function getMotorValvesAttribute ( )
  {
    return $this->description[ 'Motor' ][ 'Valvulas' ];
  }

  public function getBrakesAttribute ( )
  {
    return $this->description[ 'Frenos' ];
  }

  public function getRinAttribute ( )
  {
    return $this->description[ 'Rines' ];
  }

  public function getURLMotorAttribute ( )
  {
    return $this->description[ 'UrlMotor' ];
  }

  public function getURLAutoAttribute ( )
  {
    return $this->description[ 'UrlAuto' ];
  }

  public function setCarIdAttribute ( $car_id )
  {
    $this->attributes[ 'car_id' ]                 = $car_id;
  }

  public function setDescriptionAttribute ( $description )
  {
    $this->attributes[ 'description' ]            = base64_encode( serialize( $description ) );
  }

  public function setMotorAttribute ( $motor )
  {
    $this->description[ 'Motor' ]                 = $motor;
  }

  public function setMotorCapacityAttribute ( $capacity )
  {
    $this->description[ 'Motor' ][ 'Capacidad' ]  = $capacity;
  }

  public function setMotorPotencyAttribute ( String $potency )
  {
    $this->description[ 'Motor' ][ 'Potencia' ]   = $potency;
  }

  public function setMotorCylindersAttribute ( String $cylinders )
  {
    $this->description[ 'Motor' ][ 'Cilindros' ]  = $cylinders;
  }

  public function setMotorValvesAttribute ( String $valves )
  {
    $this->description[ 'Motor' ][ 'Valvulas' ]   = $valves;
  }

  public function setBrakesAttribute ( Array $brakes )
  {
    $this->description[ 'Frenos' ]                = $brakes;
  }

  public function setRinAttribute ( Array $rin )
  {
    $this->description[ 'Rines' ]                 = $rin;
  }

  public function setURLMotorAttribute ( String $urlMotor )
  {
    $this->description[ 'UrlMotor' ]              = $urlMotor;
  }

  public function setURLAutoAttribute ( String $urlAuto )
  {
    $this->description[ 'UrlAuto' ]               = $urlAuto;
  }
}
