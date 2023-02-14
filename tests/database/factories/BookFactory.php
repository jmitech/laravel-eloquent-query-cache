<?php
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

use Illuminate\Support\Str;

$factory->define(\Jmitech\QueryCache\Test\Models\Book::class, function () {
    return [
        'name' => 'Book'.Str::random(5),
    ];
});
