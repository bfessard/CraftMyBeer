<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMarchandiseRequest;
use App\Models\Marchandise;
use Illuminate\Http\Request;
use App\Repositories\MarchandiseRepository;

class MarchandiseController extends Controller
{

    protected $marchandise;

    public function __construct(MarchandiseRepository $marchandise)
    {
        $this->marchandiseRepository = $marchandise;
    }

    public function index()
    {
        $marchandise = Marchandise::all();


        return view('marchandises.index',compact('marchandise'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $course_id=$request->input('course_id');
        return view('marchandises.create')->with('course_id',$course_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMarchandiseRequest $request)
    {
        $inputs = array_merge($request->all(), ['user_id' => $request->user()->id]);

        $this->marchandiseRepository->store($inputs);
        return redirect(route('marchandise.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marchandise = $this->marchandiseRepository->getById($id);
        return view('marchandises.show',compact('marchandise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
