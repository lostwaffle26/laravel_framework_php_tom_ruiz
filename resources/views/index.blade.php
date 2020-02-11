@extends('layouts.app')

@section('content')
        @foreach($skills as $skill)
        <div class="card">
            <div class="card-header">
                <img src="{{config('logo.path') . $skill->logo}}" width="40px" height="40px"> {{$skill->name}}
                </div>
                <div class='card-body'>
                    <p>{{$skill->description}}</p>
                    <p>{{__('count')}} : {{$skill->users()->count()}}</p>
                    <p>{{__('avg')}} : {{$skill->users()->avg('skill_user.level')}}</p>
                </div>
        </div>
        @endforeach
@endsection