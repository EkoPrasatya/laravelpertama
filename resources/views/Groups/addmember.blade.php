@extends('layouts.app')

@section('title', 'Groups')

    @section('content')
        
    <form action="/groups/addmember" method="POST">
      @csrf
      <div class="form-group">
        <label for="nama" class="form-label">Nama Teman</label>
        <select class="form-select" aria-label="Default select example">
          <option selected>Pilih teman untuk di masukan ke group</option>
          @foreach ($friend as $f)
          <option value="{{$f->id}}">{{$f->nama}}</option>
          @endforeach
        </select>
      </div>
     
      <button type="submit" class="btn btn-info">Tambah ke grup</button>
    </form>
        
@endsection 