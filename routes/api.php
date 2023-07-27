<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Customers
Route::apiResource('/customers', 'CustomerController')
    ->only(['index', 'show', 'store', 'update', 'destroy']);

// Invoices
Route::apiResource('/invoices', 'InvoiceController')
    ->only(['index', 'show', 'store', 'destroy']);

Route::post('invoices/bulk', 'InvoiceController@bulkStore')->name('invoice.bulk');
