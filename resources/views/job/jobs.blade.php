@extends('layouts.app')

@section('content')

    @if ($message = Session::get('message'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <h3>{{ $pageTitle }}</h3>

    <br />

    
   <div class="container-fluid">
    <div class="container-fluid job-list-title"><h4><i class="fas fa-user-circle" style="color:#482880;"></i> Job List</h4></div>
    <table class="table table-sm table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Job Title</th>
            <th scope="col">Description</th>
            <th scope="col">Date Posted</th>
            <th scope="col">Closing Date</th>
            <th scope="col">More</th>
          </tr>
        </thead>
        <tbody>
          @php
            $i = 1
          @endphp

            @foreach ($jobs as $job)
          <tr>
            <th scope="row">{{ $i }}</th>
            <td>{{ $job->title }}</td>
            <td>{{ substr($job->description, 0, 20) }}</td>
            <td>{{ $job->created_at }}</td>
            <td>{{ $job->closing_date }}</td>
            <td><a href="{{ route('job', ['id' => $job->id]) }}">More</a></td>
          </tr>
          @php
            $i++
          @endphp 

          @endforeach

          
        </tbody>
      </table>
    </div>

@endsection
