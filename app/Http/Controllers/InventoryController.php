<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Item;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Concat;
use Psr\Log\LogLevel;

use function PHPUnit\Framework\isEmpty;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data = Inventory::all();
        // dd($data);
        return view('cores.index', ['datas' =>  $data]);
    }

    public function transpage()
    {
        //

        $data = Inventory::all();
        // dd($data);
        return view('cores.transpage', ['datas' =>  $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cores.addItem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'quantity' => 'required|numeric',
        ]);

        $data = $request->all();

        $item = new Item;
        $item->name = $data['name'];
        $item->description = $data['description'];
        $item->quantity = $data['quantity'];
        $item->save();

        $loc_id = DB::table('locations')
            ->where('level', $data['level'])
            ->where('shelf', $data['shelf'])
            ->pluck('id')->first();

        $inventory = new Inventory;
        $inventory->item_id = $item->id;
        $inventory->loc_id = $loc_id;
        $inventory->user_id = $data['user_id'];
        $inventory->date_in = $data['date_in'];
        $inventory->date_out = $data['date_out'];
        $inventory->save();

        return redirect('/transpage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $data = Inventory::all();

        if (isEmpty($request)) {
            return view('cores.laporan', ['datas' =>  $data]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
