@extends('layouts.master')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-10 mx-auto">
                @forelse ($articles as $article )
                    <table style="width: 100px;" border="4px">
                        <thead>
                            <tr>
                                <th>User_ID</th>
                                <th>Content</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $article->user_id }}</td>
                                <td>{{ $article->content }}</td>
                                <td>{{ $article->created_at-> diffForHumans() }}</td>
                            </tr>
                        </tbody>
                    </table>
                @empty
                    No articles
                @endforelse
            </div>
        </div>
    </div>
@endsection
