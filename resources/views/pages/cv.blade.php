@extends('layouts.app')

@section('content')
<article class="resume-wrapper text-center position-relative">
    <div class="resume-wrapper-inner mx-auto text-left bg-white shadow-lg">
        <header class="resume-header pt-4 pt-md-0">
            <div class="media flex-column flex-md-row">
                <img class="mr-3 img-fluid picture mx-auto" src="{{ asset('images/profile.jpg') }}" alt="">
                <div class="media-body p-4 d-flex flex-column flex-md-row mx-auto mx-lg-0">
                    <div class="primary-info">
                        <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">Ramiz Kabul</h1>
                        <div class="title mb-3">Software Developer</div>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#"><i class="far fa-envelope fa-fw mr-2" data-fa-transform="grow-3"></i>ramizkabul667@gmail.com</a></li>
                            <li><a href="#"><i class="fas fa-mobile-alt fa-fw mr-2" data-fa-transform="grow-6"></i>07969320476</a></li>
                        </ul>
                    </div><!--//primary-info-->
                    <div class="secondary-info ml-md-auto mt-2">
                        <ul class="resume-social list-unstyled">
                            <li class="mb-3"><a href="http://www.linkedin.com/in/ramiz-kabul-a6978b105"><span class="fa-container text-center mr-2"><i class="fab fa-linkedin-in fa-fw"></i></span>linkedin.com/in/ramizkabul</a></li>
                            <li class="mb-3"><a href="https://github.com/Heisenberg87"><span class="fa-container text-center mr-2"><i class="fab fa-github-alt fa-fw"></i></span>github.com/Heisenberg87</a></li>
                            <li><a href="#"><span class="fa-container text-center mr-2"><i class="fas fa-globe"></i></span>Coming soon...</a></li>
                        </ul>
                    </div><!--//secondary-info-->

                </div><!--//media-body-->
            </div><!--//media-->
        </header>
        <div class="resume-body p-5">
            <section class="resume-section summary-section mb-5">
                <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Personal statement</h2>
                <div class="resume-section-content">
                    <p class="mb-0">
                        As an accomplished developer, I have implemented many projects from the ground up using a wide range of technologies both new and old. I am always looking forward to push forward best-practice for development and ensure a good level of attention to detail.  Further I am eager to achieve first-class analytical, design and problem solving skills as well as sharing & attaining knowledge from fellow colleagues.
                    </p>
                </div>
            </section><!--//summary-section-->
            <div class="row">
                <div class="col-lg-9">
                    <section class="resume-section experience-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
                        <div class="resume-section-content">
                            <div class="resume-timeline position-relative">
                                <article class="resume-timeline-item position-relative pb-5">

                                    <div class="resume-timeline-item-header mb-2">
                                        <div class="d-flex flex-column flex-md-row">
                                            <h3 class="resume-position-title font-weight-bold mb-1">Software Developer</h3>
                                            <div class="resume-company-name ml-auto">

                                                Castleton Technology plc
                                            </div>
                                        </div><!--//row-->
                                        <div class="resume-position-time">September 2016 - Present</div>
                                    </div><!--//resume-timeline-item-header-->
                                    <div class="resume-timeline-item-desc">
                                        <p>
                                            Developing solutions for the social housing market. My roles involve maintaining the current system that hands responsive, planned, voids and cyclical works for social housing contractors. Technologies exposed to include Angular, Rest and SOAP(web services).

                                        </p>

                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Angular 2</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">PHP</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">jQuery</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">MySQL</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">HTML</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">SVN</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Bootstrap</span></li>
                                        </ul>
                                    </div><!--//resume-timeline-item-desc-->

                                </article><!--//resume-timeline-item-->

                                <article class="resume-timeline-item position-relative pb-5">

                                    <div class="resume-timeline-item-header mb-2">
                                        <div class="d-flex flex-column flex-md-row">
                                            <h3 class="resume-position-title font-weight-bold mb-1">Web Developer</h3>
                                            <div class="resume-company-name ml-auto">MobileFun</div>
                                        </div><!--//row-->
                                        <div class="resume-position-time">December 2015 - September 2016</div>
                                    </div><!--//resume-timeline-item-header-->
                                    <div class="resume-timeline-item-desc">
                                        <p>
                                            Developing solutions for the in house order back end systems that runs order processing/stock management. As well as being involved in PHP development of legacy websites and new developments for Magneto based websites. Technologies exposed to include Zend Framework, Rest, Vagrant, PHP 5, MYSQL, GIT and Unit testing.
                                        </p>

                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
                                        <ul>
                                            <li>Increased my knowledge in PHP Frameworks(Zend)</li>
                                            <li>Introduced PHPUnit unit testing framework for writing simple unit tests</li>
                                            <li>Introduced to GIT  version-control system for tracking changes in code</li>
                                            <li>Vastly improved my Unix , Linux skills and package install.</li>
                                        </ul>

                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Zend</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">JavaScript</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Angular(1)</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">PHP</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">MySQL</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">HTML/SASS</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Unix</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">GIT</span></li>
                                        </ul>
                                    </div><!--//resume-timeline-item-desc-->

                                </article><!--//resume-timeline-item-->

                                <article class="resume-timeline-item position-relative pb-5">

                                    <div class="resume-timeline-item-header mb-2">
                                        <div class="d-flex flex-column flex-md-row">
                                            <h3 class="resume-position-title font-weight-bold mb-1">Software Developer(Junior)</h3>
                                            <div class="resume-company-name ml-auto">Impact Applications</div>
                                        </div><!--//row-->
                                        <div class="resume-position-time">April 2012 - December 2014</div>
                                    </div><!--//resume-timeline-item-header-->
                                    <div class="resume-timeline-item-desc">
                                        <p>Developing web-based solutions for social repair and maintenance system, my role involved write new backend web based solutions as well as mobile solutions that can be accessed on multiple devices including PCs and mobile devices. </p>
                                        <p>Using web technologies such as JavaScript, JQuery and AJAX enabled me to implement the required functionality.</p>

                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
                                        <ul>
                                            <li>Increased knowledge in PHP , MYSQL & JavaScript.</li>
                                            <li>Introduced to subversion, learned to merge code from local working copy to main trunk.</li>
                                            <li>Vastly improved my Unix and Linux skills.</li>
                                        </ul>

                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">PHP</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">JavaScript</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">jQuery</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Unix</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">SVN</span></li>
                                        </ul>
                                    </div><!--//resume-timeline-item-desc-->

                                </article><!--//resume-timeline-item-->

                                <article class="resume-timeline-item position-relative">

                                    <div class="resume-timeline-item-header mb-2">
                                        <div class="d-flex flex-column flex-md-row">
                                            <h3 class="resume-position-title font-weight-bold mb-1">Web Developer<small class="text-muted">(Intern)</small></h3>
                                            <div class="resume-company-name ml-auto">JS Wright & Co</div>
                                        </div><!--//row-->
                                        <div class="resume-position-time">2011 - 2012</div>
                                    </div><!--//resume-timeline-item-header-->
                                    <div class="resume-timeline-item-desc">
                                        <p>
                                            JS Wright & Co Ltd is one of the UK's leading Building Services providers. The company specialises in the design and installation of heating, plumbing, ventilation & air conditioning.
                                        </p>
                                        <p>Primarily developing in PHP 5/MySQL the company was looking to improve the current look and feel of the website. Liaising with end users I was able to design the website in accordance to the required specifications.
                                        </p>
                                        <p>
                                            The use of PHP and the Joomla (CMS) extensions enabled me to add core functionalities e.g. search facilities, RSS feeds, slide animation, content etc.
                                        </p>
                                        <p>
                                            Some research was carried looking into web based frameworks such as CodeIgniter that gave me an insight into developing faster and better web applications.
                                        </p>
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Codeigniter</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">CSS</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">HTML</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Joomla</span></li>
                                            <li class="list-inline-item"><span class="badge badge-primary badge-pill">Adobe Photoshop</span></li>
                                        </ul>
                                    </div><!--//resume-timeline-item-desc-->

                                </article><!--//resume-timeline-item-->


                            </div><!--//resume-timeline-->






                        </div>
                    </section><!--//experience-section-->
                </div>
                <div class="col-lg-3">
                    <section class="resume-section skills-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
                        <div class="resume-section-content">
                            <div class="resume-skill-item">
                                <h4 class="resume-skills-cat font-weight-bold">Frontend</h4>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <div class="resume-skill-name">Angular</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width:70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name">JavaScript</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name">HTML</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="resume-skill-name">CSS</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div><!--//resume-skill-item-->

                            <div class="resume-skill-item">
                                <h4 class="resume-skills-cat font-weight-bold">Backend</h4>
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <div class="resume-skill-name">PHP</div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 86%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div><!--//resume-skill-item-->

                            <div class="resume-skill-item">
                                <h4 class="resume-skills-cat font-weight-bold">Others</h4>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><span class="badge badge-light">Code Review</span></li>
                                    <li class="list-inline-item"><span class="badge badge-light">Git</span></li>
                                </ul>
                            </div><!--//resume-skill-item-->
                        </div><!--resume-section-content-->
                    </section><!--//skills-section-->
                    <section class="resume-section education-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
                        <div class="resume-section-content">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="resume-degree font-weight-bold">BSc in Computer Science</div>
                                    <div class="resume-degree-org">University of Wolverhampton</div>
                                    <div class="resume-degree-time">2006 - 2010</div>
                                </li>
                                <li>
                                    <div class="resume-degree font-weight-bold">BTEC NATIONAL Certificate for IT Practitioners</div>
                                    <div class="resume-degree-org">South Birmingham College</div>
                                    <div class="resume-degree-time">2003 - 2006</div>
                                </li>
                                <li>
                                    <div class="resume-degree font-weight-bold">7 GCSE passes at grade C and above</div>
                                    <div class="resume-degree-org">Waverley School</div>
                                    <div class="resume-degree-time">1998 - 2003</div>
                                </li>
                            </ul>
                        </div>
                    </section><!--//education-section-->
                    <section class="resume-section reference-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
                        <div class="resume-section-content">
                            <ul class="list-unstyled resume-awards-list">
                                <li class="mb-2 pl-4 position-relative">
                                    <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
                                    <div class="resume-award-name">Award Name Lorem</div>
                                    <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</div>
                                </li>
                                <li class="mb-0 pl-4 position-relative">
                                    <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
                                    <div class="resume-award-name">Award Name Ipsum</div>
                                    <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque.</div>
                                </li>
                            </ul>
                        </div>
                    </section><!--//interests-section-->
                    <section class="resume-section language-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Language</h2>
                        <div class="resume-section-content">
                            <ul class="list-unstyled resume-lang-list">
                                <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>
                                <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">Urdu</span></li>
                            </ul>
                        </div>
                    </section><!--//language-section-->
                    <section class="resume-section interests-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
                        <div class="resume-section-content">
                            <ul class="list-unstyled">
                                <li class="mb-1">Gym</li>
                                <li class="mb-1">Cricket</li>
                                <li class="mb-1">Football</li>
                                <li class="mb-1">Cooking</li>
                            </ul>
                        </div>
                    </section><!--//interests-section-->

                </div>
            </div><!--//row-->
        </div><!--//resume-body-->
    </div>
</article>
@endsection
