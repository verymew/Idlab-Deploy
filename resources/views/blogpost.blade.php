@extends('layouts.idlab')

@section('content')

<style>
  .post{
    display: flex;
    justify-content: center;
  }
  .action{
    width: 65%;
  }
</style>

<x-subheaderpost></x-subheaderpost>


<section class="post">
    <div class="action">
          <p>
            <img src="{{ asset('storage/' . $project->image_path) }}" alt="" class="img-fluid">
          </p>
          <h2 class="mb-3">{{ $project->title }}</h2>
          <p>{{ $project->content }}
          </p>
    </div>
</section>

@endsection
