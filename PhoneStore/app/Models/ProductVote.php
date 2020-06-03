<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVote extends Model
{
  protected $fillable = [
      'content', 'rate', 'user_id', 'product_id'
  ];
  public function product() {
    return $this->belongsTo('App\Models\Product');
  }
  public function user() {
    return $this->belongsTo('App\User');
  }
}
