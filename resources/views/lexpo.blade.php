@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
           <h6 class="description">LAWBILITY LEXPO</h6>
        </div>    
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading"><b>LAWBILITY LEXPO</b></div>

                <div class="panel-body">
                    <div class="alert alert-info" role="alert">
                        <p>11:00 a.m. to 10:00 p.m.<br>
                        Thursday, October 26, 2017<br>
                        Hotel Glockenhof, Sihlstrasse 31 | 8001 Zurich, Switzerland</p>
                    </div>
                <p>LEXPO is conducted in a trade-fair format, allowing <b>one-on-one discussions</b> between students and representatives from <b>law schools</b>, <b>law firms</b> and <b>service providers</b>. Meet them for attractive international LL.M. programs and opportunities to make advancements in your <b>legal career!</b></p>
                <p>In a separate room, a conference program with various speakers (law school representatives, LL.M. alumni and legal experts) addressing different topics, answering questions and holding discussions on the benefits of an LL.M. will be taking place.</p>
                <center><iframe width="550" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyAd-CKgZ2uQupLaQx7rxgfWvP-feQiqLVE&origin=Zurich+HB+Zurich+Switzerland&destination=Hotel+Glockenhof+Sihlstrasse+31+Zurich+Switzerland&mode=walking" allowfullscreen></iframe></center><br>
                <center><iframe width="550" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/streetview?key=AIzaSyAd-CKgZ2uQupLaQx7rxgfWvP-feQiqLVE&location=47.3730345,8.5363807&heading=160&pitch=22&fov=60" allowfullscreen></iframe></center>
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
           <h6 class="description">LEXPO SWITZERLAND</h6>
        </div>    
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading"><b>LEXPO SWITZERLAND</b></div>

                <div class="panel-body">
                    <div class="alert alert-info" role="alert">
                        <p>Legal Education &amp; Legal Career Exposition<br>
                        October 27, 2017 | Zurich, Switzerland</p>
                    </div>

                <p><b>For ambitious and dedicated European LL.M. candidates, law students, and legal professionals.</b></p>

                <p><b>When and where will they take place?</b><br>
                October 26, 2017 – Hotel Glockenhof, Sihlstr. 31, 8001 Zurich, Switzerland.</p>

                <p><b>Who will you meet?</b><br>
                We expect a range of U.S law schools, law firms, law students, law clerks, postgraduates, doctoral candidates, young professionals and service providers.
                </p>
                <p><b>Your benefits</b></p>
                <ul><li>get to know U.S. law schools, local law firms, and service providers</li>
                <li>one-on-one interviews with law schools and local law firms</li>
                <li>food and beverage catering the day of the fairs</li>
                <li>networking opportunities</li></ul>
                <p><b>Participation</b><br>
                Participation is free of charge for fair and conference attendees.</p>
                </div>
            </div>        
        </div>
    </div>
</div>

@endsection

<script>
    $(document).ready(function() {
    var $lightbox = $('#lightbox');
    
    $('[data-target="#lightbox"]').on('click', function(event) {
        var $img = $(this).find('img'), 
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };
    
        $lightbox.find('.close').addClass('hidden');
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
            
        $lightbox.find('.modal-dialog').css({'width': $img.width()});
        $lightbox.find('.close').removeClass('hidden');
    });
});
</script>
