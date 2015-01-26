<?php

class ReceiptController extends \BaseController {

    /**
     * The IoC Object container.
     *
     * @var IoC Object
     */
    protected $receipt;

    /**
     * Constructor
     *
     * @return Null
     */
    public function __construct(Receipt $receipt)
    {
        $this->receipt = $receipt;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('receipts.index', array('receipts' => $this->receipt->all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('receipts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();

        if ( ! $this->receipt->isValid($input)) {
            return Redirect::back()->withInput()->withErrors($this->receipt->errors);
        }

        $data = array();

        $this->receipt->fill($data)->save();

        return Redirect::route('receipt.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return View::make('receipts.show', array('receipt' => $this->receipt->find($id)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return View::make('receipts.edit', array('receipt' => $this->receipt->find($id)));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $receipt = $this->receipt->find($id);

        if ( ! $receipt) {
            return Redirect::back()->withInput();
        }

        $input = Input::all();

        if ( ! $receipt->isValid($input)) {
            return Redirect::back()->withInput()->withErrors($receipt->errors);
        }

        $data = array();

        $receipt->fill($data)->update();

        return Redirect::route('receipt.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->receipt->destroy($id);

        return Redirect::route('receipt.index');
    }

}
