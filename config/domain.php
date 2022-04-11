<?php


// 'short_url' => preg_replace('#^https?://#', '', rtrim(env('APP_URL', 'http://localhost'), '/')),
return [
    'admin' => config('app.short_url'),
    'telescope' => 'telescope' . '.' . config('app.short_url'),
];
