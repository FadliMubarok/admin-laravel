<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreAbilitiesRequest;
use App\Http\Requests\Admin\UpdateAbilitiesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Silber\Bouncer\Database\Ability;

class AbilitiesController extends Controller
{
    /**
     * Display a listing of Abilities.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('abilities_index')) {
            return abort(401);
        }

        $abilities = Ability::all();
        $dataTable = true;

        return view('admins.adminto-hor.abilities.index', compact('abilities', 'dataTable'));
    }

    /**
     * Show the form for creating new Ability.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('abilities_create')) {
            return abort(401);
        }
        return view('admins.adminto-hor.abilities.create');
    }

    /**
     * Store a newly created Ability in storage.
     *
     * @param  \App\Http\Requests\StoreAbilitiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAbilitiesRequest $request)
    {
        if (! Gate::allows('abilities_create')) {
            return abort(401);
        }
        Ability::create($request->all());

        return redirect()->route('admins.adminto-hor.abilities.index')->with('success', 'Data Berhasil Disimpan');
    }


    /**
     * Show the form for editing Ability.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('abilities_update')) {
            return abort(401);
        }
        $ability = Ability::findOrFail($id);

        return view('admins.adminto-hor.abilities.edit', compact('ability'));
    }

    /**
     * Update Ability in storage.
     *
     * @param  \App\Http\Requests\UpdateAbilitiesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAbilitiesRequest $request, $id)
    {
        if (! Gate::allows('abilities_update')) {
            return abort(401);
        }
        $ability = Ability::findOrFail($id);
        $ability->update($request->all());

        return redirect()->route('admin.abilities.index')->with('success', 'Data Berhasil Disimpan');
    }

    public function show(Ability $ability)
    {
        if (! Gate::allows('abilities_index')) {
            return abort(401);
        }

        return view('admins.adminto-hor.abilities.show', compact('ability'));
    }

    /**
     * Remove Ability from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('abilities_delete')) {
            return abort(401);
        }
        $ability = Ability::findOrFail($id);
        $ability->delete();

        return redirect()->route('admin.abilities.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Delete all selected Ability at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('abilities_delete')) {
            return abort(401);
        }
        Ability::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
