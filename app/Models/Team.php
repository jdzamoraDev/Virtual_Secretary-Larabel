<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Team
 *
 * @property $id
 * @property $teamA
 * @property $stadium
 * @property $time
 * @property $price1
 * @property $price2
 * @property $price3
 * @property $created_at
 * @property $updated_at
 * @property $teamB
 * @property $imgA
 * @property $imgB
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Team extends Model
{
    
    static $rules = [
		'teamA' => 'required',
		'stadium' => 'required',
		'time' => 'required',
		'price1' => 'required',
		'price2' => 'required',
		'price3' => 'required',
		'teamB' => 'required',
		'imgA' => 'required',
		'imgB' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['teamA','stadium','time','price1','price2','price3','teamB','imgA','imgB'];



}
