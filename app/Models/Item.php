<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Table Name
    protected $table ='items';

    // Primary key
    public $primaryKey ='id';

    //Timestamps
    public $timestamps =true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
