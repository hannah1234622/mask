<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Region extends Model
{
    protected $connection = 'mask_region';
    protected $table = 'masks';
}
