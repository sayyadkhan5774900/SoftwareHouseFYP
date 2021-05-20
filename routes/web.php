<?php

use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Support\MediaStream;


// Route::redirect('/', '/login');

Route::get('/', function () {
    return view('index');
});

Route::get('/website-development', function () {
    return view('website-development');
});

Route::get('/product-photography', function () {
    return view('product-photography');
});

Route::get('/graphic-designing', function () {
    return view('graphic-designing');
});

Route::get('/event-management', function () {
    return view('event-management');
});

Route::get('/social-media-marketing', function () {
    return view('social-media');
});

Route::get('/case-studies', function () {
    return view('case-studies');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});


Route::post('/contact-us', function (Request $request) {
    

    $request->validate([
        'email' => 'email|required',
        'message' => 'required'
    ]);

    \Mail::send('contact_email',
    array(
        'name' => $request->get('first_name').' '.$request->get('last_name'),
        'email' => $request->get('email'),
        'subject' => $request->get('subject'),
        'phone_number' => $request->get('phone'),
        'website' => $request->get('website'),
        'user_message' => $request->get('message'),
    ), function($message) use ($request)
      {
         $message->from($request->email);
         $message->to('codingdriver15@gmail.com');
      });
    // dd($request['email']);

    return back()->with('message', 'Thank you for contact us!');


})->name('contact-us');



// Download File Routes

Route::get('download/order/file/{id}', function ($id) {
  
    $order = Order::with(['media'])->find($id);

    $files = $order->getMedia('file');

    return MediaStream::create('my-files.zip')->addMedia($files);

})->name('order.file.download');

Route::get('download/service/file/{id}', function ($id) {
  
    $service = Service::with(['media'])->find($id);

    $files = $service->getMedia('file');

    return MediaStream::create('my-files.zip')->addMedia($files);

})->name('service.file.download');

 
// Download File Routes End


Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('register/client', function () {
    return view('auth.client_register');
})->name('register.client');

Route::get('register/provider', function () {
    return view('auth.provider_register');
})->name('register.provider');

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
    Route::resource('services', 'ServiceController',['except' => ['create', 'store']]);

    // Services Dropdown
    Route::resource('services-dropdowns', 'ServicesDropdownController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Add New Order
    Route::resource('add-new-orders', 'AddNewOrderController', ['except' => ['index', 'edit', 'update', 'show', 'destroy']]);

    // Client Active Orders
    Route::resource('active-orders', 'ClientActiveOrdersController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

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
    Route::resource('manager-active-orders', 'ActiveOrdersController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Service Providers
    Route::resource('service-providers', 'ServiceProvidersController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

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
