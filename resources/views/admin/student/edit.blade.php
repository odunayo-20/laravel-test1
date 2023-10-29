@extends('layout.app')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Admin</h3>
                </div>

            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Design <small>different form elements</small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6 col-sm-6  form-group has-feedback">
                                    <input type="text" value="{{ $getSingle->firstname }}"
                                        class="form-control has-feedback-left @error('firstname') is-invalid

                                    @enderror"
                                        id="inputSuccess2" placeholder="First Name" name="firstname">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    @error('firstname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 col-sm-6  form-group has-feedback">
                                    <input type="text" value="{{ $getSingle->lastname }}"
                                        class="form-control @error('lastname') is-invalid

                                    @enderror"
                                        id="inputSuccess3" placeholder="Last Name" name="lastname">
                                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    @error('lastname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="col-md-6 col-sm-6  form-group has-feedback">
                                    <input type="email" value="{{ $getSingle->email }}"
                                        class="form-control has-feedback-left @error('email') is-invalid

                                    @enderror"
                                        id="inputSuccess4" placeholder="Email" name="email">
                                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="col-md-6 col-sm-6  form-group has-feedback">
                                    <input type="tel" value="{{ $getSingle->phone }}"
                                        class="form-control @error('phone') is-invalid

                                    @enderror"
                                        id="inputSuccess5" placeholder="Phone" name="phone">
                                    <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="col-md-6 col-sm-6  form-group has-feedback">
                                    <input type="file" value="{{ $getSingle->thumbnail }}"
                                        class="form-control @error('thumbnail')

                                    @enderror"
                                        id="inputSuccess5" name="thumbnail">

                                    <span class="form-control-feedback right">
                                        <img src="{{ url('public/upload/student/' . $getSingle->thumbnail) }}" alt=""
                                            class="rounded-circle" style="width: 30px; height:30px">
                                    </span>
                                     {{-- <span class="fa fa-image form-control-feedback right" aria-hidden="true"></span> --}}
                                    @error('thumbnail')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-9 col-sm-9  offset-md-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>






                </div>












            </div>

        </div>
    </div>
    <!-- /page content -->
@endsection
