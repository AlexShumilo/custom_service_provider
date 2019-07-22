<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\Messages\SendMessageRequest;
use Illuminate\Http\Request;
use App\Http\Vendor\Interfaces\SaveDataInterface;
use App\Models\Message;

class MessagesController extends BaseApiController
{
    /**
     * Save message in database or file
     *
     * @param Request $request
     * @param Message $model
     * @param SaveDataInterface $saveData
     * @return void
     */
    public function saveMessage(SendMessageRequest $request, Message $model, SaveDataInterface $saveData)
    {
        $saveData->save($request->only('message'), $model);

        return $this->successResponse();
    }
}
