@extends('admin.admin')
@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title text-center">Edit employee</h4>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{route('employee.update', $employee->id)}}" method="POST">
                                @method('PUT')
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="fname" class="col-md-3 col-form-label">First Name</label>
                                    <input type="text" class="form-control input-full" id="fname"
                                        placeholder="Enter First Name" name="fname" value="{{$employee->first_name}}">

                                </div>
                                <div class="form-group">
                                    <label for="lname" class="col-md-3 col-form-label">Last Name</label>
                                    <input type="text" class="form-control input-full" id="lname"
                                        placeholder="Enter Last Name" name="lname" value="{{$employee->last_name}}">

                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter Email"
                                        name="email" value="{{$employee->email}}">
                                </div>

                                <div class="form-group">
                                    <label for="practice">Select practice</label>
                                    <select class="form-control" id="practice" name="practice">


                                        
                                        @foreach ($practice as $practice)
                                        <option value="{{$practice->id}}" {{$employee->practice_id == $practice->id ? 'selected="selected"' : ''}}>{{$practice->name}}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="phone" class="col-md-3 col-form-label">Phone</label>
                                    <input type="text" class="form-control input-full" id="phone"
                                        placeholder="Enter Phone Number" name="phone" value="{{$employee->phone}}">

                                </div>

                        </div>
                        <div class="card-action">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">

            <div class="copyright ml-auto">
                2018, made with <i class="la la-heart heart text-danger"></i> by <a
                    href="http://www.themekita.com">ThemeKita</a>
            </div>
        </div>
    </footer>
</div>
@endsection