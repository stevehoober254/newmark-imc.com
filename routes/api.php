<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Users
    Route::post('users/media', 'UsersApiController@storeMedia')->name('users.storeMedia');
    Route::apiResource('users', 'UsersApiController');

    // Department
    Route::apiResource('departments', 'DepartmentApiController');

    // Contact
    Route::apiResource('contacts', 'ContactApiController');

    // Office
    Route::post('offices/media', 'OfficeApiController@storeMedia')->name('offices.storeMedia');
    Route::apiResource('offices', 'OfficeApiController');

    // Newsletter Subscriber
    Route::apiResource('newsletter-subscribers', 'NewsletterSubscriberApiController');

    // Our Expertise
    Route::post('our-expertises/media', 'OurExpertiseApiController@storeMedia')->name('our-expertises.storeMedia');
    Route::apiResource('our-expertises', 'OurExpertiseApiController');

    // Opportunity
    Route::post('opportunities/media', 'OpportunityApiController@storeMedia')->name('opportunities.storeMedia');
    Route::apiResource('opportunities', 'OpportunityApiController');

    // Personal History Form
    Route::post('personal-history-forms/media', 'PersonalHistoryFormApiController@storeMedia')->name('personal-history-forms.storeMedia');
    Route::apiResource('personal-history-forms', 'PersonalHistoryFormApiController', ['except' => ['store', 'update']]);

    // Client
    Route::post('clients/media', 'ClientApiController@storeMedia')->name('clients.storeMedia');
    Route::apiResource('clients', 'ClientApiController', ['except' => ['show']]);

    // Sector
    Route::post('sectors/media', 'SectorApiController@storeMedia')->name('sectors.storeMedia');
    Route::apiResource('sectors', 'SectorApiController');

    // Insight
    Route::post('insights/media', 'InsightApiController@storeMedia')->name('insights.storeMedia');
    Route::apiResource('insights', 'InsightApiController');

    // Gallery
    Route::post('galleries/media', 'GalleryApiController@storeMedia')->name('galleries.storeMedia');
    Route::apiResource('galleries', 'GalleryApiController');

    // Testimonial
    Route::post('testimonials/media', 'TestimonialApiController@storeMedia')->name('testimonials.storeMedia');
    Route::apiResource('testimonials', 'TestimonialApiController');
});
