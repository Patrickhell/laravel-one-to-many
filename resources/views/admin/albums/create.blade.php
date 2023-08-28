@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('admin.albums.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-6">
                @error('Album_type')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="singer_name" class="form-label">
                        Album type
                    </label>
                    <input type="text" class="form-control" id="singer_name" name="Album_type" value="{{old('Album_type', '' ) }}">
                </div>
                @error('singer_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="singer_name" class="form-label">
                        Singer name's
                    </label>
                    <input type="text" class="form-control" id="singer_name" name="singer_name" value="{{old('singer_name', '' ) }}">
                </div>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="title" class="form-label">
                        Title
                    </label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title', '' ) }}">
                </div>
            </div>
            <div class=" col-6">
                @error('genres')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="genres" class="form-label">
                        Genres
                    </label>
                    <input type="text" class="form-control" id="genres" name="genres" value="{{old('genres', '' ) }}">
                </div>

                <div class="mb-3">
                    <label for="songs_number" class="form-label">
                        Songs
                    </label>
                    <input type="number" class="form-control" id="songs_number" name="songs_number" value="{{old('songs_number', '' ) }}">
                </div>
                @error('imageUrl')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="imageUrl" class="form-label">
                        Cover Album
                    </label>
                    <input type="file" class="form-control" id="imageUrl" name="imageUrl">
                </div>
            </div>

            <div class=" d-flex justify-content-center text-white">
                <button type="submit" class="mx-2" style="background: greenyellow">
                    Create your Album

                </button>
                <button type="reset" style="background: yellow">
                    Reset
                </button>
            </div>
        </div>
    </form>
</div>
@endsection