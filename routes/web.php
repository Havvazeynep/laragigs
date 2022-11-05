<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data
Route::post('listings', [ListingController::class, 'store']);





// Sending Listing
Route::get('listings/{listing}', [ListingController::class, 'show']);