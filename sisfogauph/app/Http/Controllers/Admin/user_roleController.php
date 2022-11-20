<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\user_role;
use Illuminate\Http\Request;

class user_roleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $user_role = user_role::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $user_role = user_role::latest()->paginate($perPage);
        }

        return view('admin.user_role.index', compact('user_role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.user_role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        user_role::create($requestData);

        return redirect('admin/user_role')->with('flash_message', 'user_role added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $user_role = user_role::findOrFail($id);

        return view('admin.user_role.show', compact('user_role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $user_role = user_role::findOrFail($id);

        return view('admin.user_role.edit', compact('user_role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $user_role = user_role::findOrFail($id);
        $user_role->update($requestData);

        return redirect('admin/user_role')->with('flash_message', 'user_role updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        user_role::destroy($id);

        return redirect('admin/user_role')->with('flash_message', 'user_role deleted!');
    }
}
