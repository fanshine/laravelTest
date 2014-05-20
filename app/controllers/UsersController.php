<?php
class UsersController extends BaseController {
    protected $fillable = array('username', 'email');
    /**
     * Show the profile for the given user.
     */
    public function showProfile($id)
    {
        $user = User::find($id);
        return View::make('user.profile', array('user' => $user));
    }

    public function login()
    {
        return View::make('user.login');
    }

    public function logout()
    {
        return View::make('user.login');
    }

    public function addUser($param)
    {
        $user = User::create($param);
        return View::make('user.list');
    }

    public function missingMethod($parameters = array())
    {

    }
}