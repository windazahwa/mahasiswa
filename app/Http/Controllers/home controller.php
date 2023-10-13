public function edit(string $id)
{
    $mahasiswa=DB::table('mahasiswa')->where('id', $id)->get();
    return view('edit','mahasiswa'=>$mahasiswa);
}
public function update(Request $request)
{
DB::table('mahasiswa')->where('id',$Request->id)->update([
    'nama' => $request->nama,
    'umur' => $request->umur,
    'kota' => $request->kota
    ]);
    return redirect('/mahasiswa');
}
public function destory($id)
{
    DB::table('mahasiswa')->where('id',$id)->delete();
    return redirect('/mahasiswa');
}
}