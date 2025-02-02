<?php

return [
    'build_path' => public_path('build'),  // Path ke build Vite
    'dev_server' => [
        'enabled' => env('VITE_DEV_SERVER', false),  // Menentukan apakah dev server Vite aktif
        'host' => 'localhost',
        'port' => 5173,  // Port default untuk Vite
    ],
];
