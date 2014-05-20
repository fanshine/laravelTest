<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('home.index');
// });
Route::get('/', function () {
    return View::make('hello');
});
// Route::get('/', 'HomeController@index');
Route::get('doc/{id?}', 'DocsController@getDocs');
Route::get('showEditForm/{id?}', 'DocsController@showEditForm');
Route::post('updateForm', 'DocsController@updateForm');
// Route::post('updateForm', function ()
// {
//     $form = array(
//         'title' => Input::get('title'),
//         // 'content' => Textarea::get('content'),
//     );
//     var_dump($form);
// });

Route::get('login', 'UsersController@login');

Route::get('users', function ()
{
    $users = User::all();
    // var_dump($users);
    // return View::make('users')->with('users', $users);
    return View::make('users', array('users' => $users));
});

Route::get('user/{id}', 'UsersController@showProfile');
// Route::get('user/{id}', function ($id)
// {
//     $user = User::find($id);
//     return View::make('user.profile', array('user' => $user));
// });

Route::get('remindPassword', 'RemindersController@getRemind');

Route::get('captcha2', function(){
    $captcha = App::make('Libs\\Captcha\\Captcha');
    // $img = $captcha->dumpCaptcha();
    return View::make('view_name_here')->with('captchaImage', $captcha->dumpCaptcha());
    // $img = Captcha::create();
    // return View::make('view_name_here')->with('captchaImage', $img); // $captcha->dumpCaptcha()
});

Route::get('captcha-test', function () {
    if (Request::getMethod() == 'POST')
    {
        $rules =  array('captcha' => 'required|captcha');
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            echo '<p style="color: #ff0000;">Incorrect!</p>';
        }
        else
        {
            echo '<p style="color: #00ff30;">Matched :)</p>';
        }
    }
    // Captcha::create();
    $content = Form::open(array(URL::to(Request::segment(1))));
    $content .= '<p>' . HTML::image(Captcha::img(), 'Captcha image') . '</p>';
    $content .= '<p>' . Form::text('captcha') . '<a href="">Change</a></p>';
    $content .= '<p>' . Form::submit('Check') . '</p>';
    $content .= '<p>' . Form::close() . '</p>';
    return $content;
    // return Captcha::create();
});

