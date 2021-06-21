@extends('templates.navbar')

@section('title')
    Update Note
@endsection

@section('content')
<div class="container my-3 notes-container">
    <h2>Update Note</h2>
    <div class="d-flex justify-content-center my-5 w-100">
        <form action="{{url($user['note']['id'].'/update')}}" method="POST" class="w-100">
            @method('PATCH')
            @csrf
            <div class="card border-success mb-3 w-100">
                <div class="card-header">
                    <input type="text" name="title" id="title" placeholder="Click to add title" class="input-title form-control" value="{{$user['note']['title']}}">
                </div>
                <div class="card-body">
                    <textarea name="note" id="note" placeholder="Click to add text" class="text-dark input-note">{{$user['note']['note']}}</textarea>
                    <div class="d-flex align-items-center">
                        <label for="tags">Tags (separate by comma): </label>
                        <input type="text" name="tags" id="tags" class="input-tags w-75" placeholder="Click to add tags" value="{{$user['note']['modified_tags']}}">
                    </div>
                    <div class="d-flex justify-content-end mt-2">
                        <a href="{{url($user['note']['id'].'/detail')}}" class="btn btn-outline-danger m-1">Cancel</a>
                        <button type="submit" class="btn btn-success m-1">Update</button>
                    </div>
                    
                </div>
            </div>
        </form>
    </div>
    
</div>

@endsection