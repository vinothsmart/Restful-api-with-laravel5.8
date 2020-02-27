<?php

namespace App;

use App\Transaction;
use App\Transformers\BuyerTransformer;

class Buyer extends User
{
    public $transformer = BuyerTransformer::class;

    protected static function boot()
    {
        parent::boot();
    }

    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }
}
