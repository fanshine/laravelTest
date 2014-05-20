<?php
class TestUser extends Eloquent {
    public static $rules = array(
        'body' => 'required',
        'user_id' => 'required'
    );
}