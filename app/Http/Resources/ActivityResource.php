<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ActivityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id_act" => $this->id_act,
            "nik" => $this->nik,
            "fullname" => $this->fullname,
            "subdivisi" => $this->subdivisi,
            "location" => $this->location
            // "target" => $this->target,
            // "date_visit" => $this->date_visit,
            // "stk_numbers" => $this->stk_numbers,
            // "data_gambar" => $this->data_gambar,
        ];
    }
}
