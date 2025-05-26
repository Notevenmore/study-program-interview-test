@extends('layouts.app')

@section('content')
  <form id="Add-Data" action="">
    @csrf
    <div>
      <label for="Name">Nama</label>
      <input id="Name" type="text" name="name">
    </div>
    <div>
      <label for="Name">Kode Program Studi</label>
      <input id="Name" type="text" name="code">
    </div>
    <div>
      <label for="Faculty">Fakultas</label>
      <select id="Faculty" name="faculty" id="" value="">
        <option selected disabled >Pilih Program Studi</option>
        @foreach($faculties as $faculty) 
          <option value="{{$faculty->id}}">{{$faculty->name}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit">Tambah Form</div>
  </form>

  <script>
    document.getElementById('Add-Data').addEventListener('submit', async function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        const response = await fetch('/api/study-programs', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: formData
        });

        const data = await response.json();
        if(!response.ok) {
          alert(data.message);
        } else {
          window.location.href = '/';
        }
    });
  </script>
@endsection 