<?php

// public routes
Route::get('/', 'PublicController@index')->name('public.index');
Route::get('about-us', 'PublicController@aboutUs')->name('about.us');
Route::get('newmark-people', 'PublicController@careers')->name('careers');
Route::get('insights', 'PublicController@insights')->name('insights');
Route::get('insights/{slug}', 'PublicController@insightDetail')->name('insight.details');
Route::get('practice-area/newmark-digital', 'PublicController@newmarkDigital')->name('newmark.digital');
Route::get('practice-area/service/newmark-digital', 'PublicController@newmarkDigitalDetails')->name('newmark.digital.details');
Route::get('contact-us', 'PublicController@contactUs')->name('contact.us');


// private routes
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::post('users/media', 'UsersController@storeMedia')->name('users.storeMedia');
    Route::post('users/ckmedia', 'UsersController@storeCKEditorImages')->name('users.storeCKEditorImages');
    Route::post('users/parse-csv-import', 'UsersController@parseCsvImport')->name('users.parseCsvImport');
    Route::post('users/process-csv-import', 'UsersController@processCsvImport')->name('users.processCsvImport');
    Route::resource('users', 'UsersController');

    // Insights
    Route::delete('insights/destroy', 'InsightsController@massDestroy')->name('insights.massDestroy');
    Route::post('insights/media', 'InsightsController@storeMedia')->name('insights.storeMedia');
    Route::post('insights/ckmedia', 'InsightsController@storeCKEditorImages')->name('insights.storeCKEditorImages');
    Route::resource('insights', 'InsightsController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
