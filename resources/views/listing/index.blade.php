@extends('layouts.app')
@section('content')

<div class="topPage">
    <div class="listWrapper">
    @foreach ($listings as $listing)
        <div class="list">
            <div class="list_header">
                <h2 class="list_header_title">{{ $listing->title }}</h2>
                <div class="list_header_action">
                    <a href="{{ url('listings/delete', $listing->id) }}" onclick="return confirm('{{ $listing->title }}を削除しても大丈夫ですか？')"><i class="fas fa-trash"></i></a>
                    <a href="{{ url('listings/edit', $listing->id) }}"><i class="fas fa-pen"></i></a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>

@endsection