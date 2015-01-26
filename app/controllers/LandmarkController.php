<?php

class LandmarkController extends \BaseController {

    /**
     * The IoC Object container.
     *
     * @var IoC Object
     */
    protected $landmark;

    /**
     * Constructor
     *
     * @return Null
     */
    public function __construct(Landmark $landmark)
    {
        $this->landmark = $landmark;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('landmarks.index', array('landmarks' => $this->landmark->all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('landmarks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();

        if ( ! $this->landmark->isValid($input)) {
            return Redirect::back()->withInput()->withErrors($this->landmark->errors);
        }

        $data = array();

        $this->landmark->fill($data)->save();

        return Redirect::route('landmark.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return View::make('landmarks.show', array('landmark' => $this->landmark->find($id)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return View::make('landmarks.edit', array('landmark' => $this->landmark->find($id)));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $landmark = $this->landmark->find($id);

        if ( ! $landmark) {
            return Redirect::back()->withInput();
        }

        $input = Input::all();

        if ( ! $landmark->isValid($input)) {
            return Redirect::back()->withInput()->withErrors($landmark->errors);
        }

        $data = array();

        $landmark->fill($data)->update();

        return Redirect::route('landmark.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->landmark->destroy($id);

        return Redirect::route('landmark.index');
    }

}
