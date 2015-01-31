<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait, SoftDeletingTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    /**
     * The enable soft deletion of records.
     *
     * @var mixed
     */
    protected $dates = ['deleted_at'];

    /**
     * The validation method.
     *
     * @param  array $data
     * @param  array $rules
     * @return boolean
     */
    public function isValid($data, $rules)
    {
        $validation = Validator::make($data, $rules);

        if ($validation->passes()) {
            return true;
        }

        $this->errors = $validation->messages();

        return false;
    }

}
