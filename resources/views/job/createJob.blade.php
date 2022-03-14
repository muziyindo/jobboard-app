@extends('layouts.app')

@section('content')

    <div style="color:red">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif
    </div>

    <h3>Create new Jobs</h3>

    <form method="post" action="{{ route('storeJob') }}">
        @csrf
        <P>Job Title: <input name="jobTitle" type="text" /></p>
        <P>Description:
            <textarea rows="10" cols="20" name="jobDescription"></textarea>
        </p>
        <P>Closing Date: <input type="text" name="jobClosingDate" /></p>
        <p><input type="Submit" value="Save" />

    </form>


@endsection
