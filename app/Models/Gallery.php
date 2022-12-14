<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'gallery';
    protected $primaryKey = 'name';
    protected $keyType = 'string';
    public $incrementing = false;
}
