@extends('layouts.master')

@section('body')
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>Fill out the following details to drop your article</p>

            <div class="panel-body">
                <form action="/articles" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    <div class="form-group">
                        <label for ="content">Content</label>
                        <textarea name ="content" class ="form-control"></textarea>
                    </div>

                    <div class="panel-body">
                        <input type="submit" value ="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </div>
        </div>
    </div>
    <hr>
@endsection
