<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Web'], function () {
    Route::get('/', 'WebController@Home')->name('home');
    Route::get('/about', 'WebController@AboutUs')->name('about');
    Route::get('/service', 'WebController@Service')->name('service');
    Route::get('/find-us', 'WebController@FindUs')->name('findUs');
    Route::get('/team', 'WebController@Team')->name('team');
    Route::get('/clients', 'WebController@Client')->name('client');
    Route::get('/portfolio', 'WebController@Portfolio')->name('portfolio');
    Route::post('/sendMessage', 'WebController@Message')->name('sendMessage');
    //single graphics services
    Route::get('service/logo-banding', 'WebController@LogoBanding')->name('logoBanding');
    Route::get('service/custom-icon', 'WebController@IconDesign')->name('iconDesign');
    Route::get('service/static-graphics', 'WebController@StaticGraphicsDesign')->name('StaticGraphicsDesign');
    Route::get('service/dynamic-graphics', 'WebController@DynamicGraphicsDesign')->name('DynamicGraphicsDesign');
    Route::get('service/graphics-Print', 'WebController@GraphicsPrint')->name('GraphicsPrint');
    //Event Activation services
    Route::get('service/corporate-event', 'WebController@CorporateEvent')->name('corporateEvent');
    Route::get('service/social-event', 'WebController@SocialEvent')->name('socialEvent');
    Route::get('service/cultural-event', 'WebController@CulturalEvent')->name('culturalEvent');
    //Digital Marketing services
    Route::get('service/marketing-Planning', 'WebController@MarketingPlanning')->name('marketingPlanning');
    Route::get('service/facebook-marketing', 'WebController@Facebook')->name('facebook');
    Route::get('service/youtube-marketing', 'WebController@Youtube')->name('youtube');
    Route::get('service/influential-marketing', 'WebController@Influential')->name('influential');
    Route::get('service/google-Ads-marketing', 'WebController@GoogleAds')->name('googleAds');
    Route::get('service/seo', 'WebController@Seo')->name('seo');
    //Production services
    Route::get('service/photography', 'WebController@Photography')->name('photography');
    Route::get('service/tvc-ovc-rdc-av', 'WebController@TVC')->name('tvc');
    Route::get('service/print-production', 'WebController@Print')->name('printProduction');
    //3D services
    Route::get('service/3D-modeling', 'WebController@Modeling')->name('modeling');
    Route::get('service/texturing', 'WebController@Texturing')->name('texturing');
    Route::get('service/vfx-cg', 'WebController@VFX')->name('vfx');
    Route::get('service/lighting-environment', 'WebController@Lighting')->name('lighting');
    Route::get('service/animation', 'WebController@Animation')->name('animation');
    Route::get('service/architectural-design', 'WebController@Architectural')->name('architectural');
    Route::get('service/interior-design', 'WebController@Interior')->name('interior');
    Route::get('service/landscape-design', 'WebController@Landscape')->name('landscape');
    //3D services
    Route::get('service/domain-hosting', 'WebController@DomainHosting')->name('domainHosting');
    Route::get('service/web-design-development', 'WebController@Web')->name('web');
    Route::get('service/app-design-development', 'WebController@App')->name('app');

    //single profile link
    Route::get('service/profile/{serviceName}', 'WebController@serviceProfile')->name('serviceProfile');
    Route::get('profile/details/{name}', 'WebController@profileDetails')->name('profileDetails');

});
