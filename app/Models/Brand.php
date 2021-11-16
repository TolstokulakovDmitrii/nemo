<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Multipic;
use Illuminate\Support\Carbon;
use Image;
use Auth;

class Brand extends Model
{
    use HasFactory;
    protected $hidden = [
        'user_id',
        'category_name',
        'category_image',
    ];
}
