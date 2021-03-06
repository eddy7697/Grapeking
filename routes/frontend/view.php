<?php

Route::get('/lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LocaleController@switchLang']);

/**
 * INDEX
 */
Route::get('/', 'Frontend\PageController@index');

Route::get('/maintenance', function ()
{
    return view('maintenance');
})->name('maintenance');

/**
 * about
 */
Route::group(['prefix' => 'about'], function()
{
    Route::get('/', 'Frontend\PageController@about')->name('about');
    Route::get('/course', 'Frontend\PageController@course')->name('course');
    Route::get('/founder', 'Frontend\PageController@founder')->name('founder');
    Route::get('/certification', 'Frontend\PageController@certification')->name('certification');
    Route::get('/location', 'Frontend\PageController@location')->name('location');
    Route::get('/careers', 'Frontend\PageController@careers')->name('careers');
    Route::get('/privacy', 'Frontend\PageController@privacy')->name('privacy');
    Route::get('/remind', 'Frontend\PageController@remind')->name('remind');
    Route::get('/notice', 'Frontend\PageController@notice')->name('notice');
});

/**
 * research
 */
Route::group(['prefix' => 'research'], function()
{
    Route::get('/bioengineering', 'Frontend\PageController@bioengineering')->name('bioengineering');
    Route::get('/factory', 'Frontend\PageController@factory')->name('factory');
    Route::get('/innovation', 'Frontend\PageController@innovation')->name('innovation');
    Route::get('/paper', 'Frontend\PageController@paper')->name('paper');
    Route::get('/foodsafty', 'Frontend\PageController@foodsaftyCenter')->name('foodsafty');
});

/**
 * csr
 */
Route::group(['prefix' => 'csr'], function()
{
    Route::get('/relation', 'Frontend\PageController@relation')->name('relation');
    Route::get('/foodSafty', 'Frontend\PageController@foodSafty')->name('foodSafty');
    Route::get('/creation', 'Frontend\PageController@creation')->name('creation');
    Route::get('/green', 'Frontend\PageController@green')->name('green');
    Route::get('/download', 'Frontend\PageController@download')->name('download');
});

/**
 * business
 */
Route::group(['prefix' => 'business'], function()
{
    Route::get('/production', 'Frontend\PageController@production')->name('production');
    Route::get('/odm_service', 'Frontend\PageController@lump_sum')->name('lump_sum');
    Route::get('/catalog', 'Frontend\PageController@catalog')->name('catalog');
});

/**
 * PRODUCT
 */
// Route::get('/product-detail/{guid}', 'Frontend\ProductController@getByGuid');
// Route::get('/product-detail/{id}/show', 'Frontend\ProductController@productDetailFromId');
Route::get('/product-detail/{guid}', 'Frontend\ProductController@productDetailFromPath')->name('productDetail');
Route::get('/product', 'Frontend\PageController@productAll');
Route::get('/product/category/{guid}', 'Frontend\ProductController@productCategory');

/**
 * Post
 */
Route::get('/blog', function ()
{
    return view('frontend.blog.list', [
        'isThumbShow' => false,
    ]);
})->name('blog');
Route::get('blog/category/{category}', function ($category)
{
    return view('frontend.blog.category', [
        'isThumbShow' => false,
        'category' => $category
    ]);
});
Route::get('/blog/{id}/detail', function ($id)
{
    return view('frontend.blog.post', [
        'post' => PostView::getById($id),
        'isThumbShow' => false,
    ]);
});
Route::get('/blog/{path}', function ($path)
{
    return view('frontend.blog.post', [
        'post' => PostView::getByPath($path),
        'isThumbShow' => false,
    ]);
});

/**
 * MEMBER
 */
// Route::get('/login', 'Frontend\PageController@login');
// Route::get('/register', 'Frontend\PageController@register');
// Route::get('/forget-password', function ()
// {
//     return view('frontend.authentication.forgetPassword', [
//         'isThumbShow' => false,
//     ]);
// });
// Route::get('/reset-password/{token}', 'Frontend\UserController@resetPasswordPage');

/**
 * DASHBOARD
 */
// Route::group(['prefix' => 'user', 'middleware' => 'checkUser'], function()
// {
//     Route::get('/', 'Frontend\DashboardController@index');
//     Route::get('/address', 'Frontend\DashboardController@address');
//     Route::get('/information', 'Frontend\DashboardController@information');
//     Route::post('/modifyInformation', 'Frontend\DashboardController@modifyInformation');
// });

/**
 * BUSINESS LOGIC
 */
Route::group(['middleware' => 'auth'], function ()
{
    Route::get('/checkout', 'Frontend\BuisnessController@checkout');
    Route::get('/order', 'Frontend\BuisnessController@order');
    /**
     * trans to checkout
     */

    Route::get('/checkout/getPoint', 'Frontend\BuisnessController@getPoint');
});
Route::post('/checkout/billing', 'Frontend\BuisnessController@transToCheckout');
Route::get('/cart', 'Frontend\BuisnessController@cart');
Route::post('/orderChecking', 'Frontend\BuisnessController@orderChecking')->name('orderChecking');
Route::get('/check-order', function ()
{
    return view('frontend.checkoutMethod.checkOrder', [
        'isThumbShow' => false,
        'thumb' => null
    ]);
});
Route::get('/remittance-information', function ()
{
    return view('frontend.checkoutMethod.remittanceInformation', [
        'isThumbShow' => false,
        'thumb' => null
    ]);
});

/**
 * CONTACT
 */
Route::get('/contact', 'Frontend\PageController@contact')->name('contact');

/**
 * Search
 */
Route::post('/search-option', 'Frontend\SearchController@searchProduct');
Route::get('/importScout', 'Frontend\SearchController@importScout');

/**
 * Captcha
 */
Route::get('/captcha', 'HomeController@captcha');
Route::get('/admin/captcha', 'HomeController@adminCaptcha');
Route::get('/cap_str', 'HomeController@getString');

/**
 * Partners
 */
Route::get('/partners', 'Frontend\PageController@partners');

/**
 * Preview
 */
Route::get('/preview/pdf/{path}', 'HomeController@previewPdf');

/**
 * test area
 */
// Route::get('/ga-test', 'HomeController@gaTest');

// Route::get('/hppe-test', function() {
//     return view('test', [
//         'order' => str_random(6)
//     ]);
// });

// Route::get('/test-area', function ()
// {
//     return view('test', [
//         'title' => 'test',
//         'shortcut' => '',
//         'product' => [],
//         'post' => [],
//         'isThumbShow' => false,
//         'thumb' => null
//     ]);
// });
// Route::post('/test-post', 'HomeController@testPost');
// Route::get('/test-action', 'HomeController@testAction');
// Route::get('/truncate', 'HomeController@truncate');
Route::get('/grapeking_sh', function ()
{
    return view('components.map.grapeking_sh'); 
});

Route::get('/grapeking_tw', function ()
{
    return view('components.map.grapeking_tw'); 
});

Route::get('/grapeking_fm', function ()
{
    return view('components.map.grapeking_fm'); 
});

Route::get('/grapeking_donpu', function ()
{
    return view('components.map.grapeking_donpu'); 
});