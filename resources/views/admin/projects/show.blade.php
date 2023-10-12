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
      <div class=" mt-5 custom-style">
        
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{asset('storage/' . $project->image)}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{{$project['name']}}</h5>
                <p class="card-text">{{$project['description']}}</p>
                <a class="card-text">{{$project['url']}}</a>
                <p class="card-text"><small class="text-body-secondary">{{$project['publication_time']->format("d/m/Y")}}</small></p>
                <!--Soft Delete-->
                {{-- <form action="{{ route('admin.projects.destroy', $project->id)}}" method="POST" class="d-inline-block">
                  @csrf
                  @method("DELETE")
                  <a class="nav-link ms-3" href="/admin/projects/create">
                    <button class="delete-btn fw-bold text-white btn border border-danger" type="submit">
                      <i class="fa-regular fa-trash-can text-danger"></i>
                    </button>
                  </a>
                </form> --}}
                <div class="d-flex">
                  <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-warning me-2">Edit</a>
                  <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Elimina</button>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <div class="text-center mb-3">
      
    </div>
  </div>
</div>

@endsection