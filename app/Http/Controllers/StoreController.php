<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

/**
 * Class StoreController
 * @package App\Http\Controllers
 */
class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::paginate();

        return view('store.index', compact('stores'))
            ->with('i', (request()->input('page', 1) - 1) * $stores->perPage());
    }
    public function homestore() {
        $stores = Store::paginate();
        return view('store',compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $store = new Store();
        return view('store.create', compact('store'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Store::$rules);

        $store = Store::create($request->all());

        return redirect()->route('stores.index')
            ->with('success', 'Store created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $store = Store::find($id);

        return view('store.show', compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $store = Store::find($id);

        return view('store.edit', compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Store $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        request()->validate(Store::$rules);

        $store->update($request->all());

        return redirect()->route('stores.index')
            ->with('success', 'Store updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $store = Store::find($id)->delete();

        return redirect()->route('stores.index')
            ->with('success', 'Store deleted successfully');
    }
}
