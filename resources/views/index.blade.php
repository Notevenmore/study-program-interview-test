@extends('layouts.app')

@section('content')
  <h1 class="font-bold text-black text-3xl">Daftar Program Studi</h1>
  <table>
    <tr class="text-center">
      <th>Kode Program Studi</th>
      <th>Nama</th>
      <th>Nama Singkat</th>
      <th>Fakultas</th>
    </tr>
    @foreach($study_programs as $study_program)
      <tr class="text-center">
        <td>{{$study_program->code}}</td>
        <td>{{$study_program->name}}</td>
        <td>{{$study_program->short_name}}</td>
        <td>{{$study_program->faculty->name}}</td>
      </tr>
    @endforeach
  </table>
  <a href="{{route('study-program.create')}}"class="w-max h-max px-3 py-1 text-green">Tambah</div>
@endsection 