<?php

class FileManager extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'files';

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
    protected $fillable = array();

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
    public static $rules = array(

    );

    /**
     * The error messages.
     *
     * @var mixed
     */
    public $errors;

}
