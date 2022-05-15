@extends('layouts.app')

@section('title', 'Cobaaaa')

    @section('content')
        
        <div class="card">
            <div class="card-body">
                <pre>
                <h3> Nama Teman    : {{ $friend['nama'] }}</h3>
                <h3> No Telp Teman : {{ $friend['no_telp'] }}</h3>
                <h3> Alamat Teman  : {{ $friend['alamat'] }}</h3>
                </pre>
            </div>
        </div>

    @endsection