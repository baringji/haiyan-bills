<?php

class FileController extends \BaseController {

    /**
     * The IoC Object container.
     *
     * @var IoC Object
     */
    protected $file;

    /**
     * Constructor
     *
     * @return Null
     */
    public function __construct(FileManager $file)
    {
        $this->file = $file;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('files.index', array('files' => $this->file->all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();

        if ( ! $this->file->isValid($input)) {
            return Redirect::back()->withInput()->withErrors($this->file->errors);
        }

        $data = array();

        $this->file->fill($data)->save();

        return Redirect::route('file.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return View::make('files.show', array('file' => $this->file->find($id)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return View::make('files.edit', array('file' => $this->file->find($id)));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $file = $this->file->find($id);

        if ( ! $file) {
            return Redirect::back()->withInput();
        }

        $input = Input::all();

        if ( ! $file->isValid($input)) {
            return Redirect::back()->withInput()->withErrors($file->errors);
        }

        $data = array();

        $file->fill($data)->update();

        return Redirect::route('file.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->file->destroy($id);

        return Redirect::route('file.index');
    }

}
