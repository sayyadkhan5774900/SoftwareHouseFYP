<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');
Auth::routes();

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
    Route::resource('users', 'UsersController');

    // Order
    Route::delete('orders/destroy', 'OrderController@massDestroy')->name('orders.massDestroy');
    Route::post('orders/media', 'OrderController@storeMedia')->name('orders.storeMedia');
    Route::post('orders/ckmedia', 'OrderController@storeCKEditorImages')->name('orders.storeCKEditorImages');
    Route::resource('orders', 'OrderController');

    // Service
    Route::delete('services/destroy', 'ServiceController@massDestroy')->name('services.massDestroy');
    Route::post('services/media', 'ServiceController@storeMedia')->name('services.storeMedia');
    Route::post('services/ckmedia', 'ServiceController@storeCKEditorImages')->name('services.storeCKEditorImages');
    Route::resource('services', 'ServiceController');

    // Services Dropdown
    Route::resource('services-dropdowns', 'ServicesDropdownController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Add New Order
    Route::resource('add-new-orders', 'AddNewOrderController', ['except' => ['index', 'edit', 'update', 'show', 'destroy']]);

    // Client Active Orders
    Route::resource('client-active-orders', 'ClientActiveOrdersController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Add New Service
    Route::resource('add-new-services', 'AddNewServiceController', ['except' => ['index', 'store', 'edit', 'update', 'show', 'destroy']]);

    // My Services
    Route::delete('my-services/destroy', 'MyServicesController@massDestroy')->name('my-services.massDestroy');
    Route::post('my-services/media', 'MyServicesController@storeMedia')->name('my-services.storeMedia');
    Route::post('my-services/ckmedia', 'MyServicesController@storeCKEditorImages')->name('my-services.storeCKEditorImages');
    Route::resource('my-services', 'MyServicesController', ['except' => ['create']]);

    // New Orders
    Route::resource('new-orders', 'NewOrdersController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Active Orders
    Route::resource('active-orders', 'ActiveOrdersController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Service Providers
    Route::resource('service-providers', 'ServiceProvidersController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // My Orders
    Route::delete('my-orders/destroy', 'MyOrdersController@massDestroy')->name('my-orders.massDestroy');
    Route::post('my-orders/media', 'MyOrdersController@storeMedia')->name('my-orders.storeMedia');
    Route::post('my-orders/ckmedia', 'MyOrdersController@storeCKEditorImages')->name('my-orders.storeCKEditorImages');
    Route::resource('my-orders', 'MyOrdersController', ['except' => ['create']]);

    // Clients
    Route::resource('clients', 'ClientsController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

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
