@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')

<section class="facts-section">
  <div class="container">
    <div class="position-relative">
      <div class="fact-absolute">
          <div class="row justify-content-center">
              <div class="col-xl-7 col-lg-8 mb--35  text-center">
                <span class="fact-text">The #1 User Experience Design course in the market</span>
              </div>
            </div>
            <div class="row justify-content-center space-db--30">
                <div class="col-md-6 col-lg-3 mb--30" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                        <div class="fact-card" >
                          <div class="card-content">
                            <span class="number">12,382</span>
                            <p class="info">Happy Students</p>
                          </div>
                
                          <div class="card-icon">
                            <img src="image/users-wm.png" alt="">
                          </div>
                        </div>
                </div>
                
                <div class="col-md-6 col-lg-3 mb--30" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="200">
                        <div class="fact-card" >
                          <div class="card-content">
                            <span class="number">103</span>
                            <p class="info">Lectures</p>
                          </div>
                
                          <div class="card-icon">
                            <img src="image/fact-2.png" alt="">
                          </div>
                        </div>
                </div>
                
                <div class="col-md-6 col-lg-3 mb--30" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="400">
                        <div class="fact-card" >
                          <div class="card-content">
                            <span class="number">3,493</span>
                            <p class="info">5 Star Reviews</p>
                          </div>
                
                          <div class="card-icon">
                            <img src="image/fact-3.png" alt="">
                          </div>
                        </div>
                </div>
                
                <div class="col-md-6 col-lg-3 mb--30" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="600">
                        <div class="fact-card" >
                          <div class="card-content">
                            <span class="number">21k</span>
                            <p class="info">Questions Solved</p>
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
</section>

@endsection