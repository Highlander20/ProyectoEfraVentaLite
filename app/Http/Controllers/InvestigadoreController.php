<?php

namespace App\Http\Controllers;

use App\Models\Investigadore;
use Illuminate\Http\Request;

/**
 * Class InvestigadoreController
 * @package App\Http\Controllers
 */
class InvestigadoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigadores = Investigadore::paginate();

        return view('investigadore.index', compact('investigadores'))
            ->with('i', (request()->input('page', 1) - 1) * $investigadores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $investigadore = new Investigadore();
        return view('investigadore.create', compact('investigadore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Investigadore::$rules);

        $investigadore = Investigadore::create($request->all());

        return redirect()->route('investigadores.index')
            ->with('success', 'Investigadore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $investigadore = Investigadore::find($id);

        return view('investigadore.show', compact('investigadore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $investigadore = Investigadore::find($id);

        return view('investigadore.edit', compact('investigadore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Investigadore $investigadore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investigadore $investigadore)
    {
        request()->validate(Investigadore::$rules);

        $investigadore->update($request->all());

        return redirect()->route('investigadores.index')
            ->with('success', 'Investigadore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $investigadore = Investigadore::find($id)->delete();

        return redirect()->route('investigadores.index')
            ->with('success', 'Investigadore deleted successfully');
    }
}
