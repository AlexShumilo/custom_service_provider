<?php

namespace App\Http\Vendor\Classes;

use App\Http\Vendor\Interfaces\SaveDataInterface;
use Illuminate\Database\Eloquent\Model;

class SaveInDatabaseClass implements SaveDataInterface
{
    /**
     * Save data in database
     *
     * @param array $attributes
     * @param Model $model
     * @return void
     */
    public function save(array $attributes, Model $model = null) {

        $model->create($attributes);
    }
}
