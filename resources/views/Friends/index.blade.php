@extends('layouts.app')

@section('title', 'Friends')

    @section('content')
      <a href="/friends/create" class="btn btn-primary mb-2">Tambah Teman</a>
        
        @foreach ($friends as $friend)
            
        <div class="card mt-2 mb-2" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><a href="/friends/{{ $friend['id'] }}" class="text-decoration-none">{{ $friend['nama'] }}</a></h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_telp'] }}</h6>
              <p class="card-text">{{ $friend['alamat'] }}</p>
              <a href="/friends/{{ $friend['id'] }}/edit" class="card-link btn btn-warning mb-1">Edit Teman</a>
              <form action="/friends/{{ $friend['id'] }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="card-link btn btn-danger" onclick="return confirm(`Apakah Anda Yakin Ingin Menghapus Data {{ $friend['nama'] }}`)">Delete Teman</button>
              </form>
            </div>
          </div>

        @endforeach
        
        <div class="">{{ $friends->links()}}</div>

@endsection 