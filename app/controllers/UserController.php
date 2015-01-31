<?php

class UserController extends \BaseController {

    /**
     * The IoC Object container.
     *
     * @var IoC Object
     */
    protected $user;

    /**
     * Constructor
     *
     * @return Null
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('users.index', array('users' => $this->user->all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $rules = array(
            'user_name'  => 'required|alpha_num|unique:users,user_name',
            'last_name'  => 'required',
            'first_name' => 'required',
            'email'      => 'required|email|unique:users,email',
            'password'   => 'sometimes|required|alpha_num|min:8'
        );

        $input = Input::all();

        if ( ! $this->user->isValid($input, $rules)) {
            return Redirect::back()->withInput()->withErrors($this->user->errors);
        }

        $this->user->user_type   = $input['user_type'];
        $this->user->first_name  = $input['first_name'];
        $this->user->last_name   = $input['last_name'];
        $this->user->middle_name = $input['middle_name'];
        $this->user->email       = $input['email'];
        $this->user->user_name   = $input['user_name'];
        $this->user->password    = Hash::make($input['password']);
        $this->user->address     = $input['address'];
        $this->user->status      = 'A';

        $this->user->save();

        return Redirect::route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return View::make('users.show', array('user' => $this->user->find($id)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return View::make('users.edit', array('user' => $this->user->find($id)));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $user = $this->user->find($id);

        if ( ! $user) {
            return Redirect::back()->withInput();
        }

        $rules = array(
            'user_name'  => 'required|alpha_num|unique:users,user_name,' . $user->id . ',id',
            'last_name'  => 'required',
            'first_name' => 'required',
            'email'      => 'required|email|unique:users,email,' . $user->id . ',id',
            'password'   => 'sometimes|required|alpha_num|min:8'
        );

        $input = Input::all();

        if ( ! $user->isValid($input, $rules)) {
            return Redirect::back()->withInput()->withErrors($user->errors);
        }

        $user->user_type   = $input['user_type'];
        $user->first_name  = $input['first_name'];
        $user->last_name   = $input['last_name'];
        $user->middle_name = $input['middle_name'];
        $user->email       = $input['email'];
        $user->user_name   = $input['user_name'];
        $user->password    = Hash::make($input['password']);
        $user->address     = $input['address'];
        $user->status      = $input['status'];

        $user->save();

        return Redirect::route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->user->destroy($id);

        return Redirect::route('users.index');
    }

}
