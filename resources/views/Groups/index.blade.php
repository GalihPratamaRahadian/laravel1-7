@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<a href="/groups/create" button type="button" class="card-link btn btn-primary btn-sm mb-3 mt-3">Tambah Group</a></button>
@foreach($groups as $group)

<div class="card" style="width: 18rem;">
  <div class="card-body bg-light mb-3 mt-3">
    <h3><a href="/groups/{{ $group['id'] }}" class="card-title">{{ $group['name'] }}</a></h3>
    <p class="card-text">Deskripsi grup: {{ $group['description'] }}</p>
    <hr>
    <a href="/groups/addmember/{{$group['id']}}"button type="button" class="card-link btn btn-outline-primary btn-sm mb-3 mt-3">Tambah Anggota Teman</a></button>
    
    <ul class="list-group">
    @foreach($group->friends as $friend)
      <li class="list-group-item d-flex justify-content-between align-items-center">
      {{$friend->nama}}
      <form action="/groups/deleteaddmember/{{ $friend->id }}" method="POST">
    @csrf
    @method('PUT')
    <button type="submit" class="bedge card-link btn btn-danger btn-sm">x</button>
  </form>
      </li>

    @endforeach
  </ul>

    </hr>
    <a href="/groups/{{ $group['id'] }}/edit" button type="button" class="card-link btn btn-outline-warning btn-sm mt-2 mb-2">Edit group</a></button>
    <form action="/Groups/{{ $group['id']}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="card-link btn btn-outline-danger btn-sm mb-2 mt-2">Delete group</button>
  </form>
  </div>
</div>

@endforeach
<div>
 {{ $groups->links() }}
</div>
 @endsection
