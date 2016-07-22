<?php

namespace Highlander;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'model',
    'technical_specifications_id',
    'external_specifications_id',
    'internal_specifications_id'
  ];

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

  /**
   * The technical attributes relation
   * @return TechnicalSpecifications tecnicalSpecifications
   */
  public function technicalSpecifications ()
  {
    return $this->hasOne( TechnicalSpecification::class );
  }

  /**
   * The external attributes relation
   * @return ExternalSpecifications externalSpecifications
   */
  public function externalSpecifications ()
  {
    return $this->hasOne( ExternalSpecification::class );
  }

  /**
   * The internal attributes relation
   * @return InternalSpecifications internalSpecifications
   */
  public function internalSpecifications ()
  {
    return $this->hasOne( InternalSpecification::class );
  }
}
