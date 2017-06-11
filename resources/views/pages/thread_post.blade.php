@extends('layouts.masters.main')

@section('page-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">THIS IS INDIVIDUAL POST</div>
                <h1>{{$post->title}}</h1>
                <h4 style="float:right">{{$post->created_at}}</h4>
                <h4 style="float:right">{{$post->updated_at}}</h4>
                <div class="panel-body">
                <p>{{$post->body}}</p>
                </div>
            </div>
            <!-- Note foreach is bugged for gathering replies normally -->
            @for ($i = 0; $i < count($replies); $i++)
                <p>{{$replies[$i]->body}} from: {{$replies[$i]->user->name}}<p>
            @endfor
            
            <div class="panel panel-default">
            @if(Auth::guest())
               To Reply please login 
            @else
                <form class="form-horizontal" role="form" method="POST" action="{{ route('make_reply') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="post_id" value="{{$post->id}}"></input>
                    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                        <label for="body" class="col-md-4 control-label">Body</label>

                        <div class="col-md-6">
                            <textarea id="body" class="form-control" name="body" required></textarea>

                            @if ($errors->has('body'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Reply
                            </button>
                        </div>
                    </div>
                </form>
            @endif
            </div>
        </div>
    </div>
</div>
@endsection