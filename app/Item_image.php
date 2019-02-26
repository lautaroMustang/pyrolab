<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_image extends Model
{
    protected $fillable=['item_id', 'order','fotoPath'];
    
    public function item()
    {
      return $this->belongsTo('\App\Item','item_id','id');
    }
}
