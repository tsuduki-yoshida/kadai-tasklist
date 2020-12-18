@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <h2>{{ Auth::user()->name }}さんのタスクリスト一覧</h2>
        @include("tasks.index")
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Microposts</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection