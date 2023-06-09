<?php

namespace App\Http\Resources\Project;

use App\Http\Resources\Language\LanguageResource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "progress" => 0,
            "languages" => array(
                "source" => new LanguageResource($this->sourceLanguage),
                "target" => LanguageResource::collection(
                    $this->targetLanguages()
                )
            ),
            "documents" => [], //TODO
            "performers" => [], //TODO
            "settings" => [
                "useMachineTranslate" => $this->use_machine_translate
            ],
            "createdAt" => Carbon::parse($this->created_at)->format('d-m-Y H:i'),
        ];
    }
}
