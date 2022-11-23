<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Remon Abdelmalak - Portfolio</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
        <meta name="author" content="templatemo">
        <!--
        Lavish HTML CSS Template
        https://templatemo.com/tm-458-lavish
        -->

		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- animate -->
		<link rel="stylesheet" href="/index/css/animate.min.css">
		<!-- bootstrap -->
		<link rel="stylesheet" href="/index/css/bootstrap.min.css">
		<!-- font-awesome -->
		{{-- <link rel="stylesheet" href="/index/css/font-awesome.min.css"> --}}
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="/dash/assets/css/nucleo-svg.css" rel="stylesheet" />
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
		<!-- fullpage -->
		<link rel="stylesheet" href="/index/css/jquery.fullPage.css">
		<!-- custom -->
		<link rel="stylesheet" href="/index/css/templatemo-style.css">
		<link rel="icon" type="image/x-icon" href="https://remonayad-portfolio.s3.us-east-1.amazonaws.com/fav-icon/favicon.ico?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjENr%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FwEaCWV1LXdlc3QtMyJHMEUCIQCQEvDljiMArkv%2FNlArME82C3z%2FVZ0ya6QZg2fCoHFRQwIgRpctX0zkWZpsm6HUYxvfAW%2FHjuHNApYhKt6qx7R8JLYq5AIIMxAAGgwxNjc4NzM3MTQyNTYiDLGgUYIeRDtVDuVkOCrBAvZz%2F8bBlYuJt3%2BoAb26Cy9dsDL7HXM1WKZfmYIvuPV%2BCfA3%2B1KSp5yk%2BgEJJwReEiAhSaLOVO2FtgLvbMYsNuhwPq%2F2WleCMvpKuaOkLXssoIJ13c4XP33qa3YVTENfCSTSA5euKeOYjKfYnTGlh2qSHD1vM56tFCT5HzUO6Qhng%2BWATSB43nL9L9ZbtCFuyb0wGZZ34DSYpkZGKPIkDiFUkr63LujgC0pSqe4IqZqWxgHe51kisUzQdKqTR%2BMe1U%2Fg%2FUSqcgKc%2FWxSdisjG058Cym7dPeQvTTeWbxtEn8QkMA7Cpz8QVWzw15CUyWL3fXQtlmfSUGWbpIi3a%2BuT5b1Btgw3a194z5y%2FiDra%2Br5uAYRCvRZrJVOzj7kI5NmrQVO7P6f%2BJFG7%2BPrMkeX41ltLwC2TcVTKzyX75OsJdgxojCw35WXBjqzAphm3AgN%2BwdlMwF3TOilIZ0k6rJujWb7xkoRlFEOIeSHPiBnGCZzVzuco08kEjUdlUQ0pUP%2FaL%2B9tZDzyr0L2LUveiVWEL1muduFK%2FTu%2FSk%2BWh%2Bjuf9vYbvCY3poR8I01ZORHOwEVw7NOdtXQrFqU9faXB5H6q1dmn0ZB0calBwSrOOExU7PZk%2FVIj23NWAeMhwqsSBJUpGUyG4xLv%2BPjekBLTOr6MXFjK9KayoJfO4adE5PpAeX1lq4ElLZQ0VI5ZfsxmGYQhg4CHMkk06JziYLwMRIbt%2BDLS9jHnGUQRmWbZVcnep34IdFWbvCUUjEGvn%2FFnFSFId1JpKBvOEiVddaSENY1pZ8cUkGkEqSrrMp0w3Ut5r28apqmbFNt9pctWes9A9alaFXPz%2FbWn%2Fzl07XgVw%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220730T175333Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIASOFQNTBIDL3X4QQI%2F20220730%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=70d168a70307d1caadeb853363531b3044cebb04778c2fbd12e6cc9391ff076d">

        <style>
            .client-logo {
                padding: 64px;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
                border-right: 1px solid rgba(71, 71, 71, 0.685);
                border-bottom: 1px solid rgba(71, 71, 71, 0.685);
                overflow: hidden;
                background: white;
                height: 160px;
            }

            .client-logo img {
                max-width: 250px;
                max-height: 120px;
                object-fit: cover;
            }
            .sm li a:hover{
                background-color: rgba(255, 255, 255, 0.863);
            }
        </style>
	</head>
	<body>

	<div id="fullpage">
        <!-- start home -->
            <div id="home" class="section"
            @if ($about->image != null)
            style="background: url({{ Storage::disk('s3')->url($about->image) }})"
            @endif
            >
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 wow fadeIn" data-wow-delay="0.9s">
                            {{-- <h1>{{$about->name}}</h1> --}}
                            <img class="m-auto" style="width: 100%;" src="/index/images/logo.png" alt="">
                            <h2 class="rotate">{{$about->titles}} </h2>
                            <p style="color:white" >{{$about->desc}}</p>
                            <a href="#work" class="btn btn-default smoothScroll wow fadeInUp" data-wow-delay="1s">Know More</a>
                            {{-- @if ($about->cv !=null)
                            <a href="{{ Storage::disk('s3')->url($about->cv) }}" class="btn btn-default smoothScroll wow fadeInUp" data-wow-delay="1s">Download CV</a>
                            @endif
                            @if ($about->pro !=null)
                            <a href="{{ Storage::disk('s3')->url($about->pro) }}" class="btn btn-default smoothScroll wow fadeInUp" data-wow-delay="1s">Certifications</a>
                            @endif --}}
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        <!-- end home -->

		<!-- start work -->
            <div id="work" class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 wow bounce">
                            <h2>SERVICES</h2>
                        </div>
                    </div>

                    <div class="row">

                        @foreach ($services as $service )
                            <div class="col-md-4 col-xs-11 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="media">
                                    <div class="media-object media-left">
                                        <i class="{{$service->icon}}"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading">{{$service->title}}</h3>
                                        <p>{{$service->desc}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
		<!-- end work -->


		<!-- start about -->
            {{-- <div id="about" class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-11 wow fadeInLeft" data-wow-delay="0.9s">
                            <h2>ABOUT ME</h2>
                            <h4 class="text-light">{{$about->JobTitle}}</h4>
                            <p>{{$about->desc}}</p>
                        </div>
                        <div class="col-md-6 col-xs-11 wow fadeInRight" data-wow-delay="0.9s">

                            @foreach ($skills  as $skill )
                                <div class="skill">
                                    <span class="text-top">{{$skill->title}} <small>{{$skill->value}}%</small></span>
                                        <div class="progress">
                                            <div
                                            @if ($skill->value<= 100 && $skill->value > 80)
                                                class="progress-bar progress-bar-primary"
                                            @elseif ($skill->value<= 80 && $skill->value > 50)
                                                class="progress-bar progress-bar-success"
                                            @elseif ($skill->value == 50)
                                            class="progress-bar progress-bar-warning"
                                            @else
                                                class="progress-bar progress-bar-danger"
                                            @endif
                                            role="progressbar" aria-valuenow="{{$skill->value}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$skill->value}}%;"></div>
                                        </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div> --}}
		<!-- end about -->

		<!-- start Projects -->
            {{-- <div id="portfolio" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="wow bounce">PROJECTS</h2>
                    </div>

                    @foreach ($projects as $project)
                    <a href="{{route('project.user.show' , $project->id)}}">
                        <div class="col-md-4 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">

                            <img src="{{ Storage::disk('s3')->url($project->images->first->url->url) }}" class="img-responsive" alt="{{$project->title}}">
                                <div class="portfolio-overlay">
                                    <h4>{{$project->title}}</h4>
                                    <h5>{{$project->services->first->title->title}}
                                        <i class="{{$project->services->first->icon->icon}}"></i>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach



                </div>
            </div>
            </div> --}}
		<!-- end Projects -->



        <!-- start clients -->
            <div id="work" class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 wow bounce">
                            <h2>MY CLIENTS</h2>
                        </div>
                    </div>

                    <div class="row m-auto">


                        @for ($i = 1 ; $i<=14 ; $i++)
                        {{-- Start Single Client --}}
                            <div class="col-md-3 col-xs-11 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="media">
                                    <div class="client-logo">
                                        <img src="/index/images/client_logos/{{$i}}.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        {{-- End Single Client --}}
                        @endfor

                    </div>
                </div>
            </div>
        <!-- end clients -->



		<!-- start contact -->
		<div id="contact" class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-lg-offset-1 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
						<address>
							<p class="contact-title">LET'S TALK</p>
							<p><i class="fa fa-phone"></i> {{$about->phone}}</p>
							<p><a href="mailto:{{$about->email}}"><i class="fa fa-envelope-o"></i>{{$about->email}}</a></p>
							<p><i class="fa fa-map-marker"></i> {{$about->address}}</p>
						</address>

                        <address>
                            <p class="">SOCIAL LINKS</p>
                            <ul class="social-icon sm" style="margin: auto;">
                                <li><a href="https://www.facebook.com/RemonAbdelmalakMe" target="_blank" class="fa fa-facebook "></a></li>
                                <li><a href="https://www.instagram.com/remonabdelmlakme" target="_blank" class="fa fa-instagram"></a></li>
                                <li><a href="https://twitter.com/remonabdme" target="_blank" class="fa fa-twitter"></a></li>
                                <li><a href="https://www.behance.net/remonabdelmalakme" target="_blank" class="fa fa-behance"></a></li>
                                <li><a href="https://www.linkedin.com/in/remonabdelmalakme" target="_blank" class="fa fa-linkedin"></a></li>

                            </ul>
                        </address>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-10 wow fadeInUp" data-wow-delay="0.6s">
						<form role="form" method="post" action="{{route('make.contact')}}">
                            @csrf
							<input name="name" type="text" name="name" value="{{old('name')}}" class="form-control" id="name" placeholder="Your Name">
							<input name="email" type="email" name="email" value="{{old('email')}}" class="form-control" id="email" placeholder="Your Email">
							<textarea name="message" rows="5" name="message"  class="form-control" id="message" placeholder="Your Message">{{old('message')}}</textarea>
							<input type="submit" class="form-control" value="SEND" >
						</form>
					</div>
					<div class="col-md-1 col-sm-1"></div>
				</div>
			</div>
		</div>
		<!-- end contact -->

		<!-- start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeIn" data-wow-delay="0.9s">
						<p>Copyright &copy; 2022
                        . Designed by <a rel="nofollow noopener" href="https://abanoubayad.herokuapp.com">Abanoub Ayad</a></p>
						<hr>
						<ul class="social-icon">
							<li><a href="https://www.linkedin.com/in/abanobayad2020" target="_blank" class="fa fa-linkedin"></a></li>
							<li><a href="https://github.com/abanobayad" target="_blank" class="fa fa-github"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->

	</div>

		<!-- jQuery -->
		<script src="/index/js/jquery.js"></script>
		<!-- bootstrap -->
		<script src="/index/js/bootstrap.min.js"></script>
		<!-- fullpage -->
		<script src="/index/js/jquery.fullPage.js"></script>
		<!-- smoothScroll -->
		<script src="/index/js/smoothscroll.js"></script>
		<!-- wow -->
		<script src="/index/js/wow.min.js"></script>
		<!-- text rotater -->
		<script src="/index/js/jquery.simple-text-rotator.js"></script>
		<!-- custom -->
		<script src="/index/js/custom.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        @include('sweetalert::alert')

    </body>
</html>
