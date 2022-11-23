@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Remon Ayad - {{$project->title}}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="/project/css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="/project/css/style.css" />
		<link rel="icon" type="image/x-icon" href="https://remonayad-portfolio.s3.us-east-1.amazonaws.com/fav-icon/favicon.ico?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjENr%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FwEaCWV1LXdlc3QtMyJHMEUCIQCQEvDljiMArkv%2FNlArME82C3z%2FVZ0ya6QZg2fCoHFRQwIgRpctX0zkWZpsm6HUYxvfAW%2FHjuHNApYhKt6qx7R8JLYq5AIIMxAAGgwxNjc4NzM3MTQyNTYiDLGgUYIeRDtVDuVkOCrBAvZz%2F8bBlYuJt3%2BoAb26Cy9dsDL7HXM1WKZfmYIvuPV%2BCfA3%2B1KSp5yk%2BgEJJwReEiAhSaLOVO2FtgLvbMYsNuhwPq%2F2WleCMvpKuaOkLXssoIJ13c4XP33qa3YVTENfCSTSA5euKeOYjKfYnTGlh2qSHD1vM56tFCT5HzUO6Qhng%2BWATSB43nL9L9ZbtCFuyb0wGZZ34DSYpkZGKPIkDiFUkr63LujgC0pSqe4IqZqWxgHe51kisUzQdKqTR%2BMe1U%2Fg%2FUSqcgKc%2FWxSdisjG058Cym7dPeQvTTeWbxtEn8QkMA7Cpz8QVWzw15CUyWL3fXQtlmfSUGWbpIi3a%2BuT5b1Btgw3a194z5y%2FiDra%2Br5uAYRCvRZrJVOzj7kI5NmrQVO7P6f%2BJFG7%2BPrMkeX41ltLwC2TcVTKzyX75OsJdgxojCw35WXBjqzAphm3AgN%2BwdlMwF3TOilIZ0k6rJujWb7xkoRlFEOIeSHPiBnGCZzVzuco08kEjUdlUQ0pUP%2FaL%2B9tZDzyr0L2LUveiVWEL1muduFK%2FTu%2FSk%2BWh%2Bjuf9vYbvCY3poR8I01ZORHOwEVw7NOdtXQrFqU9faXB5H6q1dmn0ZB0calBwSrOOExU7PZk%2FVIj23NWAeMhwqsSBJUpGUyG4xLv%2BPjekBLTOr6MXFjK9KayoJfO4adE5PpAeX1lq4ElLZQ0VI5ZfsxmGYQhg4CHMkk06JziYLwMRIbt%2BDLS9jHnGUQRmWbZVcnep34IdFWbvCUUjEGvn%2FFnFSFId1JpKBvOEiVddaSENY1pZ8cUkGkEqSrrMp0w3Ut5r28apqmbFNt9pctWes9A9alaFXPz%2FbWn%2Fzl07XgVw%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220730T175333Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIASOFQNTBIDL3X4QQI%2F20220730%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=70d168a70307d1caadeb853363531b3044cebb04778c2fbd12e6cc9391ff076d">
</head>

<body>
    <!--Main Navigation-->
    <header>
        <style>
            /* Carousel styling */
            #introCarousel,
            .carousel-inner,
            .carousel-item,
            .carousel-item.active {
                height: 100vh;
            }


            .carousel-item:nth-child(1) {
                /* background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg'); */
                background-repeat: no-repeat;
                max-height: 720px;
                background-size: cover;
                background-position: center center;
            }
/*
            .carousel-item:nth-child(2) {
                background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }

            .carousel-item:nth-child(3) {
                background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            } */

            /* Height for devices larger than 576px */
            @media (min-width: 992px) {
                #introCarousel {
                    margin-top: -58.59px;
                }
            }

            .navbar .nav-link {
                color: #fff !important;
            }
        </style>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand nav-link" target="_blank" href="#">
                    <strong>{{$project->title}}</strong>
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                        </li>
                    </ul>

                    {{-- Socials --}}
                    <ul class="navbar-nav list-inline">
                        <!-- Icons -->
                        <li class="">
                            <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
                                rel="nofollow" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="">
                            <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow"
                                target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow"
                                target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                    {{-- End Socials --}}
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Carousel wrapper -->
        <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach ($project->images as $img)
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="{{$loop->iteration -1}}"
                    class="
                    @if ($loop->iteration -1 == 0 )
                    active
                    @endif

                    "></li>
                @endforeach
            </ol>

            <!-- Inner -->
            <div class="carousel-inner">



                @foreach ($project->images as $img)
                <!-- Single item -->
                <div class="carousel-item
                @if ($loop->iteration -1 == 0 )
                active
                @endif
                "
                style="background-image: url('{{Storage::disk('s3')->url($img->url)}}')">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                                <h1 class="mb-3">{{$project->title}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            <!-- Inner -->

            <!-- Controls -->
            <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Carousel wrapper -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
        <div class="container">
            <!--Section: Content-->
            <section>
                <div class="row">
                    <div class="col-md-6 gx-5 mb-4">
                        <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                            <div class="embed-responsive embed-responsive-16by9">
                                @if ($project->video_url == null)
                                <img src="{{ Storage::disk('s3')->url($project->images->first->url->url) }}" class="img-fluid" />
                                @else
                                <iframe class="embed-responsive-item" src="{{$project->video_url}}" allowfullscreen></iframe>
                                {{-- <iframe width="480" height="250" src="{{ $project->video_url }}"></iframe> --}}
                                @endif
                            </div>
                            {{-- <a href="https://www.youtube.com/embed/b1oSGEEIxt0">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a> --}}
                        </div>
                    </div>

                    <div class="col-md-6 gx-5 mb-4">
                        <h4><strong>{{$project->title}}</strong></h4>
                        <p class="text-muted">
                            {{$project->desc}}
                        </p>
                        <hr>
                        @if ($project->url != null)
                        <label class="text-muted mx-1">URL  : <a href="{{$project->url}}" target="_blank"><p class="d-inline mx-2">Open Project</p><i class="fa fa-link"></i></a></label>
                        <hr>
                        @endif
                        @foreach ($project->services as $ser)
                        <div class="mx-2 d-inline">
                        <strong><i class="{{$ser->icon}} " > </i></strong>
                        <label class="text-muted mx-1">{{$ser->title}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!--Section: Content-->

            <hr class="my-5" />

            <!--Section: Content-->
            <section class="text-center">
                <h4 class="mb-5"><strong>{{$project->title}} images</strong></h4>

                <div class="row">

                    @foreach ($project->images as $img )
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="{{ Storage::disk('s3')->url($img->url) }}"
                                        class="img-fluid" />
                                    <a href="{{Storage::disk('s3')->url($img->url)}}" target="_blank">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </section>
            <!--Section: Content-->

            <hr class="my-5" />
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="bg-light text-lg-start">

        {{-- <div class="text-center py-4 align-items-center">
            <p>Follow MDB on social media</p>
            <a href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" class="btn btn-primary m-1"
                role="button" rel="nofollow" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="https://www.facebook.com/mdbootstrap" class="btn btn-primary m-1" role="button" rel="nofollow"
                target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/MDBootstrap" class="btn btn-primary m-1" role="button" rel="nofollow"
                target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://github.com/mdbootstrap/mdb-ui-kit" class="btn btn-primary m-1" role="button"
                rel="nofollow" target="_blank">
                <i class="fab fa-github"></i>
            </a>
        </div> --}}

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-dark" target="_blank" href="http://abanoubayad.herokuapp.com">Abanoub Ayad</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="{{asset('project/js/mdb.js')}}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="/project/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
