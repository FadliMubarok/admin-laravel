<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreMenuRequest;
use App\Http\Requests\Admin\UpdateMenuRequest;
use Auth;
use Bouncer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Silber\Bouncer\Database\Ability;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('menus_index')) {
            return abort(401);
        }        
                
        $menus = Menu::all();
        $dataTable = true;

        return view('admins.adminto-hor.menus.index', compact('menus', 'dataTable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('menus_create')) {
            return abort(401);
        }

        $parents = Menu::where('parent_id', null)->get();

        return view('admins.adminto-hor.menus.create', compact('parents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenuRequest $request)
    {
        if (! Gate::allows('menus_create')) {
            return abort(401);
        }

        $data = Menu::create([
            'parent_id' => isset($request->parent) ? $request->parent : null,
            'label' => $request->label,
            'url' => $request->url,
            'ikon' => $request->ikon,
            'type' => $request->type,
            'order' => isset($request->order) ? $request->order : 0
        ]);

        if ($data) {
            $dataPermission = [
                ['name' => strtolower(str_replace(" ", "_", $data->label)).'s_index', 'menu_id' => $data->id],
                ['name' => strtolower(str_replace(" ", "_", $data->label)).'s_create', 'menu_id' => null],
                ['name' => strtolower(str_replace(" ", "_", $data->label)).'s_update', 'menu_id' => null],
                ['name' => strtolower(str_replace(" ", "_", $data->label)).'s_delete', 'menu_id' => null],
            ];

            Ability::insert($dataPermission);
            $user = Auth::user();
            Bouncer::allow($user)->to($dataPermission[0]['name']);
        }

        return redirect()->route('admin.menus.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('menus_index')) {
            return abort(401);
        }

        $menu = Menu::findOrFail($id);        

        return view('admins.adminto-hor.menus.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('menus_update')) {
            return abort(401);
        }

        $menu = Menu::findOrFail($id);
        $parents = Menu::where('parent_id', null)->get();

        return view('admins.adminto-hor.menus.edit',  compact('menu', 'parents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMenuRequest $request, $id)
    {
        if (! Gate::allows('menus_update')) {
            return abort(401);
        }

        $menu = Menu::findOrFail($id);
        $menu->update([
            'parent_id' => (isset($request->parent)) ? $request->parent : null,
            'label' => $request->label,
            'url' => $request->url,
            'ikon' => $request->ikon,
            'type' => $request->type,
            'order' => (isset($request->order)) ? $request->order : 0
        ]);

        return redirect()->route('admin.menus.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('menus_delete')) {
            return abort(401);
        }

        $data = Menu::findOrFail($id)->delete();

        return redirect()->route('admin.menus.index')->with('success', 'Data Berhasil Disimpan');
    }
}
