<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Note extends Eloquent {

    use SoftDeletingTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'notes';

    /**
     * The primary key field.
     *
     * @var mixed
     */
    protected $primaryKey = 'id';

    /**
     * Fillable fields.
     *
     * @var array
     */
    protected $fillable = array('name', 'details', 'user_id');

    /**
     * The enable soft deletion of records.
     *
     * @var mixed
     */
    protected $dates = ['deleted_at'];

    /**
     * The error messages.
     *
     * @var mixed
     */
    public $errors;

    /**
     * The validation method.
     *
     * @param  array $data
     * @param  array $rules
     * @return boolean
     */
    public function isValid($data, $rules, $attributes = array())
    {
        $validation = Validator::make($data, $rules);

        $validation->setAttributeNames($attributes);

        if ($validation->passes()) {
            return true;
        }

        $this->errors = $validation->messages();

        return false;
    }

    /**
     * The users relationship.
     *
     * @return object
     */
    public function users()
    {
        return $this->belongsTo('User');
    }

}
