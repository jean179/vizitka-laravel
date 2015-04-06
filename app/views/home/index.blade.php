@extends('layouts.front')

@section('header')
@include('home.partials.banner')
@stop

@section('content')
<div class="content_white">
    <h2>Добро пожаловать на сайт!</h2>
    <p>Quisque cursus metus vitae pharetra auctor, sem massa mattis semat interdum magna.</p>
</div>
<div class="featured_content" id="feature">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 feature_grid1"> <i class="fa fa-cloud-download fa-3x"></i>
                <h3 class="m_1"><a href="#">Legimus graecis</a></h3>
                <p class="m_2">Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus, sem quas potenti malesuada vel phasellus.</p>
                <a href="#" class="feature_btn">More</a> </div>
            <div class="col-md-3 feature_grid1"> <i class="fa fa-shield fa-3x"></i>
                <h3 class="m_1"><a href="#">Mazim minimum</a></h3>
                <p class="m_2">Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus, sem quas potenti malesuada vel phasellus.</p>
                <a href="#" class="feature_btn">More</a> </div>
            <div class="col-md-3 feature_grid1"> <i class="fa fa-flask fa-3x"></i>
                <h3 class="m_1"><a href="#">Modus altera</a></h3>
                <p class="m_2">Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus, sem quas potenti malesuada vel phasellus.</p>
                <a href="#" class="feature_btn">More</a> </div>
            <div class="col-md-3 feature_grid2"> <i class="fa fa-bar-chart fa-3x"></i>
                <h3 class="m_1"><a href="#">Melius eligendi</a></h3>
                <p class="m_2">Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus, sem quas potenti malesuada vel phasellus.</p>
                <a href="#" class="feature_btn">More</a> </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="content_white">
        <h2>Vel ad aliquid copiosae</h2>
        <p>No cum agam appareat vituperata ateum iusto paulo dignissim</p>
    </div>
    <div class="testimonial">
        <div class="row testimonial_top">
            <div class="col-md-6">
                <ul class="test_box">
                    <li class="test_img"><img src="thema/images/pic1.jpg" class="img-responsive" alt=""/> </li>
                    <li class="test_desc">
                        <h4><a href="#">Impetus tincidunt</a></h4>
                        <p>Vel ad aliquid copiosae, cum id impetus tincidunt, solum option laoreet ei quo. No cum agam appareat vituperata ateum iusto paulo dignissim.</p>
                    </li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="test_box">
                    <li class="test_img"><img src="thema/images/pic2.jpg" class="img-responsive" alt=""/> </li>
                    <li class="test_desc">
                        <h4><a href="#">Paulo dignissim</a></h4>
                        <p>Vel ad aliquid copiosae, cum id impetus tincidunt, solum option laoreet ei quo. No cum agam appareat vituperata ateum iusto paulo dignissim.</p>
                    </li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
        </div>
        <div class="row testimonial_bottom">
            <div class="col-md-6">
                <ul class="test_box">
                    <li class="test_img"><img src="thema/images/pic3.jpg" class="img-responsive" alt=""/> </li>
                    <li class="test_desc">
                        <h4><a href="#">Vituperata ateum</a></h4>
                        <p>Vel ad aliquid copiosae, cum id impetus tincidunt, solum option laoreet ei quo. No cum agam appareat vituperata ateum iusto paulo dignissim.</p>
                    </li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="test_box">
                    <li class="test_img"><img src="thema/images/pic4.jpg" class="img-responsive" alt=""/> </li>
                    <li class="test_desc">
                        <h4><a href="#">Appareat vituperat</a></h4>
                        <p>Vel ad aliquid copiosae, cum id impetus tincidunt, solum option laoreet ei quo. No cum agam appareat vituperata ateum iusto paulo dignissim.</p>
                    </li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop