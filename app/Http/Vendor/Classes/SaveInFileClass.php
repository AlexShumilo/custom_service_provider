<?php

namespace App\Http\Vendor\Classes;

use App\Http\Vendor\Interfaces\SaveDataInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SaveInFileClass implements SaveDataInterface
{
    /**
     * Save data in file
     *
     * @param array $attributes
     * @return void
     */
    public function save(array $attributes, Model $model = null)
    {
        Storage::append('file.txt', json_encode($attributes));
    }

}
