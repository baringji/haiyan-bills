<?php

class PaymentCenterController extends \BaseController {

    /**
     * The IoC Object container.
     *
     * @var IoC Object
     */
    protected $paymentCenter;

    /**
     * Constructor
     *
     * @return Null
     */
    public function __construct(PaymentCenter $paymentCenter)
    {
        $this->paymentCenter = $paymentCenter;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('payment-centers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('payment-centers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();

        if ( ! $this->paymentCenter->isValid($input)) {
            return Redirect::back()->withInput()->withErrors($this->paymentCenter->errors);
        }

        $data = array();

        $this->paymentCenter->fill($data)->save();

        return Redirect::route('paymentCenter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return View::make('payment-centers.show', array('paymentCenter' => $this->paymentCenter->find($id)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return View::make('payment-centers.edit', array('paymentCenter' => $this->paymentCenter->find($id)));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $paymentCenter = $this->paymentCenter->find($id);

        if ( ! $paymentCenter) {
            return Redirect::back()->withInput();
        }

        $input = Input::all();

        if ( ! $paymentCenter->isValid($input)) {
            return Redirect::back()->withInput()->withErrors($paymentCenter->errors);
        }

        $data = array();

        $paymentCenter->fill($data)->update();

        return Redirect::route('paymentCenter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->paymentCenter->destroy($id);

        return Redirect::route('paymentCenter.index');
    }

}
