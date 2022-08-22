<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Guru,Role};
use DataTables;
use DB;

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
        $data = Guru::with('role')->get();
        $dataCount = $data->count();
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
                    $button .= '<a href="'.route('guru.show',$row->id).'"class="btn btn-xs btn-primary" data-toggle="modal" data-id="'.$row->id.'"><i class="fa fa-eye"></i></a>';
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
            return view('pages.guru.index',compact('data','dataCount'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = Guru::with('role')->get();
        $role = Role::all();
        $jenis_kelamin = DB::table('genders')->get();
        // dd($jenis_kelamin);
        return view('pages.guru.create',compact('role','jenis_kelamin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *

     *
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            'nip'  => 'required',
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:gurus',
            'password' => 'required|min:5',
            'tempat_lahir' => 'nullable',
            'tanggal_lahir' => 'nullable',
            'jenis_kelamin' => 'required',
            'alamat' => 'nullable',
            'no_telp' => 'nullable',
            'role_id' =>'required',
            'gender_id' => 'required',
        ],
        [
            'jenis_kelamin.required' => 'Jenis kelamin harus terisi'
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($request->password);

        $data = Guru::create([
            'nip'  => $input['nip'],
            'name' => $input['name'],
            'email' => $input['email'],
            'tempat_lahir' => $input['tempat_lahir'],
            'tanggal_lahir' => $input['tanggal_lahir'],
            'gender_id' => $input['gender_id'],
            'alamat' => $input['alamat'],
            'no_telp' => $input['no_telp'],
            'role_id' => 2,
            // 'password' => Hash::make($request->password)
        ]);

        // return redirect()->route('guru.index')->with('success','data berhasil ditambakan');
        // dd($data);
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
    public function getGender(Request $request) {
        $search = $request->search;

        if($search == ''){
            $gander = DB::table('ganders')->where('id','gander')->get();
            // dd($gender);
        }else {
            $gender = DB::table('ganders')->where('gender','like','%' .$search. '%')->latest()->get();
        }

        $response = array();
        foreach($gender as $data) {
            $response[] = array(
                "id" => $data->id,
                "text" => $data->gender
            );
        }
        return response()->json($response);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::all();
        $data = Guru::find($id);
        return view('pages.guru.show',compact('data','role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::all();
        $data = Guru::find($id);
       return view('pages.guru.edit',compact('data','role'));
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
        // dd($data);
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
        $item = Guru::findOrFail($id);
        $item->delete();
        if($item){
            //redirect dengan pesan sukses
            return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('guru.index')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
