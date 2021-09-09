<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UserResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {  

        return [
            'id' => $this->id,
            'name' => $this->first_name . ' ' . $this->last_name . ' ' . $this->patronymic,
            'gender' =>  $this->gender,
            'salary' => $this->salary,
        ];
    }
}
