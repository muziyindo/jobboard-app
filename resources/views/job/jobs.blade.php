@extends('layouts.app')

@section('content')

<h3>{{ $pageTitle }}</h3>

<br/>

@foreach ($jobs as $job)
    <div>
        <p>
            <b>{{ $job->title }}</b> , posted on {{ $job->created_at }}
            <p>{{ substr($job->description, 0, 20) }} <a href="{{ route('job', ['id'=>$job->id]) }}">More</a></p>
        </p>
    </div>

@endforeach

@endsection