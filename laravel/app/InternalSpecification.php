<?php

namespace Highlander;

use Illuminate\Database\Eloquent\Model;

class InternalSpecification extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [ 'description' ];

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

  public function getDescriptionAttribute ( $value )
  {
    return unserialize( base64_decode( $value ) );
  }

  public function getInteriorFinishesAttribute ( )
  {
    return $this->description[ 'AcabadosInteriores' ];
  }

  public function getSeatingAttribute ( )
  {
    return $this->description[ 'Asientos' ];
  }

  public function getAudioSystemAttribute ( )
  {
    return $this->description[ 'SistemaAudio' ];
  }

  public function getComfortAttribute ( )
  {
    return $this->description[ 'Confort' ];
  }

  public function getSeatbeltsAttribute ( )
  {
    return $this->description[ 'CinturonesSeguridad' ];
  }

  public function getInternalSecurityAttribute ( )
  {
    return $this->description[ 'SeguridadInterior' ];
  }

  public function getDownloadAttribute ( )
  {
    return $this->description[ 'Download' ];
  }

  public function setDescriptionAttribute ( Array $description )
  {
    $this->attributes[ 'description' ]          = base64_encode( serialize( $description ) );
  }

  public function setInteriorFinishesAttribute ( Array $interiorFinishes )
  {
    $this->description[ 'AcabadosInteriores' ]  = $interiorFinishes;
  }

  public function setSeatingAttribute ( Array $seating )
  {
    $this->description[ 'Asientos' ]            = $seating;
  }

  public function setAudioSystemAttribute ( Array $audioSystem )
  {
    $this->description[ 'SistemaAudio' ]        = $audioSystem;
  }

  public function setComfortAttribute ( Array $comfort )
  {
    $this->description[ 'Confort' ]             = $comfort;
  }

  public function setSeatbeltsAttribute ( Array $seatbelts )
  {
    $this->description[ 'CinturonesSeguridad' ] = $seatbelts;
  }

  public function setInternalSecurityAttribute ( Array $internalSecurity )
  {
    $this->description[ 'SeguridadInterior' ]   = $internalSecurity;
  }

  public function setDownloadAttribute ( String $download )
  {
    $this->description[ 'Download' ]            = $download;
  }
}
