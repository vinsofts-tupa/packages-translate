@extends("languages::home")
@section("do-du-lieu")
<div class="col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Validation</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">

                    <form method="post" enctype="multipart/form-data" action="{{url($lang.'/languages-add')}}" class="form-horizontal form-label-left" novalidate>
                      </p>
                      <span class="section">Add Localization</span>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">InCode<span style="color: red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" name="txtIncode" type="text" required>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">En <span style="color: red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="txtEn" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Vn<span style="color: red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="txtVn" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Page<span style="color: red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="txtPage" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <input type="submit" class="btn btn-success" value="Submit">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection