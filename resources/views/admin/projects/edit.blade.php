@extends('layouts.admin')


@section('content')
    <h1 class="py-3">Edit Project</h1>


    @include('partials.validation_errors')

    <form action="{{ route('admin.projects.update', $project) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                aria-describedby="titleHelper" value="{{ $project->title }}">
            <small id="titleHelper" class="form-text text-muted">
                Type the Project title max 150 characters - must be
                unique
            </small>
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">Image</label>
            <input type="text" class="form-control @error('cover_image') is-invalid @enderror" name="cover_image"
                id="cover_image" aria-describedby="cover_imageHelper" value="{{ $project->cover_image }}">
            <small id="cover_imageHelper" class="form-text text-muted">
                Type the Project Cover Image
            </small>
        </div>

        <div class="mb-3">
            <label for="site_link" class="form-label">Site Link</label>
            <input type="text" class="form-control @error('site_link') is-invalid @enderror" name="site_link"
                id="site_link" aria-describedby="site_linkHelper" value="{{ $project->site_link }}">
            <small id="site_linkHelper" class="form-text text-muted">
                Type the Project site_link max 255 characters
            </small>
        </div>

        <div class="mb-3">
            <label for="source_code" class="form-label">Source Code</label>
            <input type="text" class="form-control @error('source_code') is-invalid @enderror" name="source_code"
                id="source_code" aria-describedby="source_codeHelper" value="{{ $project->source_code }}">
            <small id="source_codeHelper" class="form-text text-muted">
                Type the Project Source Code max 255 characters
            </small>
        </div>

        <div class="mb-3">
            <label for="date_time" class="form-label">Date</label>
            <input type="date" class="form-control @error('date_time') is-invalid @enderror" name="date_time"
                id="date_time" aria-describedby="date_timeHelper" value="{{ $project->date_time }}">
            <small id="date_timeHelper" class="form-text text-muted">
                Enter the creation date of the project
            </small>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="6">{{ $project->content }}
            </textarea>
        </div>

        <button type="submit" class="btn btn-dark">Save</button>

    </form>
@endsection
