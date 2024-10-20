@extends('layout') @section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h5>Edit posts</h5>
                    </div>
                    <div class="card-body">
                        <form action="/posts/{{ $post->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Title</label>
                                <input name="title" type="text" value="{{ old('title', $post->title) }}"
                                    class="form-control" id="exampleFormControlInput1" placeholder="Enter post title..." />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Enter content...">{{ old('content', $post->content) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select class="form-control" name="category_id" value="Select category">
                                    <option value="">Select category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $post->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Update Post</button>
                        <a class="btn btn-danger" href="/posts">Back</a>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection
