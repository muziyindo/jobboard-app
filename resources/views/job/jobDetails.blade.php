@extends('layouts.app')

@section('content')

<h3>{{ $pageTitle }}</h3>


<br/>


    <div>
        <p>
            <b>Job Title : </b>{{ $jobDetails[0]->title }}</b> <br/>
            <b> posted on : </b> {{ $jobDetails[0]->created_at }} <br />
            <b>Job Description : </b> {{ $jobDetails[0]->description }} <br />
            <b>Closing Date : </b> {{ $jobDetails[0]->closing_date }}
            <a href="{{ route('editJob',['id' => $jobDetails[0]->id]) }}">Edit</a>
            <form method="post" action="{{ route('deleteJob',['id'=>$jobDetails[0]->id]) }}" style="margin: 0; padding: 0;">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete" />
            </form>
        </p>
    </div>

@endsection

