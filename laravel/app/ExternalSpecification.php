<?php

namespace Toyota;

use Illuminate\Database\Eloquent\Model;

class ExternalSpecification extends Model
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

  public function getHeadlightAttribute ( )
  {
    return $this->description[ 'Faros' ];
  }

  public function getExteriorSecurityAttribute ( )
  {
    return $this->description[ 'SeguridadExterior' ];
  }

  public function getVisibilityAttribute ( )
  {
    return $this->description[ 'Visibilidad' ];
  }

  public function getCristalsAttribute ( )
  {
    return $this->description[ 'Visibilidad' ][ 'Cristales' ];
  }

  public function getLateralMirrorsAttribute ( )
  {
    return $this->description[ 'Visibilidad' ][ 'EspejosLaterales' ];
  }

  public function getCeilingAttribute ( )
  {
    return $this->description[ 'Techo' ];
  }

  public function getUrlInteriorAttribute ( )
  {
    return $this->description[ 'UrlInterior' ];
  }

  public function setCarIdAttribute ( $car_id )
  {
    $this->attributes[ 'car_id' ]                 = $car_id;
  }

  public function setDescriptionAttribute ( $description )
  {
    $this->attributes[ 'description' ]        = base64_encode( serialize( $description ) );
  }

  public function setHeadlightAttribute ( Array $heahlight )
  {
    $this->description[ 'Faros' ]             = $heahlight;
  }

  public function setExteriorSecurityAttribute ( Array $exteriorSecurity )
  {
    $this->description[ 'SeguridadExterior' ] = $exteriorSecurity;
  }

  public function setVisibilityAttribute ( Array $visibility )
  {
    $this->description[ 'Visibilidad' ]       = $visibility;
  }

  public function setCristalsAttribute ( Array $cristals )
  {
    $this->description[ 'Cristales' ]         = $cristals;
  }

  public function setLateralMirrorsAttribute ( Array $lateralMirrors )
  {
    $this->description[ 'EspejosLaterales' ]  = $lateralMirrors;
  }

  public function setCeilingAttribute ( Array $ceiling )
  {
    $this->description[ 'Techo' ]             = $ceiling;
  }

  public function setUrlInteriorAttribute ( String $urlInterior )
  {
    $this->description[ 'UrlInterior' ]       = $urlInterior;
  }
}
