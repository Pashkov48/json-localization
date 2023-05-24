<?php

namespace App\Facades;

use App\Services\Project\ProjectService;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \App\Models\Project create(array $data)
 *
 * @see ProjectService
 */
class Project extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'projects';
    }
}
