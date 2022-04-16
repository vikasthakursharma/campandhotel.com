<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceModel extends Model
{
    use HasFactory;

    protected $table = "price_table";
    protected $primaryKey ="id";

}
