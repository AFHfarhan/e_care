@extends('template')
@section('title','INSTACARE Hasil')
@section('content')

<section id="contact" class="contact-area">
    <div class="container" style="margin-top:70px;margin-bottom:150px;">
        <div class="col-lg-12">
        
                <center><a href="/TweetCare"><img src="assets/images/lambe_turah.jpg"  alt="Hero"></a></center>           
                <center><h2 class="contact-title pb-10">Lambe_Turah</h2></center>
                
            <div class="row" style="margin-top:70px;">
                <div class="col-lg-12">
                    <center><a href="/TweetCare"><img src="assets/images/word_cloud_instacare.png"  alt="Hero"></a></center>

                </div>  
            </div>
            <div class="row"style="margin-top:70px;">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-4">
                    <center><h2 class="contact-title pb-10"><i class="fa fa-smile-o"></i> 30%</center>
                                        
                </div>
                <div class="col-lg-4">
                    
                    <center><h2 class="contact-title pb-10"><i class="fa fa-frown-o"></i> 70%</center>                    
                </div>
                <div class="col-lg-2">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-7 col-sm-9">
                </div>
                <div class="col-lg-8 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Cyberbullying terdeteksi</a></h4>
                            
                        </div>
                        <div class="features-content">
                            <p class="text">Kadar cyberbullying yang terdapat dalam akun ini terdeteksi sebesar 70 persen.</p>
                            <p class="text">Apakah anda ingin melaporkannya?</p>
                            <center><a class="features-btn" href="#">LAPORKAN</a></center>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-2 col-md-7 col-sm-9">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                        <div class="form-input light-rounded-buttons mt-30">
                            <center><a href="/InstaCare"><button class="main-btn light-rounded-two">Kembali</button></a></center>
                        </div> <!-- form input -->
                </div>
            </div>
        </div>        
    </div>
</section>

@endsection