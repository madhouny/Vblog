@extends('main')

@section('title')
    <title>Tous les Articles</title>
@endsection

@section('content')
    
    <div class="row">
        <div class="col-md-9">
            <h1>Tous les Articles</h1>    
        </div>
        <div class="col-md-3">
            <a href="{{route('posts.create')}}" class="btn btn-lg btn-block btn-primary btn-spacing">Nouveau Article</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        <hr>

    </div><!-- end of row -->
    
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                 <thead>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Créer à</th>
                 </thead> 
                 <tbody>

                    @foreach ($posts as $post)
                        <tr>
                            <th> {{ $post->id }} </th>
                            <td> {{$post->title}} </td>
                            <td> {{substr($post->body, 0 , 50)}} {{(strlen($post->body) > 50 ? "..." : "")}}</td>
                            <td> {{ date('M j, Y', strtotime($post->created_at)) }} </td>
                        <td><a href="{{route('posts.show', $post->id)}}" class="btn btn-info btn-sm">Consulter</a> <a href="{{route('posts.edit', $post->id)}}" class="btn btn-light btn-sm">Modifier</a></td>
                        </tr>
                    @endforeach     
                
                
                </tbody>  
            </table>
        </div>
    </div>

@endsection