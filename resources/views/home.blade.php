@extends('layouts.app')

@section('content')

    <div class="flex-center position-ref full-height">

        <div class="col-md-8 col-md-offset-2" id="mainTitle">
            <h1>  Review and discover great companies! </h1>
            <div id="searchBox">

                <form method="get" action="{{ url('/business') }}" class="form-group">
                    <input type = "text" class="text" id="businessName" name="businessName">
                    <button type = "submit" class="btn btn-info"> Search </button>

                </form>
            </div>
        </div>
    </div>



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             @foreach($reviews as $review)

                    <div class="reviewUser">
                       The user: <b>{{$review->user_id}}</b>
                    </div>
                    <div class="reviewBusiness">
                        wrote a review about <b>{{$review->business_id}}</b>
                    </div>
                    <div class="review">
                        <div class = "reviewBody">
                            <p> " {{$review->comments}} "</p>
                        </div>
                        <div class="reviewRating">
                            <p>Rating:{{$review->stars}}/5 </p>
                        </div>
                </div>
                <hr />
                @endforeach


        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        </div>
    </div>
</div>
@endsection
