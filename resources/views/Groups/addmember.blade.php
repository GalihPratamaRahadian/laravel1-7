@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<form method="POST" action="/groups/addmember/{{$group->id}}">
@csrf
@method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Teman</label>
      <select class="form-select" aria-label="Default select example" name="friend_id">
        <option selected>Pilih Teman Untuk Dimasukan</option>
        @foreach($friend as $f)  
        <option value="{{$f->id}}">{{$f->nama}}</option>
        @endforeach
      </select>
  </div>
 
  <button type="submit" class="btn btn-primary">Tambah ke group</button>
</form>
 
@endsection
