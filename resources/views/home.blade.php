@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Blog Lists
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <div class="thead">
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Title
                                </th>
                                <th>
                                    Content
                                </th>
                                <th>
                                    Author
                                </th>
                                <th>
                                    Action
                                </th>
                                <th>Details</th>
                            </tr>
                        </div>
                        <div class="tbody">
                            @foreach ($posts as $post) 
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{ substr($post->content,0,15) }}</td>
                                <td>Mg Mg</td>
                                <td><a class="btn btn-warning" href="/posts/{{$post->id}}/edit">Edit</a> | 
                                <Form action="/posts/{{$post->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </Form>
                            </td>
                                <td><a href="/posts/{{$post->id}}">View</a></td>
                            </tr>
                            @endforeach
                        </div>
                    </table>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary" href="/posts/create">Add New Blog</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection