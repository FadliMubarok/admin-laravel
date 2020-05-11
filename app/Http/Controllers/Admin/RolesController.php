<?php

namespace App\Http\Controllers\Admin;

use Silber\Bouncer\Database\Ability;
use Silber\Bouncer\Database\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRolesRequest;
use App\Http\Requests\Admin\UpdateRolesRequest;

class RolesController extends Controller
{
    /**
     * Display a listing of Role.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('roles_index')) {
            return abort(401);
        }

        $roles = Role::all();
        $dataTable = true;

        return view('admins.adminto-hor.roles.index', compact('roles', 'dataTable'));
    }

    /**
     * Show the form for creating new Role.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('roles_create')) {
            return abort(401);
        }
        $abilities = Ability::get()->pluck('name', 'name');

        return view('admins.adminto-hor.roles.create', compact('abilities'));
    }

    /**
     * Store a newly created Role in storage.
     *
     * @param  \App\Http\Requests\StoreRolesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRolesRequest $request)
    {
        if (! Gate::allows('roles_create')) {
            return abort(401);
        }
        $role = Role::create($request->all());
        $role->allow($request->input('abilities'));

        return redirect()->route('admin.roles.index')->with('success', 'Data Berhasil Disimpan');
    }


    /**
     * Show the form for editing Role.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('roles_update')) {
            return abort(401);
        }
        $abilities = Ability::get()->pluck('name', 'name');

        $role = Role::findOrFail($id);

        return view('admins.adminto-hor.roles.edit', compact('role', 'abilities'));
    }

    /**
     * Update Role in storage.
     *
     * @param  \App\Http\Requests\UpdateRolesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRolesRequest $request, $id)
    {
        if (! Gate::allows('roles_update')) {
            return abort(401);
        }
        $role = Role::findOrFail($id);
        $role->update($request->all());
        foreach ($role->getAbilities() as $ability) {
            $role->disallow($ability->name);
        }
        $role->allow($request->input('abilities'));

        return redirect()->route('admin.roles.index')->with('success', 'Data Berhasil Disimpan');
    }

    public function show(Role $role)
    {
        if (! Gate::allows('roles_index')) {
            return abort(401);
        }

        $role->load('abilities');

        return view('admins.adminto-hor.roles.show', compact('role'));
    }

    /**
     * Remove Role from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('roles_delete')) {
            return abort(401);
        }
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('admin.roles.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Delete all selected Role at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('roles_delete')) {
            return abort(401);
        }
        Role::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
