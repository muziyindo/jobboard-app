@extends('layouts.app')

@section('content')

    {{-- <div style="color:red">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif
    </div> --}}

    

        <div class="container login-title"><h4><i class="fas fa-user-circle" style="color:#482880;"></i> Create new Jobs</h4></div>
        <div class="container login-box clearfix">
           

            <form method="post" action="{{ route('storeJob') }}">
                @csrf

                <div class="form-group">
                    <label>Recruiting Company:</label>
                    <input class="form-control" name="recruitingCompany" type="text" value="{{ old('recruitingCompany') }}" />
                    @if ($errors->has('jobTitle'))
                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('recruitingCompany') }}</small>
                    @endif
                </div>

                <div class="form-group">
                    <label>Job Title:</label>
                    <input class="form-control" name="jobTitle" type="text" value="{{ old('jobTitle') }}" />
                    @if ($errors->has('jobTitle'))
                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('jobTitle') }}</small>
                    @endif
                </div>

                <div class="form-group">
                    <label>Job Description:</label>
                    <textarea class="form-control" rows="5" cols="20" name="jobDescription" >{{ old('jobDescription') }}</textarea>
                    @if ($errors->has('jobDescription'))
                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('jobDescription') }}</small>
                    @endif
                </div>


                <div class="form-group">
                    <label>Closing Date:</label>
                    <input class="form-control" type="date" name="jobClosingDate" value="{{ old('jobClosingDate') }}" /></p>
                    @if ($errors->has('jobClosingDate'))
                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('jobClosingDate') }}</small>
                    @endif
                </div>

                <div class="form-group">
                    <label>Application Method:</label>
                    <select class="form-control" name="applicationMethod" >
                        <option>-select-</option>
                        <option value="Email">Email</option>
                        <option value="Website">Website</option>
                    </select>
                    @if ($errors->has('applicationMethod'))
                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('applicationMethod') }}</small>
                    @endif
                </div>

                <div class="form-group">
                    <label>Application Email/Website:</label>
                    <input class="form-control" name="emailWebsite" type="text" value="{{ old('email_website') }}" />
                    @if ($errors->has('emailWebsite'))
                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('emailWebsite') }}</small>
                    @endif
                </div>

                
            
                <button type="Submit" class="btn btn-primary btn-custom float-right" value=""><i class="fas fa-plus" style="font-size:25px"></i></button>

            </form>
        </div>


    @endsection
