<?php

namespace App\Http\Vendor\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface SaveDataInterface
{
    public function save(array $attributes, Model $model = null);
}
