<?php
namespace App;

use App\Seller;
use App\Product;
use App\Category;
use App\Transaction;
use Illuminate\Database\Eloquent\Model;
use App\Transformers\ProductTransformer;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    const AVAILABLE_PRODUCT = 'available';
    const UNAVAILABLE_PRODUCT = 'unavailable';

    public $transformer = ProductTransformer::class;
    protected $dates = ['deleted_at'];

    protected $fillable = ['name', 'description', 'quantity', 'status', 'image', 'seller_id', ];

    protected $hidden = ['pivot'];

    public function isAvailable()
    {
        return $this->status == Product::AVAILABLE_PRODUCT;
    }

    public function seller()
    {
        return $this->belongsTo('App\Seller');
    }

    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

}

