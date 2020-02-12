@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

{{--                <button id = "div12" class="btn btn-info" style="display:block" onclick = "replace('div1','div2')">Events</button>--}}
{{--                <button id = "div22" class="btn btn-success" style="display:block" onclick = "replace('div2','div1')">Posts</button>--}}
                <ul class="nav navbar-nav">

                    <li><a  onclick = "replace('div1','div2')">Events</a></li>
                    <li><a  onclick = "replace('div1','div2')">Posts</a></li>

                </ul>

                <br><br>

                <div class="panel-body">
                    <div id="div1" style="display:block">
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                        <h3>Your Blog Posts</h3>
                        @if(count($posts) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                        <td>
                                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You have no posts</p>
                        @endif
                    </div>

                    <div id="div2" style="display:block">
                        <a href="/posts/create" class="btn btn-primary">Create Event</a>
                        <h3>Your Events</h3>
                        @if(count($posts) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                        <td>
                                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You have no posts</p>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function replace( hide, show ) {
        document.getElementById(hide).style.display="none";
        document.getElementById(show).style.display="block";
    }
</script>
@endsection
