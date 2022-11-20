<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\missing_item_status;
use Illuminate\Http\Request;

class missing_item_statusController extends Controller
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
            $missing_item_status = missing_item_status::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $missing_item_status = missing_item_status::latest()->paginate($perPage);
        }

        return view('admin.missing_item_status.index', compact('missing_item_status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.missing_item_status.create');
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
        
        missing_item_status::create($requestData);

        return redirect('admin/missing_item_status')->with('flash_message', 'missing_item_status added!');
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
        $missing_item_status = missing_item_status::findOrFail($id);

        return view('admin.missing_item_status.show', compact('missing_item_status'));
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
        $missing_item_status = missing_item_status::findOrFail($id);

        return view('admin.missing_item_status.edit', compact('missing_item_status'));
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
        
        $missing_item_status = missing_item_status::findOrFail($id);
        $missing_item_status->update($requestData);

        return redirect('admin/missing_item_status')->with('flash_message', 'missing_item_status updated!');
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
        missing_item_status::destroy($id);

        return redirect('admin/missing_item_status')->with('flash_message', 'missing_item_status deleted!');
    }
}
