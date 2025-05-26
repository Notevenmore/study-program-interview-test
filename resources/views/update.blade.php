@extends('layouts.app')

@section('content')
  <form id="Update-Data" action="">
    @csrf
    <div>
      <label for="Name">Nama</label>
      <input id="Name" type="text" name="name" value="{{$study_program->name}}">
    </div>
    <div>
      <label for="Name">Kode Program Studi</label>
      <input id="Name" type="text" name="code" value={{$study_program->code}}>
    </div>
    <div>
      <label for="Faculty">Fakultas</label>
      <select id="Faculty" name="faculty" id="" value="{{$study_program->faculty_id}}">
        @foreach($faculties as $faculty) 
          <option value="{{$faculty->id}}" @if($study_program->faculty_id == $faculty->id) selected @endif>{{$faculty->name}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit">Update Form</div>
  </form>

  <script>
    document.getElementById('Update-Data').addEventListener('submit', async function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        const response = await fetch("/api/study-programs/{{$study_program->id}}", {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: (() => {
              const form = new FormData(document.getElementById('Update-Data'));
              form.append('_method', 'PUT');
              return form;
            })()
        });

        const data = await response.json();
        if(!response.ok) {
          alert(data.message);
        } else {
          alert(data.message);
          window.location.href = '/';
        }
    });
  </script>
@endsection 