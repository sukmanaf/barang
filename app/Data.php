<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table='barang';
    protected $fillable=['nama','harga'];
}
