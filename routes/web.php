<?php

use Illuminate\Support\Facades\Route;


Route::get('/blog', function () {
    return view('blog');
});


Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get('/', 'IndexController@index')->name('home');
});


Route::group(['prefix' => 'dashboard',  'middleware' => 'auth'], function()
{
    Route::get('/', function () {return view('Dashboard.index');})->name('dash.home');

    Route::namespace('App\Http\Controllers')->group(function () {

    // Logout
        Route::get('/logout', 'AuthController@logout')->name('logout');

    //Setting
        Route::prefix('/setting')->group(function () {
        Route::get('/edit', 'AccountController@edit')->name('setting.edit');
        Route::post('/doedit', 'AccountController@doedit')->name('setting.doedit');
        });

    //About ME
        Route::prefix('/about')->group(function () {
        Route::get('/', 'AboutController@index')->name('about');
        Route::get('/edit/{id}', 'AboutController@edit')->name('about.edit');
        Route::post('/doedit', 'AboutController@doedit')->name('about.doedit');

    });

    //Skills
        Route::prefix('/skill')->group(function () {
            Route::get('/', 'SkillController@index')->name('skill');
            Route::post('/doadd', 'SkillController@doadd')->name('skill.doadd');
            Route::get('/edit/{id}', 'SkillController@edit')->name('skill.edit');
            Route::post('/doedit', 'SkillController@doedit')->name('skill.doedit');
            Route::get('/delete/{id}', 'SkillController@delete')->name('skill.delete');
        });



    //Services
        Route::prefix('/service')->group(function () {
            Route::get('/', 'ServiceController@index')->name('service');
            Route::post('/doadd', 'ServiceController@doadd')->name('service.doadd');
            Route::get('/edit/{id}', 'ServiceController@edit')->name('service.edit');
            Route::post('/doedit', 'ServiceController@doedit')->name('service.doedit');
            Route::get('/delete/{id}', 'ServiceController@delete')->name('service.delete');
        });

    //Contact
                Route::prefix('/contact')->group(function () {
                    Route::get('/', 'ContactController@index')->name('contact');
                    Route::get('/show/{id}', 'ContactController@show')->name('contact.show');
                    Route::get('/delete/{id}', 'ContactController@delete')->name('contact.delete');
                });

    //Notification
        Route::prefix('/notify')->group(function () {
            Route::get('/markAllRead' , 'NotificationController@readAll')->name('markAllRead');
            Route::get('/showAll' , 'NotificationController@showAll')->name('showAll');
            Route::get('/markRead/{id}' , 'NotificationController@read')->name('markRead');
        });

    //Projects
            Route::prefix('/project')->group(function () {
                Route::get('/', 'ProjectController@index')->name('project');
                Route::get('/show/{id}', 'ProjectController@show')->name('project.show');

                Route::get('/add', 'ProjectController@add')->name('project.add');
                Route::post('/doadd', 'ProjectController@doadd')->name('project.doadd');

                Route::get('/edit/{id}', 'ProjectController@edit')->name('project.edit');
                Route::post('/doedit', 'ProjectController@doedit')->name('project.doedit');

                Route::get('/delete/{id}', 'ProjectController@delete')->name('project.delete');
            });



    //ImageProjects
        Route::prefix('/image-project')->group(function () {
            Route::get('/show/{id}', 'ImageProjectController@show')->name('imagep.show');
            Route::get('/edit/{id}', 'ImageProjectController@edit')->name('image.edit');
            Route::post('/doadd', 'ImageProjectController@doadd')->name('imagep.doadd');
            Route::post('/doedit', 'ImageProjectController@doedit')->name('imagep.doedit');
            // Route::get('/delete/{id}', 'ImageProjectController@delete')->name('imagep.delete');
            Route::get('/delete/{id}', 'ImageProjectController@delete')->name('image.delete');

        });


    });
});




//Routes Without Auth Middleware

Route::namespace('App\Http\Controllers')->prefix('dashboard')->group(function () {
    Route::get('/register', 'AuthController@regView')->name('reg');
    Route::post('/do-register', 'AuthController@register')->name('register');
    Route::get('/login', 'AuthController@login')->name('login');
    Route::post('/do-login', 'AuthController@doLogin')->name('dologin');

    Route::get('/forgot-password', 'AuthController@forgot')->name('forgot');
    Route::post('/do-forgot', 'AuthController@doForgot')->name('doForgot');

    Route::get('/password/rest/{token}/{email}', 'AuthController@rest')->name('rest');
    Route::post('/do-rest', 'AuthController@doRest')->name('doRest');
   //Contact
    Route::prefix('/contacts')->group(function () {
    Route::get('/', 'ContactController@index')->name('contacts');
    Route::post('/save', 'ContactController@save')->name('contacts.save');
    Route::post('/contact', 'ContactController@contact')->name('make.contact');
                                                });
//Projects
    Route::prefix('/project')->group(function () {
    Route::get('/user-show/{id}', 'ProjectController@usershow')->name('project.user.show');
});

});
