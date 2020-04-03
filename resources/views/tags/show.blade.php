@extends('main')

@section('title')
<title>  {{ $tag->name}} Tag</title>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <h1>{{ $tag->name }} Tag <small>{{ $tag->posts()->count() }} Articles</small> </h1>
    </div>
    <div class="col-md-4">
        
    <a href="{{route('tags.edit', $tag->id)}}" class="btn btn-primary float-right" style="margin-top:20px">Modifier</a>
    </div>    
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Tags</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($tag->posts as $post)
                    <tr>
                        <th>{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td> @foreach ($post->tags as $tag)
                            <span class="badge badge-secondary">{{$tag->name}}</span>
                        @endforeach</td>
                        <td> <a href="{{route('posts.show', $post->id)}}" class="btn btn-sm btn-info">View</a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection