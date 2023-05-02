<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Store
 *
 * @property $id
 * @property $article
 * @property $price
 * @property $image
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Store extends Model
{
    
    static $rules = [
		'article' => 'required',
		'price' => 'required',
		'image' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['article','price','image'];



}
