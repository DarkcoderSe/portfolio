<!-- navigation -->
@extends('theme::layouts.app')

@section('content')
<nav class="navbar no-margin-bottom alt-font sidebar-nav bg-dark" style="background-color: #000 !important; ">
    <div class="container navigation-menu">
        <div class="row">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-12 col-sm-12 navbar-header margin-twenty no-margin-lr no-margin-top sm-no-margin">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand section-link" href="#home"><img src="{{URL::to('/themes/portfolio/images/kashif-profile-logo.png')}}" alt=""/></a>
            </div>
            <div class="col-md-12 margin-thirty no-margin-lr sm-no-margin">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#about" class="section-link">About Me</a></li>
                        <li><a href="#skills" class="section-link">Skills</a></li>
                        <li><a href="#education" class="section-link">Education</a></li>
                        <li><a href="#employment" class="section-link">Employment</a></li>
                        <li><a href="#portfolio" class="section-link">Portfolio</a></li>
                        <li><a href="{{ URL::to('/blog') }}" class="section-link">Blog</a></li>
                        <li><a href="#contact" class="section-link">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 margin-ten no-margin-lr sm-display-none">
                <div class="footer-social">
                    <!-- social media link -->
                    <a href="https://www.facebook.com/kashifcoder" target="_blank"><i class="fa fa-facebook icon"></i></a>
                    <a href="https://twitter.com/darkcoder1" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/kashif-saleem-98494911a/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="https://github.com/DarkcoderSe" target="_blank"><i class="fa fa-github"></i></a>

                    <!-- end social media link -->
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- end navigation -->
<!-- sidebar wrapper -->
<div class="sidebar-wrapper personal">
    <!-- intro section -->
    <section id="home" class="wow fadeIn full-screen no-padding position-relative">
        <div class="container full-screen personal-slider-content">
                    <div class="slider-typography text-left">
                        <div class="slider-text-middle-main xs-padding-eleven">
                            <div class="slider-text-middle md-text-center">
                                <span class="text-uppercase position-relative title-extra-large alt-font white-text letter-spacing-1">Hello i'm</span>
                                <span class="text-uppercase position-relative title-extra-large-3 alt-font white-text letter-spacing-1 font-weight-600">Kashif Saleem</span>
                                <span class="skills text-uppercase position-relative fast-pink-text-dark bg-black alt-font letter-spacing-2 margin-four no-margin-lr xs-display-none">Software Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="owl-slider-full full-screen owl-carousel owl-theme light-pagination square-pagination dark-pagination-without-next-prev-arrow main-slider">
            <!-- slider item -->
            <!-- <div class="item owl-bg-img full-screen" style="background-image:url('./images/me1.jpg');">
            </div> -->
            <div class="item owl-bg-img full-screen" style="background-image:url('{{URL::to('/themes/portfolio/images/me2.jpg')}}');">
            </div>
            <!-- end slider item -->
        </div>

    </section>
    <!-- end intro section -->
    <!-- about section -->
    <section id="about" class="wow fadeIn cover-background personal-about" style="background-image:url('{{URL::to('/themes/portfolio/images/home1.png')}}');background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-sm-12">
                    <!-- section title -->
                    <span class="title-sideline text-uppercase title-large alt-font black-text font-weight-600 border-color-fast-pink-dark">About Me</span>
                    <!-- end section title -->
                    <p class="text-large alt-font sm-margin-twelve sm-no-margin-lr margin-twenty-five no-margin-bottom no-margin-lr width-90">
                        Hi, I'm a Software Developer from Pakistan.
                        I hold a bachelor degree of Software Engineering from the COMSATS University Islamabad, Wah Campus.
                        Mission-driven full stack developer with a passion to develop Apps and collaboration with open source.

                    </p>
                    <ul class="flat-list flat-list-icon bottom-line-list-dark2 alt-font margin-fifteen no-margin-lr no-margin-bottom">
                        <li><span>Name:</span>Kashif Saleem</li>
                        <li><span>Email:</span><a href="mailto:darkcoder1996@gmail.com">mail@kashifsaleem.co</a></li>
                        <li><span>Phone:</span>+92 304 2823804</li>
                    </ul>
                    <a href="https://github.com/DarkcoderSe" class="btn-black btn btn-small button margin-fifteen no-margin-lr inner-link no-margin-bottom">Github Profile</a>
                    <a href="https://stackoverflow.com/story/kashifsaleem" class="btn-black btn btn-small button margin-fifteen no-margin-lr inner-link no-margin-bottom">Stack Overflow Story</a>

                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->
    <!-- skills section -->
    <section id="skills" class="wow fadeIn bg-light-gray">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-12 col-sm-12">
                    <span class="title-sideline text-uppercase title-large alt-font black-text font-weight-600 border-color-fast-pink-dark">Skills</span>
                </div>
                <!-- end section title -->
            </div>
            <div class="row margin-twelve no-margin-bottom no-margin-lr">
                <!-- features grid -->
                <div class="col-lg-4 col-md-12 col-sm-12 no-padding ">
                    <!-- features item -->
                    <div class="col-lg-12 col-md-6 col-sm-6 xs-margin-seven xs-no-margin-lr xs-display-inline-block no-padding margin-twenty-five no-margin-lr no-margin-top sm-margin-fifteen sm-no-margin-lr sm-no-margin-top">
                        <div class="col-md-2 col-sm-2 col-xs-3 no-padding"><i class="icon-desktop icon-medium"></i></div>
                        <div class="col-md-10 col-sm-10 col-xs-9 no-padding-left">
                            <span class="margin-three display-block no-margin-top alt-font no-margin-lr text-uppercase letter-spacing-1 black-text">Desktop Applications</span>
                            <p class="width-90">Worked on ElectronJS (Cross-Platform) - Web Based Desktop Applications with Laravel and Nodejs Also worked on C# Entity Framework 6 Desktop Applications with MS & MySQL Server. </p>
                        </div>
                    </div>
                    <!-- end features item -->
                    <!-- features item -->
                    <div class="col-lg-12 col-md-6 col-sm-6  xs-margin-seven xs-no-margin-lr xs-display-inline-block no-padding no-margin sm-margin-fifteen sm-no-margin-lr sm-no-margin-top">
                        <div class="col-md-2 col-sm-2 col-xs-3 no-padding"><i class="icon-target icon-medium"></i></div>
                        <div class="col-md-10 col-sm-10 col-xs-9 no-padding-left ">
                            <span class="margin-three display-block no-margin-top alt-font no-margin-lr text-uppercase letter-spacing-1 black-text">Pentesting</span>
                            <p class="width-90">Experienced with tools like Burp Suite, Uniscan/Nikto, BEEF, Metasploit, Nmap, Postman, and with Kali Linux & some GitHub open source tools.</p>
                        </div>
                    </div>
                    <!-- end features item -->
                </div>
                <!-- <div class="col-lg-4 col-md-12 col-sm-12 no-padding"> -->
                    <!-- features item -->
                    <!-- <div class="col-lg-12 col-md-6 col-sm-6 no-padding xs-margin-seven xs-display-inline-block xs-no-margin-lr margin-twenty-five no-margin-lr no-margin-top sm-margin-fifteen sm-no-margin-lr sm-no-margin-top">
                        <div class="col-md-2 col-sm-2 col-xs-3 no-padding"><i class="icon-trophy icon-medium"></i></div>
                        <div class="col-md-10 col-sm-10 col-xs-9 no-padding-left">
                            <span class="margin-three display-block no-margin-top alt-font no-margin-lr text-uppercase letter-spacing-1 black-text">Illustrator</span>
                            <p class="width-90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                        </div>
                    </div> -->
                    <!-- end features item -->
                    <!-- features item -->
                    <!-- <div class="col-lg-12 col-md-6 col-sm-6 no-padding xs-margin-seven xs-display-inline-block xs-no-margin-lr no-margin sm-margin-fifteen sm-no-margin-lr sm-no-margin-top">
                        <div class="col-md-2 col-sm-2 col-xs-3 no-padding"><i class="icon-scissors icon-medium"></i></div>
                        <div class="col-md-10 col-sm-10 col-xs-9 no-padding-left">
                            <span class="margin-three display-block no-margin-top alt-font no-margin-lr text-uppercase letter-spacing-1 black-text">Fireworks</span>
                            <p class="width-90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                        </div>
                    </div> -->
                    <!-- end features item -->
                <!-- </div> -->
                <div class="col-lg-4 col-md-12 col-sm-12 no-padding">
                    <!-- features item -->
                    <div class="col-lg-12 col-md-6 col-sm-6 no-padding xs-margin-seven xs-no-margin-lr xs-display-inline-block margin-twenty-five no-margin-lr no-margin-top md-no-margin-bottom">
                        <div class="col-md-2 col-sm-2 col-xs-3 no-padding"><i class="icon-hotairballoon icon-medium"></i></div>
                        <div class="col-md-10 col-sm-10 col-xs-9 no-padding-left">
                            <span class="margin-three display-block no-margin-top alt-font no-margin-lr text-uppercase letter-spacing-1 black-text">Web Development</span>
                            <p class="width-90">
                                <b>Back-end:</b>
                                PHP (Laravel, Wordpress), NodeJS/ExpressJS, SQL databases, in-memory databases (Redis), microservice and 3-Tier architectures. Designed and maintained several web app backends with ~100k LoC.
                                <br>
                                <b>Front-end:</b>
                                Livewire, JavaScript ECMA6+, ReactJS, Bootstrap, TailwindCSS and, JQuery.
                            </p>
                        </div>
                    </div>
                    <!-- end features item -->
                    <!-- features item -->
                    <div class="col-lg-12 col-md-6 col-sm-6 xs-margin-seven xs-no-margin-lr xs-display-inline-block no-padding no-margin no-margin-bottom">
                        <div class="col-md-2 col-sm-2 col-xs-3 no-padding"><i class="icon-tools icon-medium"></i></div>
                        <div class="col-md-10 col-sm-10 col-xs-9 no-padding-left">
                            <span class="margin-three display-block no-margin-top alt-font no-margin-lr text-uppercase letter-spacing-1 black-text">Graphic Designing</span>
                            <p class="width-90">Build Android Native Application with JAVA. Used some packages/liberaries/APIs like Volley/Retrofit, Picasso, YoutubeAPI and Card/RecyclerView.</p>
                        </div>
                    </div>
                    <!-- end features item -->
                </div>
            </div>
        </div>
    </section>
    <!-- end skills section -->
    <!-- counter section -->
    <section class="wow fadeIn bg-golden-yellow no-padding-tb xs-padding-fifteen xs-no-padding-lr">
        <div class="container">
            <div class="row">
                <!-- counter item -->
                <div class="col-md-3 col-sm-3 padding-nine xs-no-padding no-padding-lr">
                    <div class="col-md-2 xs-display-none col-sm-3 no-padding">
                        <div class="separator-line-medium-thick bg-white position-relative top9"></div>
                    </div>
                    <div class="col-md-10 col-sm-3 no-padding counter-style1 xs-text-center  xs-padding-nine xs-no-padding-lr xs-no-padding-top">
                        <span class="timer counter-number title-medium alt-font font-weight-600 black-text" data-to="20" data-speed="7000"></span>+
                        <span class="text-small black-text letter-spacing-2 text-uppercase display-block alt-font margin-two no-margin-lr">Web Developed</span>
                    </div>
                </div>
                <!-- end counter item -->
                <!-- counter item -->
                <div class="col-md-3 col-sm-3 padding-nine xs-no-padding no-padding-lr">
                    <div class="col-md-2 xs-display-none col-sm-3 no-padding">
                        <div class="separator-line-medium-thick bg-white position-relative top9"></div>
                    </div>
                    <div class="col-md-10 col-sm-3 no-padding counter-style1 xs-text-center  xs-padding-nine xs-no-padding-lr xs-no-padding-top">
                        <span class="timer counter-number title-medium alt-font font-weight-600 black-text" data-to="7" data-speed="7000"></span>
                        <span class="text-small black-text letter-spacing-2 text-uppercase display-block alt-font margin-two no-margin-lr">Desktop Applications</span>
                    </div>
                </div>
                <!-- end counter item -->
                <!-- counter item -->
                <div class="col-md-3 col-sm-3 padding-nine xs-no-padding no-padding-lr">
                    <div class="col-md-2 xs-display-none col-sm-3 no-padding">
                        <div class="separator-line-medium-thick bg-white position-relative top9"></div>
                    </div>
                    <div class="col-md-10 col-sm-3 no-padding counter- xs-text-center xs-padding-nine xs-no-padding-lr xs-no-padding-top">
                        <span class="timer counter-number title-medium alt-font font-weight-600 black-text" data-to="24" data-speed="7000"></span>
                        <span class="text-small black-text letter-spacing-2 text-uppercase display-block alt-font margin-two no-margin-lr">Pentested</span>
                    </div>
                </div>
                <!-- end counter item -->
                <!-- counter item -->
                <div class="col-md-3 col-sm-3 padding-nine xs-no-padding-top no-padding-lr xs-no-padding-bottom">
                    <div class="col-md-2 xs-display-none col-sm-3 no-padding">
                        <div class="separator-line-medium-thick bg-white position-relative top9"></div>
                    </div>
                    <div class="col-md-10 col-sm-3 no-padding counter-style1 xs-text-center">
                        <span class="timer counter-number title-medium alt-font font-weight-600 black-text" data-to="3" data-speed="7000"></span>
                        <span class="text-small black-text letter-spacing-2 text-uppercase display-block alt-font margin-two no-margin-lr">Android Apps</span>
                    </div>
                </div>
                <!-- end counter item -->
            </div>
        </div>
    </section>
    <!-- end counter section -->
    <!-- education section -->
    {{-- style="background-image:url('{{URL::to('/themes/portfolio/images/home2.png')}}');" --}}
    <section id="education" class="wow fadeIn cover-background personal-about" >
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-10 col-lg-8 col-sm-6">
                    <span class="title-sideline text-uppercase title-large alt-font black-text font-weight-600 border-color-fast-pink-dark">Education</span>
                </div>
                <!-- end section title -->
            </div>
            {{-- <div class="row">
                <!-- text -->
                <div class="col-md-10 col-lg-8 col-sm-12">
                    <p class="text-large alt-font width-90 margin-fifteen no-margin-bottom no-margin-lr">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <div class="divider-line margin-fifteen no-margin-lr"></div>
                </div>
                <!-- end text -->
            </div> --}}
            <div class="row mt-2" style="margin-top: 100px;">
                <div class="col-md-10 col-lg-8 col-sm-12">
                    <!-- education item -->
                    <div class="mt-4 col-md-6 col-sm-6 padding-fifteen no-padding-lr no-padding-top xs-padding-thirteen xs-no-padding-lr xs-no-padding-top xs-display-inline-block xs-width-100">
                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-2 no-padding">
                            <span class="alt-font title-large light-gray-text">01</span>
                        </div>
                        <div class="col-md-10 col-lg-10 col-sm-11 col-xs-10 no-padding counter-style1">
                            <span class="alt-font display-block text-uppercase black-text letter-spacing-1 margin-five no-margin-right no-margin-tb xs-no-margin">COMSATS University Islamabad, Wah Campus</span>
                            <span class="alt-font display-block text-uppercase line-height-20 medium-gray-text margin-five no-margin-right no-margin-bottom xs-no-margin">Bachelor of Software Engineering<br>2016 - 2020</span>
                        </div>
                    </div>

                    <!-- end education item -->
                    <!-- education item -->
                    <!-- <div class="col-md-6 col-sm-6 padding-fifteen no-padding-lr no-padding-top xs-padding-thirteen xs-no-padding-lr xs-no-padding-top xs-display-inline-block xs-width-100">
                        <div class="col-md-2 col-lg-2 col-sm-1  col-xs-2 no-padding">
                            <span class="alt-font title-large light-gray-text">02</span>
                        </div>
                        <div class="col-md-10 col-lg-10 col-sm-11  col-xs-10 no-padding counter-style1">
                            <span class="alt-font display-block text-uppercase black-text letter-spacing-1 margin-five no-margin-right no-margin-tb xs-no-margin">Boston University</span>
                            <span class="alt-font display-block text-uppercase line-height-20 medium-gray-text margin-five no-margin-right no-margin-bottom xs-no-margin">Visual Art & Design<br>2011 - 2013</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 padding-fifteen no-padding-lr no-padding-top xs-padding-thirteen xs-no-padding-lr xs-no-padding-top xs-display-inline-block xs-width-100">
                        <div class="col-md-2 col-lg-2 col-sm-1  col-xs-2 no-padding">
                            <span class="alt-font title-large light-gray-text">03</span>
                        </div>
                        <div class="col-md-10 col-lg-10 col-sm-11  col-xs-10 no-padding counter-style1">
                            <span class="alt-font display-block text-uppercase black-text letter-spacing-1 margin-five no-margin-right no-margin-tb xs-no-margin">Boston University</span>
                            <span class="alt-font display-block text-uppercase line-height-20 medium-gray-text margin-five no-margin-right no-margin-bottom xs-no-margin">Degree of Design<br>2009 - 2011</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 padding-fifteen no-padding-lr no-padding-top xs-padding-thirteen xs-no-padding-lr xs-no-padding-top xs-display-inline-block xs-width-100">
                        <div class="col-md-2 col-lg-2 col-sm-1 col-xs-2 no-padding">
                            <span class="alt-font title-large light-gray-text">04</span>
                        </div>
                        <div class="col-md-10 col-lg-10 col-sm-11 col-xs-10 no-padding counter-style1">
                            <span class="alt-font display-block text-uppercase black-text letter-spacing-1 margin-five no-margin-right no-margin-tb xs-no-margin">Design University</span>
                            <span class="alt-font display-block text-uppercase line-height-20 medium-gray-text margin-five no-margin-right no-margin-bottom xs-no-margin">Degree of Web Design<br>2007 - 2009</span>
                        </div>
                    </div> -->
                    <!-- end education item -->
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-10 col-lg-9">
                    <div class="col-md-6 col-sm-6 padding-fifteen no-padding-lr no-padding-top xs-padding-thirteen xs-no-padding-lr xs-no-padding-top xs-display-inline-block xs-width-100">
                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-2 no-padding">
                            <span class="alt-font title-large light-gray-text">02</span>
                        </div>
                        <div class="col-md-10 col-lg-10 col-sm-11 col-xs-10 no-padding counter-style1">
                            <span class="alt-font display-block text-uppercase black-text letter-spacing-1 margin-five no-margin-right no-margin-tb xs-no-margin">Govt Degree College, D. G. Khan</span>
                            <span class="alt-font display-block text-uppercase line-height-20 medium-gray-text margin-five no-margin-right no-margin-bottom xs-no-margin">FSc Pre-Engineering<br>2013 - 2015</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-10 col-lg-8 col-sm-12">
                    <div class="divider-line margin-fifteen no-margin-lr no-margin-top"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-lg-8 col-sm-12">
                    <span class="alt-font text-large text-uppercase quote-style1">Education is not preparation<br> for life, education is life itself.</span>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- end education section -->
    <!-- employment section -->
    <section id="employment" class="wow fadeIn bg-light-gray">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-12 col-sm-12">
                    <span class="title-sideline text-uppercase title-large alt-font black-text font-weight-600 border-color-fast-pink-dark">Employment</span>
                </div>
                <!-- end section title -->
            </div>
            <div class="row">
                <div class="margin-eight no-margin-bottom no-margin-lr">
                    <!-- employment item -->
                    <div class="col-lg-3 col-md-6 col-sm-6 overflow-hidden xs-margin-nine xs-no-margin-lr sm-margin-eleven sm-no-margin-lr sm-no-margin-top md-margin-eleven md-no-margin-lr md-no-margin-top">
                        <span class="alt-font black-text text-uppercase display-block">TekSol</span>
                        <span class="alt-font text-uppercase medium-gray-text position-relative top-minus5 display-block">Founder and CEO</span>
                        <span class="employment-year white-text bg-primary text-uppercase alt-font">Since 2019</span>
                    </div>
                    <!-- end employment item -->
                    <!-- employment item -->
                    <div class="col-lg-3 col-md-6 col-sm-6 overflow-hidden xs-margin-nine xs-no-margin-lr sm-margin-eleven sm-no-margin-lr sm-no-margin-top md-margin-eleven md-no-margin-lr md-no-margin-top">
                        <span class="alt-font black-text text-uppercase display-block">TransData International</span>
                        <span class="alt-font text-uppercase medium-gray-text position-relative top-minus5 display-block">Software Developer</span>
                        <span class="employment-year white-text bg-black text-uppercase alt-font">Since April 2021</span>
                    </div>
                    <!-- end employment item -->
                </div>
            </div>
            <div class="row">
                <div class="margin-eight no-margin-bottom no-margin-lr">
                    <!-- employment item -->
                    <div class="col-lg-3 col-md-6 col-sm-6 overflow-hidden xs-margin-nine xs-no-margin-lr sm-margin-eleven sm-no-margin-lr sm-no-margin-top md-margin-eleven md-no-margin-lr md-no-margin-top">
                        <span class="alt-font black-text text-uppercase display-block">Pak Web House</span>
                        <span class="alt-font text-uppercase medium-gray-text position-relative top-minus5 display-block">Full Stack Developer</span>
                        <span class="employment-year white-text bg-black text-uppercase alt-font">August 2020 - March 2021</span>
                    </div>
                    <!-- end employment item -->
                    <!-- employment item -->
                    <div class="col-lg-3 col-md-6 col-sm-6 overflow-hidden xs-margin-nine xs-no-margin-lr sm-margin-eleven sm-no-margin-lr sm-no-margin-top md-margin-eleven md-no-margin-lr md-no-margin-top">
                        <span class="alt-font black-text text-uppercase display-block">TrackSols pvt ltd</span>
                        <span class="alt-font text-uppercase medium-gray-text position-relative top-minus5 display-block">Sr. Software Developer</span>
                        <span class="employment-year white-text bg-black text-uppercase alt-font">January 2018 - April 2021</span>
                    </div>
                    <!-- end employment item -->
                    <!-- employment item -->
                    <div class="col-lg-3 col-md-6 col-sm-6 overflow-hidden xs-margin-nine xs-no-margin-lr">
                        <span class="alt-font black-text text-uppercase display-block">COMSATS University Islamabad</span>
                        <span class="alt-font text-uppercase medium-gray-text position-relative top-minus5 display-block">Web Developer</span>
                        <span class="employment-year white-text bg-black text-uppercase alt-font">2017 - 2018</span>
                    </div>
                    <!-- end employment item -->
                    <!-- employment item -->
                    <div class="col-lg-3 col-md-6 col-sm-6 overflow-hidden xs-margin-nine xs-no-margin-lr xs-no-margin-bottom">
                        <span class="alt-font black-text text-uppercase display-block">Pak Cyber Attackers</span>
                        <span class="alt-font text-uppercase medium-gray-text position-relative top-minus5 display-block">Ethical Hacker</span>
                        <span class="employment-year white-text bg-black text-uppercase alt-font">2014 - 2016</span>
                    </div>
                    <!-- end employment item -->
                </div>
            </div>
        </div>
    </section>
    <!-- end employment section -->
    <!-- awards section -->
    <section class="wow fadeIn xs-background-position-left-center cover-background" style="background-image:url({{URL::to('/themes/portfolio/images/me2.jpg')}});">
        <div class="container">
            <div class="row">
                <!-- text -->
                <div class="col-md-8 col-lg-6 col-sm-12 pull-right xs-text-center">
                    <span class="alt-font white-text text-uppercase title-small">Hope can give you a tremendous amount of encouragement to keep getting better, no matter how young or old you are.</span>
                    <div class="divider-line margin-twelve no-margin-lr bg-white-transparent"></div>
                </div>
                <!-- end text -->
            </div>
            <div class="row">
                <div class="col-md-8  col-lg-6 col-sm-12 pull-right xs-width-100">
                    <!-- awards item -->
                    <div class="col-md-6 col-sm-6 no-padding xs-text-center xs-margin-seven xs-no-margin-top">
                        <div class="col-md-3 col-lg-2 col-sm-1 no-padding">
                            <span class="black-text sm-white-text font-weight-600 alt-font title-extra-large-2">01</span>
                        </div>
                        <div class="col-md-9 col-lg-10 col-sm-11 no-padding counter-style1">
                            <span class="alt-font xs-no-margin display-block text-uppercase letter-spacing-1 margin-fifteen no-margin-right no-margin-tb white-text white-text line-height-18 position-relative top5">VisioSpark<br>Web Developer</span>
                        </div>
                    </div>
                    <!-- end awards item -->
                    <!-- awards item -->
                    <div class="col-md-6 col-sm-6 no-padding xs-text-center xs-margin-seven xs-no-margin-top">
                        <div class="col-md-3 col-lg-2 col-sm-1 no-padding">
                            <span class="black-text sm-white-text font-weight-600 alt-font title-extra-large-2">02</span>
                        </div>
                        <div class="col-md-9 col-lg-10 col-sm-11 no-padding counter-style1">
                            <span class="alt-font xs-no-margin display-block text-uppercase letter-spacing-1 margin-twenty-five no-margin-right no-margin-tb white-text white-text line-height-18 position-relative top5">PCA<br>Best Script Writer</span>
                        </div>
                    </div>
                    <!-- end awards item -->
                </div>
            </div>
        </div>
    </section>
    <!-- end awards section -->
    <!-- portfolio section -->
    <section id="portfolio" class="wow fadeIn work-2col gutter-medium border-bottom">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-12 col-sm-12 xs-text-center">
                    <span class="title-sideline text-uppercase title-large alt-font black-text font-weight-600 border-color-fast-pink-dark">Portfolio</span>
                </div>
                <!-- end section title -->
            </div>
            <div class="row">
                <div class="margin-eleven no-margin-bottom no-margin-lr">
                    {{-- <div class="col-md-3 col-sm-12 text-center xs-margin-eleven xs-no-margin-top xs-no-margin-lr">
                        <!-- filter navigation -->
                        <ul class="portfolio-filter sm-text-small nav nav-tabs no-border portfolio-filter-tab-style-5 alt-font text-uppercase letter-spacing-1 text-large">
                            <li class="nav active xs-display-inline xs-width-100 xs-text-center"><a href="javascript:void(0)" data-filter="*" class="position-relative xs-display-inline">All</a></li>
                            @if(count($portfolioCategories) > 0)
                            @foreach($portfolioCategories as $category)
                            <li class="nav xs-display-inline xs-width-100 xs-text-center"><a href="javascript:void(0)" data-filter=".{{ $category->name }}" class="position-relative xs-display-inline">{{ $category->display_name }} </a></li>
                            @endforeach
                            @endif
                            <!-- <li class="nav xs-display-inline xs-width-100 xs-text-center"><a href="#" data-filter=".web" class="position-relative xs-display-inline">Web Development</a></li>
                            <li class="nav xs-display-inline xs-width-100 xs-text-center"><a href="#" data-filter=".graphic" class="position-relative xs-display-inline">Graphics</a></li>
                            <li class="nav xs-display-inline xs-width-100 xs-text-center"><a href="#" data-filter=".desktop" class="position-relative xs-display-inline">Desktop Apps</a></li>
                            <li class="nav xs-display-inline xs-width-100 xs-text-center"><a href="#" data-filter=".art" class="position-relative xs-display-inline">Art</a></li> -->
                        </ul>
                        <!-- end filter navigation -->
                    </div> --}}
                    <div class="col-md-12 col-sm-12">
                        <div class="grid-gallery grid-style1 overflow-hidden">
                            <div class="tab-content personal-tab-content">
                                <ul class="row">
                                    @if(count($projects) > 0)
                                    @foreach($projects as $project)
                                    <li class="col-md-4 {{ $project->category->name ?? 'x' }}">
                                        <figure>
                                            <div class="gallery-img"><a class="work-details-popup"><img src="{{ URL::to('storage/'. $project->main_image) }}" alt="loading..."></a></div>
                                            <figcaption>
                                                <h3 class="text-large alt-font xs-margin-two xs-no-margin-lr text-uppercase letter-spacing-2 md-no-padding sm-no-padding">{{ $project->title }} <span class="text-small gray-text alt-font text-uppercase letter-spacing-2 display-block">{{ $project->type }} </span></h3>
                                            </figcaption>
                                        </figure>
                                        <!-- details popup -->
                                        <div class="popup-info">
                                            <div class="popup-main bg-white">
                                                <!-- popup title -->
                                                <section class="no-padding fix-background" style="background-image:url('{{ URL::to('storage/'. $project->main_image) }} ');">
                                                    <div class="opacity-medium bg-dark-gray"></div>
                                                    <div class="container full-screen position-relative">
                                                        <div class="slider-typography text-center">
                                                            <div class="slider-text-middle-main">
                                                                <div class="slider-text-middle">
                                                                    <span class="alt-font font-weight-600 white-text title-extra-large letter-spacing-2 text-uppercase ajax-popup-title-text">{{ $project->title }} </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <!-- end popup title -->
                                                <!-- popup text -->
                                                <section>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-5 col-sm-10 text-center center-col cursor-default">
                                                                <span class="title-small letter-spacing-2 text-uppercase alt-font black-text margin-ten no-margin-lr no-margin-top display-block">Project Description</span>
                                                                <p class="text-medium">
                                                                        {{ $project->description }}
                                                                </p>
                                                                <div class="footer-social margin-twenty no-margin-lr no-margin-bottom">
                                                                    <a href="{{ $project->facebook }}" target="_blank"><i class="fa fa-facebook icon-extra-small"></i></a>
                                                                    <a href="{{ $project->twitter }}" target="_blank"><i class="fa fa-twitter icon-extra-small"></i></a>
                                                                    <a href="{{ $project->googleplus }}" target="_blank"><i class="fa fa-google-plus icon-extra-small"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <!-- end popup text -->
                                                <!-- popup images -->
                                                <section class="no-padding">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-12 text-center"><img src="{{ URL::to('storage/'. $project->image1) }}" alt=""/></div>
                                                            <div class="col-md-4 col-sm-12 text-center sm-margin-five sm-no-margin-lr"><img src="{{ URL::to('storage/'. $project->image2) }}" alt=""/></div>
                                                            <div class="col-md-4 col-sm-12 text-center"><img src="{{ URL::to('storage/'. $project->image3) }}" alt=""/></div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 text-center">
                                                                <span class="alt-font display-block text-uppercase">Visit website and explore more!</span>
                                                                <a class="btn highlight-button-black-border btn-medium margin-three no-margin-bottom no-margin-lr" href="{{ $project->web_link }} ">{{ $project->web_title }} </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <!-- end popup call to action -->
                                            </div>
                                        </div>
                                        <!-- end details popup -->
                                    </li>
                                    @endforeach
                                    @endif


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end portfolio section -->

    <!-- contact section -->
    <section id="contact" class="wow fadeIn cover-background personal-about" style="background-image:url({{URL::to('/themes/portfolio/images/me2.jpg')}});">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-6 col-sm-6">
                    <span class="title-sideline text-uppercase title-large alt-font white-text font-weight-600 border-color-fast-pink-dark">Contact</span>
                </div>
                <!-- end section title -->
            </div>
            <div class="row">
                <div class="margin-ten no-margin-bottom blog-post blog-post-style5 no-margin-lr">
                    <!-- text -->
                    <div class="col-lg-6 col-md-8 col-sm-12 no-padding">
                        <div class="col-md-6 col-sm-6 no-padding">
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <i class="icon-map-pin icon-medium light-gray-text margin-one-half no-margin-lr"></i>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10 xs-margin-nine xs-no-margin-lr xs-no-margin-top">
                                <p class="alt-font text-uppercase">301 The Greenhouse,<br>Lahore, E2 8DY.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 no-padding">
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <i class="icon-clipboard icon-medium light-gray-text margin-one-half no-margin-lr"></i>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10 xs-margin-nine xs-no-margin-lr xs-no-margin-top">
                                <p class="alt-font text-uppercase">General Enquiries<br><a href="mailto:sales@domain.com">mail@kashifsaleem.co</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- end text -->
                </div>
            </div>
            <div class="row">
                <div class="margin-five no-margin-bottom blog-post blog-post-style5 no-margin-lr">
                    <div class="col-md-6 col-sm-12">
                        <form id="personalcontactform" action="{{ URL::to('/contact-us') }}" method="post">

                            @if($errors->any())

                                @foreach($errors->all() as $error)
                                <div class="form-row">
                                    <div class="alert alert-error">{{ $error }} </div>
                                </div>
                                @endforeach

                            @endif

                            @if (session('message'))
                                <div class="alert alert-error">{{ session('message') }} </div>
                            @endif

                            <div id="success" class="no-margin-lr"></div>
                            <!-- input -->
                            <input type="text" name="name" id="name" placeholder="* YOUR NAME" class="big-input alt-font">
                            <!-- end input -->
                            <!-- input  -->
                            <input type="text" name="email" id="email" placeholder="* YOUR EMAIL" class="big-input alt-font">
                            <!-- end input -->
                            <!-- dropdown  -->
                            <div class="select-style big-select alt-font">
                                <select id="purpose" name="type" required>
                                    <option selected>WHAT ARE YOU INTERESTED IN?</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Mobile Application">Mobile Application</option>
                                    <option value="Graphic Design">Graphic Design</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <!-- end dropdown  -->
                            <!-- textarea  -->
                            @csrf
                            <textarea name="message" id="comment" placeholder="YOUR MESSAGE" class="big-input alt-font"></textarea>
                            <!-- end textarea  -->
                            <!-- button  -->
                            <button id="personal-contact-button" type="submit" class="highlight-button-dark btn btn-medium">Submit</button>
                            <!-- end button  -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->
    <!-- footer -->
    <footer class="wow fadeIn bg-gray">
        <div class="container">
            <div class="row border-bottom padding-eight xs-padding-fifteen no-padding-lr xs-no-padding-lr">
                <div class="col-md-8 col-sm-8 text-left xs-text-center xs-margin-eleven xs-no-margin-top xs-no-margin-lr">
                    <div class="footer-social position-relative top4">
                        <!-- social media link -->
                        <a href="https://www.facebook.com/kashifcoder" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/darkcoder1" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <!-- end social media link -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-right xs-text-center">
                    <a class="inner-link" href="#home"><img src="images/logo-personal-footer.png" alt=""/></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <span class="text-small text-uppercase letter-spacing-1 alt-font">&COPY; 2019 ALL RIGHTS RESERVED</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</div>
<!-- end sidebar wrapper -->
<!-- scroll to top -->

@endsection