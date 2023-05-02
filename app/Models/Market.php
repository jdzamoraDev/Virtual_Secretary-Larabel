<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Market
 *
 * @property $id
 * @property $article
 * @property $size
 * @property $price
 * @property $created_at
 * @property $updated_at
 * @property $img
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Market extends Model
{
    
    static $rules = [
		'article' => 'required',
		'size' => 'required',
		'price' => 'required',
		'img' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['article','size','price','img'];



}
