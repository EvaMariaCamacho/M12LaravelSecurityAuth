<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

/**
 * Class ResultController
 * @package App\Http\Controllers
 */
class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::paginate();

        return view('result.index', compact('results'))
            ->with('i', (request()->input('page', 1) - 1) * $results->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $result = new Result();
        return view('result.create', compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Result::$rules);

        $result = Result::create($request->all());

        return redirect()->route('result.index')
            ->with('success', 'Result created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Result::find($id);

        return view('result.show', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Result::find($id);

        return view('result.edit', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Result $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        request()->validate(Result::$rules);

        $result->update($request->all());

        return redirect()->route('result.index')
            ->with('success', 'Result updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $result = Result::find($id)->delete();

        return redirect()->route('result.index')
            ->with('success', 'Result deleted successfully');
    }
}
