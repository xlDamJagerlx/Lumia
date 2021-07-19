<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $product_id
 * @property $product_code
 * @property $product_name
 * @property $product_description
 * @property $product_price
 * @property $product_stock
 * @property $product_idcategory
 * @property $product_idsubcategory
 * @property $product_picture
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'product_id' => 'required',
		'product_code' => 'required',
		'product_name' => 'required',
		'product_description' => 'required',
		'product_price' => 'required',
		'product_stock' => 'required',
		'product_idcategory' => 'required',
		'product_idsubcategory' => 'required',
		'product_picture' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id','product_code','product_name','product_description','product_price','product_stock','product_idcategory','product_idsubcategory','product_picture'];



}
