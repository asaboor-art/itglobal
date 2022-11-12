@extends('layouts.layoutv1')
@section('content')

<!-- BANNER SECTION BEGIN -->
<section class="about-banner-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="about-banner-content">
              <h2>Get a Quote</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- BANNER SECTION END -->
    <!-- QUOTE SECTION BEGIN -->
    <section class="quote-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2 col-12"></div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-12">
            <div class="quote-form">
              <h2><span>Get A</span> Free Quote</h2>
              <form class="get-a-quote-form" enctype="multipart/form-data">
                <div class="quote-success"></div>
                <div class="quote-error"></div>
                <div class="row flex-fields">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <input type="text" name="first_name" placeholder="First Name" class="form-control first_name">
                  <div class="error-first_name errors"></div>
                  </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <input type="text" name="last_name" placeholder="Last Name" class="form-control last_name">
                  <div class="error-last_name errors"></div>
                  </div>
                </div>
                <div class="row flex-fields">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <input type="email" name="email" placeholder="Email" class="form-control email">
                  <div class="error-email errors"></div>
                  </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <input type="number" name="phone_no" placeholder="Phone Number" class="form-control phone_no">
                  <div class="error-phone_no errors"></div>
                  </div>
                </div>
                <div class="row flex-fields">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <input type="text" name="state" placeholder="State" class="form-control state">
                  <div class="error-state errors"></div>
                  </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <input type="number" name="postalcode" placeholder="Postal Code" class="form-control postalcode">
                  <div class="error-postalcode errors"></div>
                  </div>
                </div>
                <div class="row flex-fields">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <textarea cols="1" rows="1" name="message" placeholder="Project Details/Message" class="form-control message"></textarea>
                  <div class="error-message errors"></div>
                  </div>
                </div>
                  <div class="panel">
                    <div class="button_outer">
                      <div class="upload-flex">
                      <div class="up-txt">
                        <h6>Drop Photos here or click to upload</h6>
                      </div>
                      <div class="btn_upload">
                        <input type="file" name="file" class="file" id="upload_file" name="">
                        <i class="fa fa-plus" aria-hidden="true"></i> Upload
                      </div>
                      </div>
                      <div class="processing_bar"></div>
                      <div class="success_box"></div>
                    </div>
                    <p class="ext-txt">Accepted file types: jpg, jpeg, gif, png, pdf, mp4, mov, wmv, flv, avi, doc, docx, bmp, Max. file size: 256 MB.</p>
                  </div>
                  <div class="error_msg"></div>
                  <div class="uploaded_file_view" id="uploaded_view">
                    <span class="file_remove">X</span>
                  </div>
                <div class="form-btn form-btn2">
                <button type="submit" class="btn btn-primary">SEND</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-12"></div>
        </div>
      </div>
    </section>
    <!-- QUOTE SECTION END -->
@endsection
