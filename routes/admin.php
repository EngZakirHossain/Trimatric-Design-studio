<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('markAsRead',function () {
        auth('admin')->user()->unreadNotifications->MarkAsread();
        return redirect()->back();
    })->name('MarkAsRead');

    Route::get('/', function (){
        return redirect()->route('admin.auth.login');
    });

    /*authentication*/
    Route::group(['namespace' => 'Auth', 'prefix' => 'auth', 'as' => 'auth.'], function () {
        Route::get('login', 'LoginController@login')->name('login');
        Route::post('login', 'LoginController@submit');
        Route::get('logout', 'LoginController@logout')->name('logout');
    });
    Route::group(['middleware' => ['admin']], function () {
        Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');

        //client Routes
        Route::group(['prefix' => 'client', 'as' => 'client.',], function () {
            Route::get('view', 'ClientController@index')->name('view');
            Route::post('addClient', 'ClientController@addNew')->name('add');
            Route::post('deleteClient', 'ClientController@delete')->name('delete');
            Route::post('updateClient', 'ClientController@update')->name('update');
        });
        //Service Routes
        Route::group(['prefix' => 'service', 'as' => 'service.',], function () {
            Route::get('view-services', 'ServiceController@index')->name('view');
            Route::post('store', 'ServiceController@store')->name('store');
            Route::post('delete-service', 'ServiceController@delete')->name('delete');
        });
        //Sub-Service Routes
        Route::group(['prefix' => 'sub-service', 'as' => 'subService.',], function () {
            Route::post('sub-service-store', 'ServiceController@storeSubService')->name('store');
        });

        //profile Routes
        Route::group(['prefix' => 'profile', 'as' => 'profile.',], function () {
            Route::get('view-profile', 'ProjectController@index')->name('view');
            Route::post('store', 'ProjectController@store')->name('store');
            Route::post('update', 'ProjectController@update')->name('update');
            Route::post('delete-profile', 'ProjectController@delete')->name('delete');

            Route::get('view-profileDetails', 'ProjectController@profileDetails')->name('profileDetails');
            Route::get('add-profile-Info/{id}', 'ProjectController@addProfileInfo')->name('addProfileInfo');
            Route::post('store-profile-Info', 'ProjectController@storeProfileInfo')->name('storeProfileInfo');
            Route::post('delete-profile-Info', 'ProjectController@deleteProfileInfo')->name('deleteProfileInfo');
        });
        //Tag Routes
        Route::group(['prefix' => 'tag', 'as' => 'tag.',], function () {
            Route::get('view-tag', 'TagController@index')->name('view');
            Route::post('store', 'TagController@store')->name('store');
            Route::post('delete-tag', 'TagController@delete')->name('delete');
        });

        //Page Information Seo Routes
        Route::group(['prefix' => 'seo', 'as' => 'seo.',], function () {
            Route::get('view-seo', 'SeoController@index')->name('view');
            Route::post('store', 'SeoController@store')->name('store');
            Route::post('delete-seo', 'SeoController@delete')->name('delete');
        });

        //Message Routes
        Route::group(['prefix' => 'message', 'as' => 'message.',], function () {
            Route::get('view-message', 'MessageController@index')->name('view');
            Route::post('delete-message', 'MessageController@delete')->name('delete');
        });
        //Message Routes
        Route::group(['prefix' => 'setting', 'as' => 'setting.',], function () {
            Route::get('view-setting', 'SettingController@index')->name('view');
            Route::post('add-setting', 'SettingController@store')->name('store');
        });
    });
});

