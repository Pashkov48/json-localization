<?php

namespace App\Exceptions;

use App\Exceptions\Account\InvalidCredentialsException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->renderable(function (InvalidCredentialsException $e) {
            return response()->json([
                'status' => 'failed',
                //функция для мультиязычности(exception это название файла в папке ru)
                //так же в конфиге app можно указать локализацию locale = ru
                'message' => __('exceptions.InvalidUserCredentials')
            ]);
        });

        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
