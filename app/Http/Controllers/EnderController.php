<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ender;

class EnderController extends Controller
{
  public function index()
  {
      $datos=Ender::orderBy('cedula','DESC')
      ->get();

      return view('ender.index')
      ->with('datos', $datos);
  }
  public function create()
  {
    return View('ender.create');
  }
  public function store(Request $request)
  {
      $datos = new Ender;
      $datos->create($request->all());
      return redirect('ender');
  }
  public function edit($id)
  {
      $datos = Ender::find($id);

      return view('ender.edit')
      ->with('datos', $datos);
  }
  public function update(Request $request, $id)
   {
     $datos = Ender::FindOrFail($id);
     $input = $request->all();
     $result = $datos->fill($input)->save();
     return redirect('ender');
   }
   public function destroy($id)
   {
	      $datos = Ender::find($id);
        $datos->delete();
        return redirect()->back();
    }
}
