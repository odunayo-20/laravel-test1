@extends('layout.app')

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="col-md-12" >
                <a href="{{ url('admin/class/add') }}" class="btn btn-primary" style="float: right">Add Class</a>
            </div>
            <div class="">
              <div class="page-title">

                <div class="title_right" style="float: right">
                  <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="clearfix"></div>

              <div class="row" style="display: block;">


                <div class="col-md-12 col-sm-12  ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Class Record</h2>

                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <input type="hidden" value="{{ $i = 1 }}">
@foreach ($getRecord as $value)
<tr>
    <td>{{ $i++ }}</td>
    <td>{{ $value->class_name }}</td>
    <td>{{ $value->status }}</td>
    <td>
        <a href="{{ url('admin/class/edit/'.$value->id)  }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit" aria-hidden="true"></i></a>
        <a href="{{ url('admin/class/delete/'.$value->id)  }}" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
    </td>
</tr>
@endforeach
                        </tbody>
                      </table>
                      <div style="float: right">
                          {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                      </div>


                    </div>
                  </div>
                </div>




              </div>
            </div>
          </div>
          <!-- /page content -->


@endsection
