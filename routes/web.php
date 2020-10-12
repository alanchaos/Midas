<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes();
Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('user-alerts/read', 'UserAlertsController@read');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);

    // Add Units
    Route::delete('add-units/destroy', 'AddUnitController@massDestroy')->name('add-units.massDestroy');
    Route::post('add-units/parse-csv-import', 'AddUnitController@parseCsvImport')->name('add-units.parseCsvImport');
    Route::post('add-units/process-csv-import', 'AddUnitController@processCsvImport')->name('add-units.processCsvImport');
    Route::resource('add-units', 'AddUnitController');

    // Add Blocks
    Route::delete('add-blocks/destroy', 'AddBlockController@massDestroy')->name('add-blocks.massDestroy');
    Route::resource('add-blocks', 'AddBlockController');

    // Unit Managements
    Route::delete('unit-managements/destroy', 'UnitManagementController@massDestroy')->name('unit-managements.massDestroy');
    Route::post('unit-managements/media', 'UnitManagementController@storeMedia')->name('unit-managements.storeMedia');
    Route::post('unit-managements/ckmedia', 'UnitManagementController@storeCKEditorImages')->name('unit-managements.storeCKEditorImages');
    Route::resource('unit-managements', 'UnitManagementController');

    // Add Family Members
    Route::resource('add-family-members', 'AddFamilyMemberController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Activity Logs
    Route::resource('activity-logs', 'ActivityLogController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Facility Categories
    Route::delete('facility-categories/destroy', 'FacilityCategoryController@massDestroy')->name('facility-categories.massDestroy');
    Route::post('facility-categories/parse-csv-import', 'FacilityCategoryController@parseCsvImport')->name('facility-categories.parseCsvImport');
    Route::post('facility-categories/process-csv-import', 'FacilityCategoryController@processCsvImport')->name('facility-categories.processCsvImport');
    Route::resource('facility-categories', 'FacilityCategoryController');

    // Facility Managements
    Route::delete('facility-managements/destroy', 'FacilityManagementController@massDestroy')->name('facility-managements.massDestroy');
    Route::post('facility-managements/media', 'FacilityManagementController@storeMedia')->name('facility-managements.storeMedia');
    Route::post('facility-managements/ckmedia', 'FacilityManagementController@storeCKEditorImages')->name('facility-managements.storeCKEditorImages');
    Route::resource('facility-managements', 'FacilityManagementController');

    // Add Tenants
    Route::resource('add-tenants', 'AddTenantController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Family Settings
    Route::resource('family-settings', 'FamilySettingController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Tenant Settings
    Route::resource('tenant-settings', 'TenantSettingController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Facility Books
    Route::delete('facility-books/destroy', 'FacilityBookController@massDestroy')->name('facility-books.massDestroy');
    Route::resource('facility-books', 'FacilityBookController');

    // Check Facilities
    Route::resource('check-facilities', 'CheckFacilityController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Add Visitors
    Route::delete('add-visitors/destroy', 'AddVisitorController@massDestroy')->name('add-visitors.massDestroy');
    Route::resource('add-visitors', 'AddVisitorController');

    // Gates
    Route::delete('gates/destroy', 'GateController@massDestroy')->name('gates.massDestroy');
    Route::resource('gates', 'GateController');

    // Histories
    Route::delete('histories/destroy', 'HistoryController@massDestroy')->name('histories.massDestroy');
    Route::resource('histories', 'HistoryController');

    // Qrs
    Route::delete('qrs/destroy', 'QrController@massDestroy')->name('qrs.massDestroy');
    Route::resource('qrs', 'QrController');

    // Add Defects
    Route::delete('add-defects/destroy', 'AddDefectController@massDestroy')->name('add-defects.massDestroy');
    Route::post('add-defects/media', 'AddDefectController@storeMedia')->name('add-defects.storeMedia');
    Route::post('add-defects/ckmedia', 'AddDefectController@storeCKEditorImages')->name('add-defects.storeCKEditorImages');
    Route::resource('add-defects', 'AddDefectController');

    // Status Controls
    Route::delete('status-controls/destroy', 'StatusControlController@massDestroy')->name('status-controls.massDestroy');
    Route::resource('status-controls', 'StatusControlController');

    // Defect Categories
    Route::delete('defect-categories/destroy', 'DefectCategoryController@massDestroy')->name('defect-categories.massDestroy');
    Route::resource('defect-categories', 'DefectCategoryController');

    // Maintenances Payments
    Route::delete('maintenances-payments/destroy', 'MaintenancesPaymentController@massDestroy')->name('maintenances-payments.massDestroy');
    Route::post('maintenances-payments/media', 'MaintenancesPaymentController@storeMedia')->name('maintenances-payments.storeMedia');
    Route::post('maintenances-payments/ckmedia', 'MaintenancesPaymentController@storeCKEditorImages')->name('maintenances-payments.storeCKEditorImages');
    Route::resource('maintenances-payments', 'MaintenancesPaymentController');

    // Payment Methods
    Route::delete('payment-methods/destroy', 'PaymentMethodController@massDestroy')->name('payment-methods.massDestroy');
    Route::resource('payment-methods', 'PaymentMethodController');

    // Facility Payments
    Route::delete('facility-payments/destroy', 'FacilityPaymentController@massDestroy')->name('facility-payments.massDestroy');
    Route::post('facility-payments/media', 'FacilityPaymentController@storeMedia')->name('facility-payments.storeMedia');
    Route::post('facility-payments/ckmedia', 'FacilityPaymentController@storeCKEditorImages')->name('facility-payments.storeCKEditorImages');
    Route::resource('facility-payments', 'FacilityPaymentController');

    // Notice Boards
    Route::delete('notice-boards/destroy', 'NoticeBoardController@massDestroy')->name('notice-boards.massDestroy');
    Route::resource('notice-boards', 'NoticeBoardController');

    // Event Categories
    Route::delete('event-categories/destroy', 'EventCategoryController@massDestroy')->name('event-categories.massDestroy');
    Route::resource('event-categories', 'EventCategoryController');

    // Event Controls
    Route::delete('event-controls/destroy', 'EventControlController@massDestroy')->name('event-controls.massDestroy');
    Route::resource('event-controls', 'EventControlController');

    // Event Enrolls
    Route::delete('event-enrolls/destroy', 'EventEnrollController@massDestroy')->name('event-enrolls.massDestroy');
    Route::resource('event-enrolls', 'EventEnrollController');

    // Add Feedbacks
    Route::delete('add-feedbacks/destroy', 'AddFeedbackController@massDestroy')->name('add-feedbacks.massDestroy');
    Route::post('add-feedbacks/media', 'AddFeedbackController@storeMedia')->name('add-feedbacks.storeMedia');
    Route::post('add-feedbacks/ckmedia', 'AddFeedbackController@storeCKEditorImages')->name('add-feedbacks.storeCKEditorImages');
    Route::resource('add-feedbacks', 'AddFeedbackController');

    // Feedback Categories
    Route::delete('feedback-categories/destroy', 'FeedbackCategoryController@massDestroy')->name('feedback-categories.massDestroy');
    Route::resource('feedback-categories', 'FeedbackCategoryController');

    // Form Categories
    Route::delete('form-categories/destroy', 'FormCategoryController@massDestroy')->name('form-categories.massDestroy');
    Route::resource('form-categories', 'FormCategoryController');

    // Locations
    Route::delete('locations/destroy', 'LocationController@massDestroy')->name('locations.massDestroy');
    Route::resource('locations', 'LocationController');

    Route::get('messenger', 'MessengerController@index')->name('messenger.index');
    Route::get('messenger/create', 'MessengerController@createTopic')->name('messenger.createTopic');
    Route::post('messenger', 'MessengerController@storeTopic')->name('messenger.storeTopic');
    Route::get('messenger/inbox', 'MessengerController@showInbox')->name('messenger.showInbox');
    Route::get('messenger/outbox', 'MessengerController@showOutbox')->name('messenger.showOutbox');
    Route::get('messenger/{topic}', 'MessengerController@showMessages')->name('messenger.showMessages');
    Route::delete('messenger/{topic}', 'MessengerController@destroyTopic')->name('messenger.destroyTopic');
    Route::post('messenger/{topic}/reply', 'MessengerController@replyToTopic')->name('messenger.reply');
    Route::get('messenger/{topic}/reply', 'MessengerController@showReply')->name('messenger.showReply');
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
