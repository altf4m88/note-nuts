@extends('templates.navbar')

@section('title')
    NoteNuts
@endsection

@section('content')
    <div class="container mt-3">
        <h2>{{$user->name}}'s Latest Notes</h2>
        <div class="d-flex justify-content-center mt-3">
            @forelse ($data as $note)
                <div class="card border-success m-2" style="width: 25rem !important; max-width: 25rem; height: 15rem; max-height: 20rem;">
                    <div class="card-header">
                        <h4 class="card-title m-0 text-truncate">{{$note['title']}}</h4>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p class="card-text text-truncate">{{$note['note']}}</p>
                        <div class="d-flex overflow-hidden">
                            @forelse ($note['tags'] as $tag)
                            <div class="badge rounded-pill bg-success m-1">
                                {{$tag}}
                            </div>
                            @empty
                                <p>No tags</p>
                            @endforelse
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        {{$note['updated_at']}}
                    </div>
                </div>
            @empty
                <div class="d-flex justify-content-start flex-column align-items-center my-4 h-100 p-5">
                    <h2 class="text-muted mb-3">No Latest Notes</h2>
                </div>
            @endforelse
            
        </div>
        <div class="d-flex justify-content-center mt-2 mb-5">
            <a href="{{url('/notes')}}" class="btn btn-lg btn-success">See More</a>
        </div>
        <div class="bg-white shadow px-3 py-5 rounded mb-3">
            <h1 class="text-center mb-5"><strong>Benefits Of Taking <span class="text-success">Notes</span></strong></h1>
            <div class="row bg-white mb-5">
                <div class="col d-flex justify-content-center">
                    <img src="{{asset('svg/taking-notes.svg')}}" alt="">
                </div>
                <div class="col">
                    <ul class="nav nav-tabs mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#why-note">Why Take Notes?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#benefits">What Is The Benefit?</a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active show" id="why-note">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis excepturi nihil unde, minima iure aliquam, veniam quae, voluptate distinctio dolorem nulla! Atque voluptatem mollitia rem quis totam, culpa ea earum pariatur obcaecati nisi nobis, quos, tempora ut numquam nesciunt?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque eaque perferendis, tempora praesentium quasi consequatur laudantium ducimus dolore quo sint voluptatum beatae. Eaque fugiat culpa incidunt distinctio quidem voluptates sint.</p>
                        </div>
                        <div class="tab-pane fade" id="benefits">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nemo ut quas harum voluptatum ratione aspernatur laudantium aliquam quia sequi.</p>
                            <ul>
                                <li class="text-success"><b>Train prioritizing skills</b></li>
                                <li class="text-primary"><b>Improve organizing skills</b></li>
                                <li class="text-orange"><b>Increase creativity</b></li>
                                <li class="text-danger"><b>Improve comprehension</b></li>
                                <li class="text-cyan"><b>Assert discipline</b></li>
                            </ul>
                            <p>Start taking notes <a href="{{url('/notes')}}">now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection