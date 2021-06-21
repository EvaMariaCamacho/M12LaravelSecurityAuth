<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Team;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Result
 *
 * @property $id
 * @property $local_gol
 * @property $visitor_gol
 * @property $date
 * @property $teams_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Result extends Model
{
  use HasFactory;
  
    static $rules = [
		'local_gol' => 'required',
		'visitor_gol' => 'required',
		'date' => 'required',
		'teams_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['local_gol','visitor_gol','date','teams_id'];

  public function team()
  {
    return $this->belongsTo(Team::class);
  }

}
