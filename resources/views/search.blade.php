@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Search results for "{{ $searchTerm }}"</h1>

        <ul>
            @foreach( $businesses as $business )
                <li>
                    <a href="/business/{{ $business->id }}">{{ $business->name }}</a>
                </li>
            @endforeach
        </ul>
@endsection
