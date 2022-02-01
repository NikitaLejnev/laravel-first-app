<!-- Example 3-16. Route group namespace prefixes -->

<!--     App/Http/Controllers/UsersController
Route::get('/', 'UsersController@index');

Route::namespace('Dashboard')->group(function () {
    //  App/Http/Controllers/Dashboard/PurchasesController
    Route::get('dashboard/purchases', 'PurchasesController@index');
}); -->