<?php

class ReceiptController extends \BaseController {

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
        if (Auth::user()->user_type < 2) {
            return View::make('receipts.index', array('bills' => $this->bill->all()));
        } else {
            return View::make('receipts.index', array('bills' => User::find(Auth::user()->id)->bills));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if (Auth::user()->user_type < 2) {
            return View::make('receipts.create', array('bills' => $this->bill->all()));
        } else {
            return View::make('receipts.create', array('bills' => User::find(Auth::user()->id)->bills));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $rules = array(
            'bill'   => 'required',
            'amount' => 'required|numeric'
        );

        $input = Input::all();

        $receipt = new Receipt;

        if ( ! $receipt->isValid($input, $rules)) {
            return Redirect::back()->withInput()->withErrors($receipt->errors);
        }

        $data = array(
            'bill_id' => $input['bill'],
            'amount'  => $input['amount'],
        );

        $receipt->fill($data)->save();

        return Redirect::route('receipts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return View::make('receipts.show', array('bill' => $this->bill->find($id)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        if (Auth::user()->user_type < 2) {
            return View::make('receipts.edit', array(
                'bills'   => $this->bill->all(),
                'receipt' => Receipt::find($id)
            ));
        } else {
            return View::make('receipts.edit', array(
                'bills'   => User::find(Auth::user()->id)->bills,
                'receipt' => Receipt::find($id)
            ));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $rules = array(
            'bill'   => 'required',
            'amount' => 'required|numeric'
        );

        $input = Input::all();

        $receipt = Receipt::find($id);

        if ( ! $receipt->isValid($input, $rules)) {
            return Redirect::back()->withInput()->withErrors($receipt->errors);
        }

        $data = array(
            'bill_id' => $input['bill'],
            'amount'  => $input['amount'],
        );

        $receipt->fill($data)->save();

        return Redirect::route('receipts.show', array($input['bill']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $receipt = new Receipt;

        $bill = $receipt->find($id);

        $receipt->destroy($id);

        return Redirect::route('receipts.show', array($bill->bill_id));
    }

}
