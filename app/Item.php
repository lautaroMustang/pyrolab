<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['code','name'];

    public function item_images()
    {
      return $this->hasMany('\App\Item_image','item_id','id');
    }
}
