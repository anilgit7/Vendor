<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','merchant_id','product_name','price','color','size','material','brand','weight','warranty','images','slug'];
    public function getRouteKeyName(){
        return 'slug';
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function merchant(){
        return $this->belongsTo(User::class,'merchant_id');
    }

    public function orderItems(){
        return $this->belongsToMany(Order_Item::class, 'order_items');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class,'product_id','id');
    }
}
