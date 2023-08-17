<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable =[
        'logo','ficon','title_site','address','twitter',
        'instagram','facebook','linkedin','youtube','email','phone','map','whats_up'
    ];

}
