<?php

// public routes
Route::get('/', 'PublicController@index')->name('index');
Route::get('about', 'PublicController@aboutUs')->name('about.us');
Route::get('our-ceo', 'PublicController@ourCeo')->name('our-ceo');
Route::get('careers', 'PublicController@careers')->name('careers');
Route::get('careers/personal-history-form', 'PublicController@personalHistoryForm')->name('personal.historyform');
Route::group(['prefix' => 'careers/personal-history-form'], function () {
    Route::post('personal-history-form', 'PublicController@personalHistoryFormStep1')->name('personal.historyform.step1');
    Route::get('{slug}/step-{step}', 'PublicController@personalHistoryFormStep')->name('personal.historyform.step');
    Route::post('{slug}/step-{step}', 'PublicController@personalHistoryFormStepPost')->name('personal.historyform.step.post');
});
Route::get('careers/search/{query}', 'PublicController@careerSearch')->name('career.search');
Route::post('careers/search/job', 'PublicController@careerSearchPost')->name('career.search.post');
Route::get('careers/job-list', 'PublicController@jobList')->name('job.list');
Route::get('careers/job-list/{slug}/job-details', 'PublicController@jobDetails')->name('job.details');
Route::get('insights', 'PublicController@insights')->name('insights');
Route::get('insights/{slug}', 'PublicController@insightDetail')->name('insight.details');
Route::get('expertise/{slug}', 'PublicController@expertise')->name('expertise');
Route::get('contact', 'PublicController@contactUs')->name('contact.us');


// private routes
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', '2fa']], function () {
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
    Route::resource('users', 'UsersController');

    // Team
    Route::delete('teams/destroy', 'TeamController@massDestroy')->name('teams.massDestroy');
    Route::resource('teams', 'TeamController');

    // Countries
    Route::delete('countries/destroy', 'CountriesController@massDestroy')->name('countries.massDestroy');
    Route::resource('countries', 'CountriesController');

    // Department
    Route::delete('departments/destroy', 'DepartmentController@massDestroy')->name('departments.massDestroy');
    Route::resource('departments', 'DepartmentController');

    // Video
    Route::delete('videos/destroy', 'VideoController@massDestroy')->name('videos.massDestroy');
    Route::post('videos/media', 'VideoController@storeMedia')->name('videos.storeMedia');
    Route::post('videos/ckmedia', 'VideoController@storeCKEditorImages')->name('videos.storeCKEditorImages');
    Route::resource('videos', 'VideoController');

    // Contact
    Route::delete('contacts/destroy', 'ContactController@massDestroy')->name('contacts.massDestroy');
    Route::resource('contacts', 'ContactController');

    // Office
    Route::delete('offices/destroy', 'OfficeController@massDestroy')->name('offices.massDestroy');
    Route::post('offices/media', 'OfficeController@storeMedia')->name('offices.storeMedia');
    Route::post('offices/ckmedia', 'OfficeController@storeCKEditorImages')->name('offices.storeCKEditorImages');
    Route::resource('offices', 'OfficeController');

    // Newsletter Subscriber
    Route::delete('newsletter-subscribers/destroy', 'NewsletterSubscriberController@massDestroy')->name('newsletter-subscribers.massDestroy');
    Route::resource('newsletter-subscribers', 'NewsletterSubscriberController');

    // Our Expertise
    Route::delete('our-expertises/destroy', 'OurExpertiseController@massDestroy')->name('our-expertises.massDestroy');
    Route::post('our-expertises/media', 'OurExpertiseController@storeMedia')->name('our-expertises.storeMedia');
    Route::post('our-expertises/ckmedia', 'OurExpertiseController@storeCKEditorImages')->name('our-expertises.storeCKEditorImages');
    Route::resource('our-expertises', 'OurExpertiseController');

    // Opportunity
    Route::delete('opportunities/destroy', 'OpportunityController@massDestroy')->name('opportunities.massDestroy');
    Route::post('opportunities/media', 'OpportunityController@storeMedia')->name('opportunities.storeMedia');
    Route::post('opportunities/ckmedia', 'OpportunityController@storeCKEditorImages')->name('opportunities.storeCKEditorImages');
    Route::resource('opportunities', 'OpportunityController');

    // Personal History Form
    Route::delete('personal-history-forms/destroy', 'PersonalHistoryFormController@massDestroy')->name('personal-history-forms.massDestroy');
    Route::post('personal-history-forms/media', 'PersonalHistoryFormController@storeMedia')->name('personal-history-forms.storeMedia');
    Route::post('personal-history-forms/ckmedia', 'PersonalHistoryFormController@storeCKEditorImages')->name('personal-history-forms.storeCKEditorImages');
    Route::resource('personal-history-forms', 'PersonalHistoryFormController', ['except' => ['create', 'store', 'edit', 'update']]);

    // Client
    Route::delete('clients/destroy', 'ClientController@massDestroy')->name('clients.massDestroy');
    Route::post('clients/media', 'ClientController@storeMedia')->name('clients.storeMedia');
    Route::post('clients/ckmedia', 'ClientController@storeCKEditorImages')->name('clients.storeCKEditorImages');
    Route::resource('clients', 'ClientController', ['except' => ['show']]);

    // Sector
    Route::delete('sectors/destroy', 'SectorController@massDestroy')->name('sectors.massDestroy');
    Route::post('sectors/media', 'SectorController@storeMedia')->name('sectors.storeMedia');
    Route::post('sectors/ckmedia', 'SectorController@storeCKEditorImages')->name('sectors.storeCKEditorImages');
    Route::resource('sectors', 'SectorController');

    // Insight
    Route::delete('insights/destroy', 'InsightController@massDestroy')->name('insights.massDestroy');
    Route::post('insights/media', 'InsightController@storeMedia')->name('insights.storeMedia');
    Route::post('insights/ckmedia', 'InsightController@storeCKEditorImages')->name('insights.storeCKEditorImages');
    Route::resource('insights', 'InsightController');

    // Gallery
    Route::delete('galleries/destroy', 'GalleryController@massDestroy')->name('galleries.massDestroy');
    Route::post('galleries/media', 'GalleryController@storeMedia')->name('galleries.storeMedia');
    Route::post('galleries/ckmedia', 'GalleryController@storeCKEditorImages')->name('galleries.storeCKEditorImages');
    Route::resource('galleries', 'GalleryController');

    // Testimonial
    Route::delete('testimonials/destroy', 'TestimonialController@massDestroy')->name('testimonials.massDestroy');
    Route::post('testimonials/media', 'TestimonialController@storeMedia')->name('testimonials.storeMedia');
    Route::post('testimonials/ckmedia', 'TestimonialController@storeCKEditorImages')->name('testimonials.storeCKEditorImages');
    Route::resource('testimonials', 'TestimonialController');

    Route::get('team-members', 'TeamMembersController@index')->name('team-members.index');
    Route::post('team-members', 'TeamMembersController@invite')->name('team-members.invite');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth', '2fa']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
        Route::post('profile/two-factor', 'ChangePasswordController@toggleTwoFactor')->name('password.toggleTwoFactor');
    }
});
Route::group(['namespace' => 'Auth', 'middleware' => ['auth', '2fa']], function () {
    // Two Factor Authentication
    if (file_exists(app_path('Http/Controllers/Auth/TwoFactorController.php'))) {
        Route::get('two-factor', 'TwoFactorController@show')->name('twoFactor.show');
        Route::post('two-factor', 'TwoFactorController@check')->name('twoFactor.check');
        Route::get('two-factor/resend', 'TwoFactorController@resend')->name('twoFactor.resend');
    }
});
