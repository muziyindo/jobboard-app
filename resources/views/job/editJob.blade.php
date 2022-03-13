@extends('layouts.app')

@section('content')


<h3>Update Job</h3>

<form method="post" action="{{ route('updateJob',['id'=>$jobDetails[0]->id]) }}">
@csrf
@method('PUT') <!--You must put this, if you are updating-->

<P>Job Title: <input name="jobTitle" type="text" value="{{ $jobDetails[0]->title }}" /></p>
<P>Description: <textarea rows="10" cols="20" name="jobDescription">{{ $jobDetails[0]->description }}</textarea></p>
<P>Closing Date: <input type="text" name="jobClosingDate" value="{{ $jobDetails[0]->closing_date }}" /></p>
<p><input type="Submit" value="Save" />

</form>

@endsection