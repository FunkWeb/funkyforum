@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-2">Siste innlegg</h2>

                @foreach($threads as $thread)
                    <div class="card mb-2">
                        <div class="card-header">
                            <h4>
                                {{ $thread->title }}
                            </h4>
                            <div>
                                skrevet av {{ $thread->user->name }}
                                {{ $thread->created_at->diffForHumans() }}
                            </div>
                        </div>
                        <div class="card-body">
                            <div>{{ $thread->body }}</div>
                        </div>
                    </div>
                @endforeach
                {{ $threads->links() }}
            </div>
        </div>
    </div>
@endsection
