@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
           <h6 class="description">MEET THE LAW SCHOOLS</h6>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <b>MEET THE LAW SCHOOLS</b>
                </div>

                <div class="panel-body">
                    <p>The following Law Schools will be attending the LL.M. Fairs 2017:</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading clearfix">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="https://s3.amazonaws.com/images.llmfairusa.com/avatar.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            Law School 1
                                            <div class="pull-right">
                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse01"
                                                    aria-expanded="false" aria-controls="collapse01"><i class="fa fa-bars"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>
                                <div class="panel-body collapse" id="collapse01">
                                    <p>Name School</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
                                    <p>@include('layouts.partials._sky')</p>
                                    <p><a href="/contactus" class="btn btn-danger pull-right">Contact us</a></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading clearfix">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="https://s3.amazonaws.com/images.llmfairusa.com/avatar.png" alt="">                                            
                                        </div>
                                        <div class="media-body">
                                            Law School 2
                                            <div class="pull-right">
                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse02"
                                                    aria-expanded="false" aria-controls="collapse02"><i class="fa fa-bars"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body collapse" id="collapse02">
                                    <p>Name School</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
                                    <p>@include('layouts.partials._sky')</p>
                                    <p><a href="/contactus" class="btn btn-danger pull-right">Contact us</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading clearfix">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="https://s3.amazonaws.com/images.llmfairusa.com/avatar.png" alt=""> 
                                        </div>
                                        <div class="media-body">
                                            Law School 3
                                            <div class="pull-right">
                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse03"
                                                    aria-expanded="false" aria-controls="collapse03"><i class="fa fa-bars"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="panel-body collapse" id="collapse03">
                                    <p>Name School</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
                                    <p>@include('layouts.partials._sky')</p>
                                    <p><a href="/contactus" class="btn btn-danger pull-right">Contact us</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                                                            
                    <p>The European LL.M. Fairs 2017 are a joint venture between <b>Lawbility</b> (Switzerland; <a href="http://www.lawbility.com" target="_blank">www.lawbility.com</a>) and the <b>German-American Lawyers’ Association DAJV</b> (Germany; <a href="http://www.dajv.de/llm-fair.html" target="_blank">www.dajv.de/llm-fair.html</a>) with a long tradition and strong expertise in brining prospective LL.M. candidates and law schools together.</p>
                    <p>Year for year, ten to twenty US law schools, local law firms, and service providers travel to the European LL.M. Fairs and present themselves to prospective LL.M. candidates. Legal professionals and LL.M. candidates will get the great opportunity to meet them. This year, in addition to the <b>fairs</b>, to <b>conferences</b> and space for <b>networking</b>, we also provide the possibility for candidates to meet <b>law school representatives</b> and <b>law firms</b> in one-on-one interviews.</p>
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection

