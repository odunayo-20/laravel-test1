@extends('layout.app')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Subject</h3>
                </div>

            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Subject Add</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <input type="text" value="{{ old('subject_name') }}"
                                        class="form-control has-feedback-left @error('subject_name') is-invalid

                                    @enderror"
                                        id="inputSuccess2" placeholder="Subject Name" name="subject_name">
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    @error('subject_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <select name="subject_type" id=""
                                        class="form-control @error('subject_type') is-invalid

@enderror">
                                        <option value="Theory">Theory</option>
                                        <option value="Pratical">Pratical</option>

                                        @error('subject_type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <select name="status" id=""
                                        class="form-control @error('status') is-invalid

@enderror">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </select>
                                </div>


                                <div class="form-group my-3">
                                    <div class="col-md-9 col-sm-9 text-end">
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
