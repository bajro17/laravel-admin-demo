@extends('admin.admin')
@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title text-center">Add new practice</h4>
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
                            <form action="{{route('practice.store')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name" class="col-md-3 col-form-label">Name</label>
                                    <input type="text" class="form-control input-full" id="name"
                                        placeholder="Enter Name" name="name">

                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter Email"
                                        name="email">
                                </div>

                                <div class="form-group">
                                        <label for="tag" >Select tags</label>
                                        <select class="form-control" id="tag" name="tag[]" multiple>
    
    
    
                                            @foreach ($tags as $tag)
                                            <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
                                            @endforeach
    
                                        </select>
                                    </div>


                                <div class="form-group">
                                    <label for="logo">Select Logo</label>
                                    <input type="file" class="form-control-file" id="logo" name="logo">
                                </div>
                                <div class="form-group">
                                    <label for="website" class="col-md-3 col-form-label">Website</label>
                                    <input type="text" class="form-control input-full" id="website"
                                        placeholder="Enter website" name="website">

                                </div>

                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Submit</button>
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