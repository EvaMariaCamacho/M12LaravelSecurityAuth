<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Team
 *
 * @property $id
 * @property $stadium
 * @property $fundation_year
 * @property $city
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Team extends Model
{
    
    static $rules = [
		'stadium' => 'required',
		'fundation_year' => 'required',
		'city' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['stadium','fundation_year','city'];

  public function result()
  {
    return $this->belongsTo(Result::class);
  }




}
