<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isbn extends Model
{
    use HasFactory;
    protected $table='isbn';
    protected $primaryKey = 'id_isbn';
    protected $fillable = ['id_isbn','no_isbn'];
    public function books()
    {
        return  $this->belongsTo('App\Models\Book','id_isbn');
    }

    // public function isbn()
    // {
    // return  $this->hasOne('App\Models\Isbn','id_isbn');
    // }

}
