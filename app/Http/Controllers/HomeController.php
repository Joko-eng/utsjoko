<?php

namespace App\Http\Controllers;

use App\Models\bunga;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function index1() : View
    {
        $bungas = bunga::get();
        return view('home', compact('bungas'));
    }
    public function index2() : View
    {
        $bungas = bunga::get();
        return view('homeuser', compact('bungas'));
    }

    public function create() : View
    {
        return view ('create');
    }

    public function store(Request $request) : RedirectResponse
    {
    $this->validate($request,[
        'nama' => 'required',
        'stok' => 'required',
        'harga' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->storeAs('images', $imageName, 'public');
    } else {
        $imageName = null; // No image uploaded
    }

    DB::table('bungas')->insert([
        'nama' => $request->nama,
        'stok' => $request->stok,
        'harga' => $request->harga,
        'image' => $imageName,
    ]);

    return redirect()->route('bunga.home')->with(['succes' => 'Data Berhasil Disimpan']);
    }

        public function edit(string $id) : View
    {
        $bungas = bunga::findOrFail($id);

        return view('edit', compact('bungas'));
    }

    public function destroy(string $id) : RedirectResponse
    {
        $bungas = bunga::findOrFail($id);
        $bungas->delete();
        return redirect()->route('bunga.home')->with(['succes'=>'Data Berhasil Dihapus']);
    }

    public function update(Request $request, $id) :RedirectResponse
    {
    $this->validate($request, [
        'nama' => 'required',
        'stok' => 'required',
        'harga' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
     ]);

    $bungas = bunga::findOrFail($id);
    
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($bungas->image) {
            Storage::delete('public/images/' . $bungas->image);
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('images', $imageName, 'public');

        $bungas->image = $imageName; // Update the image file name in the database
    }

    $bungas->nama = $request->nama;
    $bungas->stok = $request->stok;
    $bungas->harga = $request->harga;
    $bungas->save();
    
    return redirect()->route('bunga.home')->with('success', 'Bunga berhasil diperbarui.');
    }

}
