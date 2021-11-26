@extends('layouts.app')

@section('title', 'Friends')

@section('content')
<a href="/friends/create" button type="button" class="btn btn-primary btn-sm mb-3 mt-5">Tambah Teman</a></button>
@foreach($friends as $friend)

<div class="card text-dark bg-light mb-4" style="width: 18rem;">
  <div class="card-body">
    <ul class="list-group list-group-flush">
      <a href="/friends/{{ $friend['id'] }}" li class="list-group-item">{{ $friend['nama'] }}</a></li>
      <li class="list-group-item">no telepon: {{ $friend['no_tlp'] }}</li>
      <li class="list-group-item">alamat: {{ $friend['alamat'] }}</li>
    </ul>
      <div class="card-body">
        <a href="/friends/{{ $friend['id'] }}/edit" class="card-link btn btn-outline-warning btn-sm mt-2 mb-2">Edit Teman</a>
          <form action="/friends/{{ $friend['id']}}" method="POST">
          @csrf
          @method('DELETE')
          <button class="card-link btn btn-outline-danger btn-sm mt-2 mb-2">Delete Teman</button>
          </form>
      </div>
    </div>
  </div>

@endforeach
<div>
 {{ $friends->links() }}
</div>
 @endsection
