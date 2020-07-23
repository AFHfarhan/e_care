@extends('template')
@section('title','INSTACARE')
@section('content')
<section id="contact" class="contact-area">
    <div class="container" style="margin-top:150px;margin-bottom:150px;">
        <div class="col-lg-12">
            <center><h2 class="contact-title pb-10"><i class="fa fa-instagram"></i> <span>Insta</span>Care</h2></center>
                            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-input mt-25">
                    <center><label>Username</label></center>
                        <div class="input-items default">
                            <input name="name" type="text" placeholder="Username">
                            <i class="lni lni-user"></i>
                        </div>
                    </div> <!-- form input -->
                </div>
                <div class="col-md-12">
                    <div class="form-input light-rounded-buttons mt-30">
                        <center><a href="/InstaCareHasil"><button class="main-btn light-rounded-two">Buktikan</button></a></center>
                    </div> <!-- form input -->
                </div>

            </div>
            
        </div>        
    </div>
</section>
@endsection