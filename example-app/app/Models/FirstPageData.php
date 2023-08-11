<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string data_field
 */
class FirstPageData extends Model
{
    use HasFactory;

    public $fillable = ['data_field'];
}
