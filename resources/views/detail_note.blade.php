@extends('templates.navbar')

@section('title')
    {{$user['note']['title'] ?? 'NoteNuts'}}
@endsection


@section('content')

<div class="container mt-3 notes-container w-auto mb-lg-5">
    <div class="d-flex justify-content-center mt-3 flex-wrap ">
        <div class="card border-success m-2 w-100" >
            <div class="card-header">
                <h4 class="card-title m-0">{{$user['note']['title']}}</h4>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <p class="card-text">{{$user['note']['note']}}</p>
                <div class="d-flex flex-wrap mt-4">
                    @forelse ($user['note']['tags'] as $tag)
                        <div class="badge rounded-pill bg-success mx-1">
                            {{$tag}}
                        </div>
                    @empty
                    <p>No tags</p>
                    @endforelse
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="d-flex justify-content-lg-between align-items-center">
                    <span>Written by {{$user['name']}} at {{$user['note']['updated_at']}}</span>
                    <div class="d-flex">
                        <a href="{{ url($user['note']['id'].'/update-note')}}" class="btn btn-primary">Update</a>
                        <a href="{{ url($user['note']['id'].'/delete')}}" class="btn btn-link text-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    

</div>

@endsection