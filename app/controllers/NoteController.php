<?php

class NoteController extends \BaseController {

    /**
     * The IoC Object container.
     *
     * @var IoC Object
     */
    protected $note;

    /**
     * Constructor
     *
     * @return Null
     */
    public function __construct(Note $note)
    {
        $this->note = $note;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('notes.index', array('notes' => $this->note->all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();

        if ( ! $this->note->isValid($input)) {
            return Redirect::back()->withInput()->withErrors($this->note->errors);
        }

        $data = array();

        $this->note->fill($data)->save();

        return Redirect::route('note.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return View::make('notes.show', array('note' => $this->note->find($id)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return View::make('notes.edit', array('note' => $this->note->find($id)));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $note = $this->note->find($id);

        if ( ! $note) {
            return Redirect::back()->withInput();
        }

        $input = Input::all();

        if ( ! $note->isValid($input)) {
            return Redirect::back()->withInput()->withErrors($note->errors);
        }

        $data = array();

        $note->fill($data)->update();

        return Redirect::route('note.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->note->destroy($id);

        return Redirect::route('note.index');
    }

}
