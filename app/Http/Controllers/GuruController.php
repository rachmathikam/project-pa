<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Guru;
use DataTables;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $page = 'guru';
        $data = Guru::all();
        // dd($data);
        if($request->ajax()){
            return DataTables::of($data)
                ->addColumn('name', function($row){
                    return $row->name ;
                })
                ->addColumn('nip', function($row){
                    return $row->nip;
                })
                ->addColumn('action', function($row){
                    $button  = '';
                    $button .= '<a class="btn btn-xs btn-primary" href="'.route('guru.show',$row->id).'"><i class="fa-solid fa-eye"></i></a>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<a class="btn btn-xs btn-secondary" href="'.route('guru.edit',$row->id).'"><i class="fa-solid fa-pen"></i></a>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<a class="btn btn-xs btn-danger"javascript:void(0)" onclick="deleteItem(this)" data-name="'.$row->nama.'" data-id="'.$row->id.'"> <i class="fa-solid fa-trash"></i></a>';
                    return $button;
                })
                ->rawColumns(['action','deskripsi'])
                ->addIndexColumn()
                ->make(true);

            }
            return view('pages.guru.index',compact('data'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // return view('pages.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nip'  => 'required',
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:gurus',
            'password' => 'confirmed',
            'tempat_lahir' => 'nullable',
            'tanggal_lahir' => 'nullable',
            'jenis_kelamin' => 'required',
            'alamat' => 'nullable',
            'no_telp' => 'nullable',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($request->password);

        $data = Guru::create($input);

        if($data) {
            return response->json([
                'success'  => true,
                'message' => 'Guru berhasil ditambahkan'
            ]);
        } else {
            return response->json([
                'success'  => false,
                'message' => 'Guru gagal ditambahkan'
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Guru::find($id);

       return view('pages.guru.edit',compact('data'));
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
        $this->validate([
            'email'  => 'required|string|unique:gurus,email,'.$id,
            'nama' => 'required'

        ]);

        $validateData = $request->all();

        $data = Guru::find($id);

        $data->update($validateData);
        dd($data);
        if($data) {
            return response->json([
                'success'  => true,
                'message' => 'Guru berhasil diupdate'
            ]);
        } else {
            return response->json([
                'success'  => false,
                'message' => 'Guru gagal diupdate'
            ]);
        }

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
