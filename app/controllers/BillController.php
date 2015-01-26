<?php

class BillController extends \BaseController {

    /**
     * The IoC Object container.
     *
     * @var IoC Object
     */
    protected $bill;

    /**
     * Constructor
     *
     * @return Null
     */
    public function __construct(Bill $bill)
    {
        $this->bill = $bill;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('bills.index', array('bills' => $this->bill->all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('bills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();

        if ( ! $this->bill->isValid($input)) {
            return Redirect::back()->withInput()->withErrors($this->bill->errors);
        }

        $data = array();

        $this->bill->fill($data)->save();

        return Redirect::route('bill.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return View::make('bills.show', array('bill' => $this->bill->find($id)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return View::make('bills.edit', array('bill' => $this->bill->find($id)));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $bill = $this->bill->find($id);

        if ( ! $bill) {
            return Redirect::back()->withInput();
        }

        $input = Input::all();

        if ( ! $bill->isValid($input)) {
            return Redirect::back()->withInput()->withErrors($bill->errors);
        }

        $data = array();

        $bill->fill($data)->update();

        return Redirect::route('bill.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->bill->destroy($id);

        return Redirect::route('bill.index');
    }

}
