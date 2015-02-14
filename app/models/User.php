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
     * Fillable fields.
     *
     * @var array
     */
    protected $fillable = array('user_name', 'password', 'last_name', 'first_name', 'middle_name', 'email', 'user_type', 'address', 'status');

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

    /**
     * The bills relationship.
     *
     * @return object
     */
    public function bills()
    {
        return $this->hasMany('Bill');
    }

    /**
     * The notes relationship.
     *
     * @return object
     */
    public function notes()
    {
        return $this->hasMany('Note');
    }

}
