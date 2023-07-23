<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class FileValidationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Validator::extend('file_format', function ($attribute, $value, $parameters, $validator) {
            $allowedFormats = $parameters;

            // Ensure the file has a valid extension
            $extension = strtolower($value->getClientOriginalExtension());

            return in_array($extension, $allowedFormats);
        });
    }
}