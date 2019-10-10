@extends('admin.admin')
@section('content')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title text-center">Add new field of practice</h4>
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
                            <form action="{{route('field.store')}}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="tag" class="col-md-3 col-form-label">Tag name</label>
                                    <input type="text" class="form-control input-full" id="tag" placeholder="Enter Tag"
                                        name="tag">

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