<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'Books';
    protected $fillable = ['title','writer','summary','price','photo', 'id_jenis'];

    public function isbn()
    {
        return  $this->hasOne('App\Models\Isbn','id_isbn');
    } 

    public function jenis()
    {
        return $this->belongsTo('App\Models\Jenis', 'id_jenis');
    }

    public function identity()
    {
        return $this->belongsToMany('App\Models\Identity', 'identity_book','id_book', 'id_identity')->withTimeStamps();
    }

    public function getIdentityBookAttribute()
    {
        return $this->identity->pluck(‘id’)->toArray();
    }
}
