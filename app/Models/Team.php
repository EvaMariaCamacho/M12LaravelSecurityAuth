<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Result;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

  use HasFactory;

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
    protected $fillable = ['stadium','fundation_year','city', 'results_id'];

  public function result()
  {
    return $this->hasMany(Result::class);
  }

  
}
