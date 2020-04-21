@extends('frontend.layouts.master')

@section('title', '浪浪城市')

@section('content')

<section class="facts-section">
    <div class="container">
        <div class="position-relative">
            <div class="fact-absolute">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 mb--35  text-center">
                      <span class="fact-text">We Have</span>
                    </div>
                </div>
                
                <div class="row justify-content-center space-db--30">
                    <div class="row col-md-12 col-lg-12 mb--30">
                        <div class="col-md-6 col-lg-6 mb--30" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                            <div class="fact-card" >
                                <div class="card-content">
                                    <span class="number">300</span>
                                    <p class="info">狗</p>
                                </div>
                        
                                <div class="card-icon">
                                    <img src="image/users-wm.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-6 mb--30" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="200">
                            <div class="fact-card" >
                                <div class="card-content">
                                    <span class="number">150</span>
                                    <p class="info">貓</p>
                                </div>
                        
                                <div class="card-icon">
                                    <img src="image/fact-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="row col-md-12 col-lg-12 mb--30">  
                        <div class="col-md-6 col-lg-6 mb--30" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="400">
                            <div class="fact-card" >
                                <div class="card-content">
                                    <span class="number">50</span>
                                    <p class="info">其他動物</p>
                                </div>
                        
                                <div class="card-icon">
                                    <img src="image/fact-3.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-6 mb--30" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="600">
                            <div class="fact-card" >
                                <div class="card-content">
                                    <span class="number">30</span>
                                    <p class="info">志工</p>
                                </div>
                    
                                <div class="card-icon">
                                    <img src="image/fact-4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection