@extends('layouts.app')

@section('content')
    <div class="company-summary">

        <div class="container">
            <div class="row headline">
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 company-title">
                    <h1>Reviews for {{ $business->name }}</h1>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 company-rating ">
                    @if( ! $business->reviewsOf->isEmpty() )
                        <p>Average rating: {{ number_format( $business->reviewsOf->avg( 'stars' ), 2 ) }}</p>
                    @endif
                </div>
            </div>
            <hr/>

            <div class="row">
                @forelse( $business->reviewsOf as $review )
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">{{ $review->stars }} stars - {{ $review->created_at->format( 'jS F Y' ) }}</div>
                            <div class="panel-body">{{ $review->comments }}</div>
                            <div class="panel-footer">
                                by {{ $review->user->name }}
                                @if ( Auth::id() === $business->id )
                                    <a class=" pull-right btn btn-xs btn-primary">Reply</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-xs-12">
                        <div class="well"><em>There are no reviews for this company yet.</em></div>
                    </div>
                @endforelse
            </div>

            @if ( Auth::check() && Auth::user()->isMember() )
                <hr>
                <h3> Add a New Review</h3>
                <form method="post" action="/business/{{ $business->id }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" class="form-control"></textarea>
                        <input type="text" class="form-control" name="stars" placeholder="Star rating (out of 5)"/>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Add Review</button>
                    </div>

                </form>
            @endif
        </div>
    </div>
@stop
