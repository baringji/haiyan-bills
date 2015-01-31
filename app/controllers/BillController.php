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
        if (Auth::user()->user_type < 2) {
            return View::make('bills.index', array('bills' => $this->bill->all()));
        } else {
            return View::make('bills.index', array('bills' => $this->bill->where('user_id', Auth::user()->id)->get()));
        }
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
        $rules = array(
            'name'         => 'required',
            'due_date'     => 'required|date',
            'period_start' => 'required|date',
            'period_end'   => 'required|date',
            'amount'       => 'required|numeric',
            'details'      => 'required'
        );

        $input = Input::all();

        if ( ! $this->bill->isValid($input, $rules)) {
            return Redirect::back()->withInput()->withErrors($this->bill->errors);
        }

        $data = array(
            'name'         => $input['name'],
            'due_date'     => $input['due_date'],
            'period_start' => $input['period_start'],
            'period_end'   => $input['period_end'],
            'amount'       => $input['amount'],
            'details'      => $input['details'],
            'user_id'      => Auth::user()->id,
            'status'       => 'O'
        );

        $this->bill->fill($data)->save();

        return Redirect::route('bills.index');
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

        $rules = array(
            'name'         => 'required',
            'due_date'     => 'required|date',
            'period_start' => 'required|date',
            'period_end'   => 'required|date',
            'amount'       => 'required|numeric',
            'details'      => 'required'
        );

        $input = Input::all();

        if ( ! $this->bill->isValid($input, $rules)) {
            return Redirect::back()->withInput()->withErrors($this->bill->errors);
        }

        $data = array(
            'name'         => $input['name'],
            'due_date'     => $input['due_date'],
            'period_start' => $input['period_start'],
            'period_end'   => $input['period_end'],
            'amount'       => $input['amount'],
            'details'      => $input['details'],
            'status'       => $input['status']
        );

        $bill->fill($data)->save();

        return Redirect::route('bills.index');
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

        return Redirect::route('bills.index');
    }

}
