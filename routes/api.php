<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Add Units
    Route::apiResource('add-units', 'AddUnitApiController');

    // Add Blocks
    Route::apiResource('add-blocks', 'AddBlockApiController');

    // Unit Managements
    Route::apiResource('unit-managements', 'UnitManagementApiController');

    // Facility Categories
    Route::apiResource('facility-categories', 'FacilityCategoryApiController');

    // Facility Managements
    Route::post('facility-managements/media', 'FacilityManagementApiController@storeMedia')->name('facility-managements.storeMedia');
    Route::apiResource('facility-managements', 'FacilityManagementApiController');

    // Facility Books
    Route::apiResource('facility-books', 'FacilityBookApiController');

    // Add Visitors
    Route::apiResource('add-visitors', 'AddVisitorApiController');

    // Gates
    Route::apiResource('gates', 'GateApiController');

    // Histories
    Route::apiResource('histories', 'HistoryApiController');

    // Qrs
    Route::apiResource('qrs', 'QrApiController');

    // Add Defects
    Route::post('add-defects/media', 'AddDefectApiController@storeMedia')->name('add-defects.storeMedia');
    Route::apiResource('add-defects', 'AddDefectApiController');

    // Status Controls
    Route::apiResource('status-controls', 'StatusControlApiController');

    // Defect Categories
    Route::apiResource('defect-categories', 'DefectCategoryApiController');

    // Maintenances Payments
    Route::post('maintenances-payments/media', 'MaintenancesPaymentApiController@storeMedia')->name('maintenances-payments.storeMedia');
    Route::apiResource('maintenances-payments', 'MaintenancesPaymentApiController');

    // Payment Methods
    Route::apiResource('payment-methods', 'PaymentMethodApiController');

    // Facility Payments
    Route::post('facility-payments/media', 'FacilityPaymentApiController@storeMedia')->name('facility-payments.storeMedia');
    Route::apiResource('facility-payments', 'FacilityPaymentApiController');

    // Notice Boards
    Route::apiResource('notice-boards', 'NoticeBoardApiController');

    // Event Categories
    Route::apiResource('event-categories', 'EventCategoryApiController');

    // Event Controls
    Route::apiResource('event-controls', 'EventControlApiController');

    // Event Enrolls
    Route::apiResource('event-enrolls', 'EventEnrollApiController');

    // Add Feedbacks
    Route::post('add-feedbacks/media', 'AddFeedbackApiController@storeMedia')->name('add-feedbacks.storeMedia');
    Route::apiResource('add-feedbacks', 'AddFeedbackApiController');

    // Feedback Categories
    Route::apiResource('feedback-categories', 'FeedbackCategoryApiController');
});
