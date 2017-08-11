@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h6 class="description">LL.M. GERMANY</h6>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading"><b>LL.M. GERMANY</b></div>

                <div class="panel-body">
                    <div class="alert alert-info" role="alert">
                        <p>October 27–28, 2017 | Cologne, Germany</p>
                    </div>
                    <p><b>When and where will they take place?</b><br>
                    October 27–28, 2017 – Mediengruppe RTL, Picassoplatz 1, 50679 Cologne,Germany</p>
                    <p><b>Who will you meet?</b><br>
                    We expect a range of U.S law Schools, law firms, law students, law clerks, postgraduates, doctoral candidates, young professionals and service providers.</p>
                    <p><b>Your benefits</b>
                    <ul>
                    <li>get to know U.S. law schools and local law firms</li>
                    <li>one-on- one interviews with law schools and local law firms</li>
                    <li>food and beverage catering the day of the fairs</li>
                    <li>networking opportunities</li></ul>
                    <p><b>Participation</b><br>
                    Participation is free of charge for fair and conference attendees.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="http://via.placeholder.com/1200x720" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="http://via.placeholder.com/1200x720" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="http://via.placeholder.com/1200x720" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="http://via.placeholder.com/1200x720" alt="...">
        </a>
    </div>
</div>

<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="" alt="" />
            </div>
        </div>
    </div>
</div>
@if (Auth::guest())
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-danger" role="alert">
                   <center><p>Did we catch your interest? Then register here for LEXPO 2017</p></center>
                   <center><a href="/register" class="btn btn-primary">Register</a></center>
                </div>
            </div>
        </div>
    </div>
@else
@endif

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h6 class="description">DAJV LL.M. SEMINAR</h6>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading"><b>DAJV LL.M. SEMINAR</b></div>

                <div class="panel-body">
                    <div class="alert alert-info" role="alert">
                        <p>Friday, October 27, 2017<br>
                        9:00 a.m. – 7:30 p.m.<br>
                        Fritz Thyssen Stiftung, Apostelnkloster 13–15, 50678 Cologne, Germany</p>
                    </div>
                    <p>Most of the law students you will meet on October 28, 2017 will take part in a day-long seminar on Friday. The seminar contains several workshops, each of which address the benefits of an American LL.M. and studying in the U.S.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h6 class="description">LL.M. APPLICATIONINTERVIEWS // LAW FIRMS INTERVIEWS?</h6>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading"><b>LL.M. APPLICATIONINTERVIEWS // LAW FIRMS INTERVIEWS?</b></div>

                <div class="panel-body">
                    <p>This year, we provide the huge opportunity for candidates to meet law school representatives in one-on- one interviews. Law students have the opportunity to indicate their interest in financial aid when registering for the fair. Rooms and time slots are limited and will primarily be assigned to law schools willing to provide fee waivers, tuition waivers, or scholarships to members of DAJV.</p>
                    <center><iframe width="550" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAd-CKgZ2uQupLaQx7rxgfWvP-feQiqLVE&q=Fritz+Thyssen+Stiftung,Cologne+Germany" allowfullscreen></iframe></center>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
