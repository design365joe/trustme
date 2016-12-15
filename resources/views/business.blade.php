@extends('layouts.app')

@section('content')


<div class="company-summary">

    <div class="container">
        <div class="row headline">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 company-title">
                <h1> Here is Company's Name</h1>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 company-rating ">
                <p> <span> Average </span> <span> * here is the average *</span> <span> from 0-10</span> </p>
            </div>
        </div>
        <hr />



        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1> Here are company's reviews </h1>

                <ul class="list-group">
                    <li> review 1</li>
                </ul>

                <hr>
                <h3> Add a New Review</h3>
                <form method="post" action="/business">
                    <div class="form-group">
                        <textarea name="body" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Add Review</button>
                    </div>

                </form>
            </div>


        </div>

        <hr />




    </div>


</div>



@stop
