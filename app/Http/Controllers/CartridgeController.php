<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cartridge;

class CartridgeController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$cartridges = Cartridge::all();
		return view('cartridges')->withCartridges($cartridges);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('cartridgeAdd');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$cartridge = new Cartridge;
		$cartridge->vendor = $request->vendor;
		$cartridge->model = $request->model;
		$cartridge->roe_number = $request->roe_number;
		$cartridge->state_id = $request->state_id;
		$cartridge->note = $request->note;
		$cartridge->save();
		return redirect('/cartridges');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$data = Cartridge::find($id);
		return view('cartridgeEdit')->withData($data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$cartridge = Cartridge::find($id);
		$cartridge->vendor = $request->vendor;
		$cartridge->model = $request->model;
		$cartridge->roe_number = $request->roe_number;
		$cartridge->state_id = $request->state_id;
		$cartridge->note = $request->note;
		$cartridge->save();
		return redirect('/cartridges');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		Cartridge::destroy($id);
		return redirect('/cartridges');
	}
}
