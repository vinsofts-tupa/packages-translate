@extends("languages::home")
@section("do-du-lieu")
<div class="page-title">
          <div class="title_left">
            <h3>User</h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2><small>User List</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings</a>
                      </li>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                 <a href="{{url($lang.'/languages-add')}}" class="btn btn-primary">Add</a>
                 <a href="{{url($lang.'/languages-capnhat')}}" class="btn btn-info">Cập Nhật</a>
                <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Incode</th>
                      <th>En</th>
                      <th>Vn</th>
                      <th>Page</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $row)
                    <tr>
                      <td>{{ $row->in_code }}</td>
                      <td>{{ $row->en }}</td>
                      <td>{{ $row->vn }}</td>
                      <td>{{ $row->page }}</td>
                      <td>
                        <a class="btn btn-primary glyphicon glyphicon-edit" href="{{url($lang.'/languages-edit',$row->id)}}"> {{trans('thongbao.edit')}}</a>
                         &nbsp; &nbsp;
                        <a onclick="return window.confirm('Are you sure')" class="glyphicon glyphicon-remove-sign btn btn-danger" href="{{url($lang.'/languages-delete/'.$row->id)}}"> {{trans('thongbao.delete')}}</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        </div>
@endsection