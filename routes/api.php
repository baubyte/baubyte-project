<?php

use Baubyte\Routing\Route;
Route::get('/', fn () => json(['message' => 'Baubyte API']));