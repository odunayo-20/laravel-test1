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
                            <h2>Edit Class</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <select name="class" id=""
                                        class="form-control @error('class') is-invalid

@enderror">
                                            <option value="{{ $getSingle->class }}">{{ $getSingle->class }}</option>
                                        @foreach ($getClass as $class)
                                            <option value="{{ $class->class_name }}">{{ $class->class_name }}</option>
                                        @endforeach
                                        @error('class')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <select name="subject" id=""
                                        class="form-control @error('subject') is-invalid

@enderror">
                                            {{-- <option value="{{ $getSingle->subject }}">{{ $getSingle->subject }}</option> --}}
                                        @foreach ($getSubject as $subject)
                                            <option {{( $getSingle->subject == '') ? 'selected' : ''}} value="{{ $subject->subject_name }}">{{ $subject->subject_name }}</option>
                                        @endforeach
                                        @error('subject')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-4  form-group has-feedback">
                                    <select name="status" id=""
                                        class="form-control @error('status') is-invalid

@enderror">
                                        <option {{( $getSingle->status == 'Active') ? 'selected' : ''}} value="Active">Active</option>
                                        <option {{( $getSingle->status == 'Inactive') ? 'selected' : ''}} value="Inactive">Inactive</option>

                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </select>
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
