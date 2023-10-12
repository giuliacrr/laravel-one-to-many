@extends('layouts.app')

@section('content')
<div>
  <div class="container container-home position-relative">
    <div class="position-absolute position-set">
      <button class="text-uppercase fw-bold fs-4 p-3" type="button">
        current series
      </button>
    </div>
    <div>
      <div class="mt-5 custom-style">
        @foreach($projects as $repo)
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{asset('storage/' . $repo->image)}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{{$repo['name']}}</h5>
                <p class="card-text mt-5"><small class="text-body-secondary">{{$repo['publication_time']->format("d/m/Y")}}</small></p>
                <div class="d-flex align-items-center">
                  <!--Show + delete + edit -->
                  <div class="d-flex mt-5">
                    <a href="{{ route('admin.projects.show', $repo['slug']) }}"><button class="btn btn-danger me-2">Show more</button></a>
                    <a href="{{ route('admin.projects.edit', $repo->slug) }}" class="btn btn-warning me-2"><i class="fa-regular fa-pen-to-square"></i></a>
                    <form action="{{ route('admin.projects.destroy', $repo->slug) }}" method="POST">
                      @csrf
                      @method("DELETE")
                      <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach  
      </div>
    </div>
    <div class="text-center mb-3 mt-3">
      <a class="nav-link" href="/admin/projects/create">
      <button class="add-btn fw-bold text-white btn btn-danger" type="button">
        <i class="fa-solid fa-plus"></i>
      </button></a>
      
    </div>
  </div>
</div>

@endsection