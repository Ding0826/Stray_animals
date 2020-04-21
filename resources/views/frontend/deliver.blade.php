@extends('frontend.layouts.master')

@section('title', '浪浪城市')

@section('content')
<section class="course-section position-relative">
    <div class="shape-holder">
        <img src="./image/section-2-shape-bg.svg" alt="">
    </div>
    <div class="shape-holder" data-aos="zoom-in"  data-aos-once="true">
        <img src="./image/section-2-shape.svg" alt="">
    </div>
    <div class="shape-holder course-shape-3" data-aos="zoom-in-left" data-aos-once="true">
        <img src="./image/course-yelloow-svg.svg" alt="">
    </div>
    <div class="container pt-lg--85">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title section-black">
                    <h2>What you’ll learn</h2>
                    <p>We designed and tested prototypes that helped identify pain points in the account creation process. Together, we shaped the new standard.</p>
                </div>
            </div>
        </div>
        <div class="accordion course-accordion" id="accordionExample" >
            <div class="card course-card"  data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                <div class="card-header" id="headingOne">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <div class="acc-left-content d-flex">
                                <div class="acc-icon">
                                    <img src="./image/course-acc-icon.svg" alt="">
                                </div>
                                <div class="acc-head-contents">
                                    <h3>Analyzing User Data</h3>
                                    <p>Who are you developing for? How will they use your design? Building user personas can answer these.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 offset-xl-2">
                            <div class="acc-right-content d-flex">
                                <div class="course-length-badge">
                                    <span>6 Video Classes</span>
                                    <span>3.4hrs</span>
                                </div>
                                <button class="btn acc-toggle" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="icon icon-minimal-down"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul class="course-inline-list">
                            <li><a href=""><i class="icon icon-check-2"></i>Persona Creation</a></li>
                            <li><a href=""><i class="icon icon-check-2"></i>Why Persona is Important</a></li>
                            <li><a href=""><i class="icon icon-check-2"></i>Data-Driven Personas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card course-card"  data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="200">
                <div class="card-header" id="heading2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="acc-left-content d-flex">
                                <div class="acc-icon">
                                    <img src="./image/course-acc-icon.svg" alt="">
                                </div>
                                <div class="acc-head-contents">
                                    <h3>User Persona</h3>
                                    <p>Who are you developing for? How will they use your design? Building user personas can answer these.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-2">
                            <div class="acc-right-content d-flex">
                                <div class="course-length-badge">
                                    <span>6 Video Classes</span>
                                    <span>3.4hrs</span>
                                </div>
                                <button class="btn acc-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                    <i class="icon icon-minimal-down"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul class="course-inline-list">
                            <li><a href=""><i class="icon icon-check-2"></i>Persona Creation</a></li>
                            <li><a href=""><i class="icon icon-check-2"></i>Why Persona is Important</a></li>
                            <li><a href=""><i class="icon icon-check-2"></i>Data-Driven Personas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card course-card"  data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="400">
                <div class="card-header" id="heading3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="acc-left-content d-flex">
                                <div class="acc-icon">
                                    <img src="./image/course-acc-icon.svg" alt="">
                                </div>
                                <div class="acc-head-contents">
                                    <h3>Prototyping</h3>
                                    <p>Who are you developing for? How will they use your design? Building user personas can answer these.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-2">
                            <div class="acc-right-content d-flex">
                                <div class="course-length-badge">
                                    <span>6 Video Classes</span>
                                    <span>3.4hrs</span>
                                </div>
                                <button class="btn acc-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                    <i class="icon icon-minimal-down"></i>
                                </button>
                            </div>
                        </div>
                    </div> 
                </div>
    
                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul class="course-inline-list">
                            <li><a href=""><i class="icon icon-check-2"></i>Persona Creation</a></li>
                            <li><a href=""><i class="icon icon-check-2"></i>Why Persona is Important</a></li>
                            <li><a href=""><i class="icon icon-check-2"></i>Data-Driven Personas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card course-card"  data-aos="fade-up" data-aos-duration="2000" data-aos-once="true" data-aos-delay="600">
                <div class="card-header" id="heading4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="acc-left-content d-flex">
                                <div class="acc-icon">
                                    <img src="./image/course-acc-icon.svg" alt="">
                                </div>
                                <div class="acc-head-contents">
                                    <h3>Storyboarding</h3> 
                                    <p>Who are you developing for? How will they use your design? Building user personas can answer these.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-2">
                            <div class="acc-right-content d-flex">
                                <div class="course-length-badge">
                                    <span>6 Video Classes</span>
                                    <span>3.4hrs</span>
                                </div>
                                <button class="btn acc-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                    <i class="icon icon-minimal-down"></i>
                                </button>
                            </div>
                        </div>
                    </div> 
                </div>
    
                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul class="course-inline-list">
                            <li><a href=""><i class="icon icon-check-2"></i>Persona Creation</a></li>
                            <li><a href=""><i class="icon icon-check-2"></i>Why Persona is Important</a></li>
                            <li><a href=""><i class="icon icon-check-2"></i>Data-Driven Personas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection