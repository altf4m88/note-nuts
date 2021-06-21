@extends('templates.navbar')

@section('title')
    Create Note
@endsection

@section('content')

<div class="container my-3 notes-container">
    <h2>Create New Note</h2>
    <div class="d-flex justify-content-center my-5">
        <form action="{{url('/create')}}" method="POST">
            @csrf
            <div class="card border-success mb-3" style="width: 40rem;">
                <div class="card-header">
                    <input type="text" name="title" id="title" placeholder="Click to add title" class="input-title form-control">
                </div>
                <div class="card-body">
                    <textarea name="note" id="note" placeholder="Click to add text" class="text-dark input-note"></textarea>
                    <div class="d-flex align-items-center">
                        <label for="tags">Tags (separate by comma): </label>
                        <input type="text" name="tags" id="tags" class="input-tags" placeholder="Click to add tags">
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Create</button>
                </div>
            </div>
        </form>
    </div>
    
</div>

@endsection