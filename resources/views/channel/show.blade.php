@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-body">
                    <div class="media">
                        <div class="media-left">
                            <img src="https://s-media-cache-ak0.pinimg.com/736x/10/b5/88/10b588ebe9811e2e9ea90b04ff0dec21--free-pumpkin-stencils-pumpkin-template.jpg" alt="" width="30px" height="auto">
                        </div>
                        <div class="media-body">
                            {{ $channel->name }}
                            <ul class="list-inline">
                                <li>
                                    User-ID: {{ $channel->slug }}
                                </li>
                            </ul>
                            @if($channel->description)
                                <hr>
                                <p>{{ $channel->description }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    ...
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
