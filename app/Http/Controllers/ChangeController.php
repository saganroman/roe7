<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

use App\Http\Requests;
use App\Change;
use App\Cartridge;
use App\Branch;
use App\Service;
use DB;

class ChangeController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
//		$changes = Change::orderBy('date_get', 'desc')->get();
		$changes = Change::all();
		return view('changes.change')->withChanges($changes);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$branches = Branch::all();
		return view('changes.changeAdd')->withBranches($branches);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$change = new Change;
		$change->date_get = $request->date_get;
		$change->number_get = Cartridge::where('roe_number', $request->number_get)->get()[0]['id'];
		$change->date_give = $request->date_give;
		$change->number_give = Cartridge::where('roe_number',
			$request->number_get)->get()[0]['id'] ? Cartridge::where('roe_number',
			$request->number_get)->get()[0]['id'] : 0;
		$change->branch_id = $request->branch_id;
		$change->employee = $request->employee;
		$change->note = $request->note;
		$change->save();
		$service = new Service();
		$service->cartridge_id = Cartridge::where('roe_number', $request->number_get)->get()[0]['id'];
		$service->date_give = $request->date_give;
		$service->save();
		return redirect('/');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public
	function show(
		$id
	) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public
	function edit(
		$id
	) {
		$data = Change::find($id);
		$branches = Branch::all();
		return view('changes.changeEdit')->withData($data)->withBranches($branches);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public
	function update(
		Request $request,
		$id
	) {
		$change = Change::find($id);
		$change->date_get = $request->date_get;
		$change->number_get = $request->number_get;
		$change->date_give = $request->date_give;
		$change->number_give = $request->number_give;
		$change->branch_id = $request->branch_id;
		$change->employee = $request->employee;
		$change->note = $request->note;
		$change->save();
		return redirect('/');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Responsefsd
	 */
	public
	function destroy(
		$id
	) {
		Change::destroy($id);
		return redirect('/');
	}

	public function autocomplete($number)
	{
		$auto = [];
		//$data = Change::all();
		$data = Cartridge::where('roe_number', 'like', $number . '%')->get();
		foreach ($data as $item) {
			$auto[] = $item->roe_number;

		}
		print_r(json_encode($auto));
	}

}
