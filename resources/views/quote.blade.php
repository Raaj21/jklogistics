@extends('layouts.frontend.app')
@section('content')
<section class="about-quotes">
    <div class="container">
      <div class="row">
        <div class="offset-lg-2 col-lg-8">
          <div class="quote-form-section">
            <span>QUOTE</span>
            <h2>REQUEST A FREE QUOTE</h2>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="company" placeholder="Company Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="email" placeholder="Email">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="shipper" placeholder="Shipper">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="consignee" placeholder="Consignee">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="pol" placeholder="POL / POD">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="intercoms" placeholder="Incoterms">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="lcl" placeholder="FCL or LCL or other">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="weight" placeholder="If LCL, advise No of pkgs, gross weight and cbm">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="fcl" placeholder="If FCL, 20’ or 40’">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="container" placeholder="Weight per container">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="commodity" placeholder="Commodity">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="type" placeholder="type">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
              <textarea type="text" placeholder="Remarks if any" id="remarks" name="remark"></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 text-center">
                <button><a href="#">SUBMIT</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection