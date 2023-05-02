<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;

/**
 * Class MarketController
 * @package App\Http\Controllers
 */
class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $markets = Market::paginate();

        return view('market.index', compact('markets'))
            ->with('i', (request()->input('page', 1) - 1) * $markets->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $market = new Market();
        return view('market.create', compact('market'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Market::$rules);

        $market = Market::create($request->all());

        return redirect()->route('markets.index')
            ->with('success', 'Market created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $market = Market::find($id);

        return view('market.show', compact('market'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $market = Market::find($id);

        return view('market.edit', compact('market'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Market $market
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Market $market)
    {
        request()->validate(Market::$rules);

        $market->update($request->all());

        return redirect()->route('markets.index')
            ->with('success', 'Market updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $market = Market::find($id)->delete();

        return redirect()->route('markets.index')
            ->with('success', 'Market deleted successfully');
    }
}
