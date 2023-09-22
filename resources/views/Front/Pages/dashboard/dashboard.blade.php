@extends('Front.Layout.layout')
@section('content')
    {{--homepage section--}}
    <div class="homepage"
         style="background-image: url('https://raw.githubusercontent.com/shudhuiami/shudhuiami.github.io/vue/static/images/home-bg.jpg')">
        <div class="overlay">
            <h1 class="title">
                Rahat <br>
                Chowdhury
            </h1>
        </div>
    </div>

    <div class="section-wrapper">
        <div class="inner-container">
            <div class="section-header">
                <span>
                    Get to Know
                </span>
                <h2 class="title">About Me</h2>
            </div>

            {{--about--}}
            <div class="about-section">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5">
                        <img src="/images/profile-1.jpg" alt="about me image" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <div class="about-desc-content">
                            <h1 class="title fw-light">I'm Rahat Chowdhury</h1>
                            <p class="fw-light my-3">
                                Hi! I am Ahmed zobayer and I like to introduce myself as a Full Stack Web Developer.
                                I have been working as a web Developer for almost 4 years. I like to work with new
                                technologies and learn new things. I mainly started learning web development as a
                                hobby and now it has become my profession.
                            </p>

                            <p class="fw-light my-3">
                                Most of my work was based on PHP, Laravel Framework. I did some projects fully based on
                                raw PHP and some based on Laravel, although both raw PHP and frameworks have their own
                                advantages and disadvantages, it mostly comes down to workflow preferences and demands
                                of the project. I am familiar with laravel MVC Pattern and the huge package library of
                                laravel.
                            </p>

                            <p class="fw-light my-3">
                                For templating and front-end stability I have experience of developing Web Applications
                                based on Vue.js (The Progressive JavaScript Framework) and Angular CLI. I have also
                                worked on Laravel VueJS SPA project. I am also familiar with Flask, a python framework
                                for web development. And Tkinter is a Python binding to the Tk GUI toolkit.
                            </p>

                            <p class="fw-light my-3">
                                I also have experience building custom JS plugins. redishketch-romeo a HTTP Request
                                module(JS Plugin), which can be used in any JavaScript project without any kind of
                                plugins and vue-cli-laravel-pagination is one of my latest JS plugins. I have experience
                                of handling ubuntu server and linux servers.
                            </p>

                            <p class="fw-light my-3">I have been handling linux servers for more than two years.</p>

                            <div class="about-desc-more text-start mt-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="about-desc-info">
                                            <b>Age :</b>
                                            <span>21</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-desc-info">
                                            <b>Location :</b>
                                            <span>Jessore, Bangladesh</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-desc-info">
                                            <b>Degree :</b>
                                            <span>Graduate</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-desc-info">
                                            <b>Skype :</b>
                                            <a href="tel:gtomdesign" class="text-decoration-none text-white">Rahat
                                                Chowdhury</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-desc-info">
                                            <b>Phone :</b>
                                            <a href="tel:gtomdesign" class="text-decoration-none text-white">01708-746354</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-desc-info">
                                            <b>Email :</b>
                                            <a href="tel:gtomdesign" class="text-decoration-none text-white">crahat4@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-wrapper">
        <div class="inner-container">
            <div class="section-header">
                <span>
                 Abilities
                </span>
                <h2 class="title">My Skills</h2>
            </div>

            {{--  my skills--}}
            <div class="section-skills-wrap">
                <div class="row">
                    <div class="col-md-6">
                        <div class="resume-panel">
                            <div data-wow-none-duration="1.5s" class="mb-4 wow-none fadeInUp"><p>UI Design</p>
                                <div class="progress mt-2">
                                    <div role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"
                                         class="progress-bar" style="width: 98%;"></div>
                                </div>
                            </div>
                            <div data-wow-none-duration="1.5s" class="mb-4 wow-none fadeInUp"><p>JavaScript</p>
                                <div class="progress mt-2">
                                    <div role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                         class="progress-bar" style="width: 90%;"></div>
                                </div>
                            </div>
                            <div data-wow-none-duration="1.5s" data-wow-none-delay=".2s" class="mb-4 wow-none fadeInUp">
                                <p>PHP &amp; MYSQL</p>
                                <div class="progress mt-2">
                                    <div role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"
                                         class="progress-bar" style="width: 95%;"></div>
                                </div>
                            </div>
                            <div data-wow-none-duration="1.5s" data-wow-none-delay=".3s" class="mb-4 wow-none fadeInUp">
                                <p>Laravel/Lumen</p>
                                <div class="progress mt-2">
                                    <div role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                         class="progress-bar" style="width: 90%;"></div>
                                </div>
                            </div>
                            <div data-wow-none-duration="1.5s" data-wow-none-delay=".4s" class="mb-4 wow-none fadeInUp">
                                <p>jQuery &amp; other Javascript library</p>
                                <div class="progress mt-2">
                                    <div role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"
                                         class="progress-bar" style="width: 98%;"></div>
                                </div>
                            </div>
                            <div data-wow-none-duration="1.5s" data-wow-none-delay=".4s" class="mb-0 wow-none fadeInUp">
                                <p>Python</p>
                                <div class="progress mt-2">
                                    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                         class="progress-bar" style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 skills-img-wrapper"><img data-wow-none-duration="1s"
                                                                  src="https://raw.githubusercontent.com/shudhuiami/shudhuiami.github.io/vue/static/images/skills.svg"
                                                                  alt="Skills"
                                                                  class="skills-img img-fluid wow-none fadeInUp"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-wrapper">
        <div class="inner-container">
            <div class="section-header">
                <span>
                 What i do
                </span>
                <h2 class="title">My Services</h2>
            </div>
            <!--My skills-->
            <div class="service-section">
                <div class="row mt-4">
                    <div class="col-lg-4 col-sm-6">
                        <div class="each-service p-4">
                            <img src="/images/web_design.jpg" alt="service" class="service-img">
                            <div class="service-list-num">
                                <span>01</span>
                            </div>
                            <div class="service-list-content">
                                <h5 class="title">Web Design</h5>
                                <p class="desc mt-3">Designing your product plays an important role for the future of
                                    the
                                    product. A user friendly look and futuristic design is loved by all kind of
                                    users</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="each-service p-4">
                            <img src="/images/web_development.jpg" alt="service" class="service-img">
                            <div class="service-list-num">
                                <span>02</span>
                            </div>
                            <div class="service-list-content">
                                <h5 class="title">Web Development</h5>
                                <p class="desc mt-3">I manage this part based on PHP, Laravel, Bootstrap, Vue.Js,
                                    Angular, React and all modern web services to build a smooth and upgrade solution
                                    for an Application.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="each-service p-4">
                            <img src="/images/mobile-app.jpg" alt="service" class="service-img">
                            <div class="service-list-num">
                                <span>03</span>
                            </div>
                            <div class="service-list-content">
                                <h5 class="title">Mobile Application</h5>
                                <p class="desc mt-3">Our main tools are React native and Flutter to build a native
                                    Android and iOS application by one writing and both solution formula to manage
                                    clients time and financial budget.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center mt-5">
                        <a href="javascript:void(0)" class="btn">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<footer class="footer">
    <div class="container">
        <p class="copyright text-center mb-0">© Rahat Chowdhury 2023 | All Right Reserved</p>
    </div>
</footer>
@endsection
