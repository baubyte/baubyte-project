<?php

use Baubyte\Routing\Route;
Route::get('/api', fn () => json(['message' => 'Baubyte API']));
