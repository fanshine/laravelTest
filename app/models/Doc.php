<?php
use LaravelBook\Ardent\Ardent;
class Doc extends Ardent {
    public $autoPurgeRedundantAttributes = true;
    public static $rules = array(
        'title' => 'required',
        'content' => 'required',
        'user_id' => 'required'
    );
    public static $factory = array(
        'title' => 'text',
        'content' => 'text',
        'user_id' => 'factory|User',
    );

    public function user()
    {
        return $this->belongsTo('User');
    }
}