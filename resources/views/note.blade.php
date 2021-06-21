@extends('templates.navbar')

@section('title')
    My Notes
@endsection

@section('content')

<div class="container mt-3 notes-container w-auto mb-lg-5">
    <h2>{{$user['name']}}'s Notes</h2>
    <div class="d-flex justify-content-center mt-3 flex-wrap">
    @forelse ($user['notes'] as $note)
    
        <div class="card border-success m-2" style="width: 25rem !important; max-width: 25rem; height: 15rem; max-height: 15rem;">
            <div class="card-header">
                <h4 class="card-title m-0 text-truncate">{{$note['title']}}</h4>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <p class="card-text text-truncate">{{$note['note']}}</p>
                <div class="d-flex overflow-hidden">
                    @forelse ($note['tags'] as $tag)
                    <div class="badge rounded-pill bg-success mx-1">
                        {{$tag}}
                    </div>
                    @empty
                        <p>No tags</p>
                    @endforelse
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="d-flex justify-content-lg-between">
                    <span>{{$note['updated_at']}}</span>
                    <div class="d-flex">
                        <a href="{{ url($note['id'].'/detail')}}" class="btn btn-primary">Open</a>
                        <a href="{{ url($note['id'].'/delete')}}" class="btn btn-link text-danger">Delete</a>
                    </div>
                </div>
              </div>
        </div>
    
    @if ($loop->last)
    <div class="d-flex justify-content-center align-items-center m-2" style="width: 25rem !important; max-width: 25rem; height: 15rem; max-height: 15rem;">
        <a href="{{ url('/create-note') }}" class="btn btn-outline-success">Create New Note</a>
    </div>
    @endif
    
    @empty
        <div class="d-flex justify-content-start flex-column align-items-center my-4 h-100 p-5">
            <h2 class="text-muted">You Don't Have Any Notes Yet</h2>
            <a href="{{ url('/create-note') }}" class="btn btn-lg btn-success my-3">Create Note</a>
            <img src="{{asset('svg/no-notes.svg')}}" alt="" class="h-25">
        </div>
    @endforelse
    </div>
</div>

@endsection