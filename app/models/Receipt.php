<?php

class Receipt extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'receipts';

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
    protected $fillable = array('bill_id', 'amount');

    /**
     * The enable soft deletion of records.
     *
     * @var mixed
     */
    protected $softDelete = true;

    /**
     * The validation rules.
     *
     * @var mixed
     */
    public static $rules = array();

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
    public function isValid($data)
    {
        $validation = Validator::make($data, static::$rules);

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
        return $this->belongsTo('Bill');
    }

}
