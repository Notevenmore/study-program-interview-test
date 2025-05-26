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
        <td>
          <a href="{{route('study-program.edit', $study_program->id)}}" class="bg-green-600 px-3 py-1 rounded-md text-white">update</a>
          <button class="delete bg-red-600 px-3 py-1 rounded-md text-white" aria-valuenow="{{$study_program->id}}">delete</button>
        </td>
      </tr>
    @endforeach
  </table>
  <a href="{{route('study-program.create')}}"class="w-max h-max px-3 py-1 text-green">Tambah</div>
  <script>
    for(const deleteButton of document.getElementsByClassName('delete')) {
      deleteButton.addEventListener('click', async (e) => {
        const confirmDelete = confirm('Apakah anda yakin?');
        if(confirmDelete) {
          const response = await fetch(`/api/study-programs/${e.target.getAttribute('aria-valuenow')}`, {
            method: 'DELETE',
            headers: {
              'Accept': 'application/json',
            }
          })
  
          const data = await response.json();
          if(!response.ok) {
            alert(data.message);
          } else {
            alert(data.message);
            window.location.href = '/';
          }
        }
      })
    }
  </script>
@endsection 