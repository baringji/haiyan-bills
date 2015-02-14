<?php

class PaymentCenterController extends \BaseController {

    /**
     * Constructor
     *
     * @return Null
     */
    public function __construct() { }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('payment-centers.index');
    }

}
