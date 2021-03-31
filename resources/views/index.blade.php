@extends('layout')
@section('content')


    <!-- end header -->
    <section class="banner_section">
        <div class="banner-main">
            <img src="images/big-banner.jpg" />
            <div class="container">

                <div class="text-bg relative">
                    {{-- <h1>YFPC<br><span class="Perfect">Youth for Purpose Canada</span><br></h1>
                    <h4 class="sub-dynamics">...raising dynamic youths</h4> --}}
                    
                    {{-- <p>We are on a mission to inspire youths and younger adults to break from every limiting shackle
                        <br>holding them back from achieving their life goals.</p> --}}
                    {{-- <a href="#">Donate Now</a> --}}
                </div>

            </div>
        </div>

    </section>

    <!-- music-box  -->
    <div class="music-box" style="">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 values">
                    <div class="for-box">
                        <i><img src="images/acc_icon.png" alt="icon"/></i>
                        <h3>Accountability</h3>
                        <p>Our clear cut goals makes us believe in mutual accountability with those we work and partner with.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 values">
                    <div class="for-box">
                        <i><img src="images/empower_icon.png" alt="icon"/></i>
                        <h3>Empowerment</h3>
                        <p>Everyone involved with YFPC, from our team and supporters to people and communities 
                            should feel they can participate and make change happen.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 values">
                    <div class="for-box">
                        <i><img src="images/equality_icon.png" alt="icon"/></i>
                        <h3>Equality</h3>
                        <p>We achieve this through our work with people of diverse cultural backgrounds 
                            from around the world and our own internal practice.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 values">
                    <div class="for-box">
                        <i><img src="images/sustain_icon.png" alt="icon"/></i>
                        <h3>Sustainability</h3>
                        <p>Our focus is on long-term change to effectively challenge the state of mind that imprisons human capacity to achieve the highest heights of dreams. 
                            To ensure organizational longevity, 
                            we believe in sustainably across all parts of our work.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end music-box  -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">
                <div class="img-box">
                    <figure><img src="images/banner.jpg" alt="img" /></figure>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">
                <div class="text-box">
                    <div class="box">
                        <i><img src="images/volunteer.png" width="200" /></i>
                        <h3>Become a Volunteer</h3>
                        <p>Volunteering is the integral core of our success stories. Holding hands in the spirit of team work, deliberate effort and passionate discharge of duties.</p>
                        <p> You can volunteer in areas of interests such as research, editing, events, finance and human resources. We are always happy to welcome you anytime.
                        </p>
                        <a href="#myModal1" class="modal-button">Volunteer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- Volunteer Modal --}}
<!-- The Modal -->
<div id="myModal1" class="modal" role="dialog">
<!-- Modal content -->
        <div class="modal-content container">
            <div class="modal-header">
                <span class="closed">×</span>
                <div class="headertext offset-4">
                    <p>Be A Volunteer</p>
                </div>
            </div>
            <div class="modal-body row">
                <img class="pic" src="/images/volunteer.jpg">
                <div class="bodytext col-md-6">
                    <h3>Why Volunteer?</h3>
                    <ul>
                        <li>⦁	You’ll be doing something you’re passionate about.</li>
                        <li>⦁	You could learn new skills, or add to the ones you already have.</li>
                        <li>⦁	You have the opportunity to meet like-minded people, from diverse backgrounds and cultures</li>
                        <li>⦁	You’ll also learn, network and find mentors in the not-for-profit industry.</li>
                    </ul>
                </div>
                <div class="col-md-6 bodytext">
                    <h3>How can you volunteer</h3>
                    <p>⦁	Volunteering in the office gets you up close and personal with our work. You could be chatting to supporters, researching our programs or assisting our campaigns team.</p>
                    <p>⦁	Speaker in a YFPC group: Join an YFPC group and get the opportunity to inspire thousands of young minds such as yourself or listen to individuals who have become renown in their respective industry of choice. 
                        You could meet people with a common interest in social justice and sustainable development.</p>
                    <h3>Who can volunteer</h3>
                    <p>⦁	Anyone 18 years or older can register to volunteer. Please contact us</p>
                    <p>⦁	Internship placements at YFPC for students to gain valuable experience in the work field of community service while gaining accreditation towards the completion of relevant studies.</p>
                </div>
                
                <div class="col-md-6">
                    <form action="">
                        <div class="col-sm-12">
                            <input class="contactus" placeholder="Name" type="text" name="Name">
                        </div>
                        <div class="col-sm-12">
                            <input class="contactus" placeholder="Phone" type="tel" name="phone">
                        </div>
                        <div class="col-sm-12">
                            <input class="contactus" placeholder="Email" type="email" name="email">
                        </div> 
                        <div class="col-sm-12 mb-3">
                            <button class="send">Volunteer</button>
                            <button class="send closed">Close</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
</div>
  

    <!-- Volunteer -->
    {{-- <div id="screenshot" class="Lastestnews">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>OUR VOLUNTEERS</h2>
                        <span>We celebrate our volunteers<br>content of a page when looking at its layout. The point of using Lorem </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 box">
                    <div class="news-box box">
                        <figure><img src="images/1.jpg" alt="img" /></figure>
                        <h3>Elisha Ayantokun</h3>
                        <span>Missionary, Entrepreneur</span>
                        <p>Elisha Ayantokun is the Founder/CEO of Youth for Purpose Canada, an entrepreneur, a motivational speaker and a missionary. He is also the Founder/Senior Pastor of Christ Apostolic Church Mount Bethel in Canada. He is known for his slogan as, ‘loving God, serving people’.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                    <div class="news-box box">
                        <figure><img src="images/2.jpg" alt="img" /></figure>
                        <h3>Zacheous Somorin</h3>
                        <span> Journalist</span><span>Comment</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 ">
                    <div class="news-box box">
                        <figure><img src="images/3.jpg" alt="img" /></figure>
                        <h3>DR. Jane Chibo-Ihenacho</h3>
                        <span>General practitioner</span><span>Public health specialist</span>
                        <p>DR. Jane Chibo-Ihenacho is a highly motivated and experienced health care professional with demonstrated history working in the clinical hospital setting and healthcare industry in general; with a sound analytical, Critical thinking, problem solving and strong leadership skill.</p>
                        <ul>
                            <li>MB.BS(2008) Nigeria</li>
                            <li>MPH (2013), United kingdom</li>
                            <li>Health care Administration/Management (2016-2017) Canada</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                    <div class="news-box box">
                        <figure><img src="images/2.jpg" alt="img" /></figure>
                        <h3>Zacheous Somorin</h3>
                        <span> Journalist</span><span>Comment</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end Volunteer -->

    <!-- Road Map to Success -->

    <div id="hero-slider">
        <div id="logo" class="mask">
            <span class="logo-text masked">Ghost Dev</span>
        </div>
        <div id="slideshow">
            <div id="slides-main" class="slides">
                <div class="slide" data-index="0">
                    <div class="abs-mask">
                        <div class="slide-image" style="background-image: url(./images/rmts.jpg)"></div>
                    </div>
                </div>
                <div class="slide" data-index="1">
                    <div class="abs-mask">
                        <div class="slide-image" style="background-image: url(./images/rmts-01.jpg)"></div>
                    </div>
                </div>
                <div class="slide" data-index="2">
                    <div class="abs-mask">
                        <div class="slide-image" style="background-image: url(./images/rmts-02.jpg)"></div>
                    </div>
                </div>
                <div class="slide" data-index="3">
                    <div class="abs-mask">
                        <div class="slide-image" style="background-image: url(./images/rmts-03.jpg)"></div>
                    </div>
                </div>
            </div>
            <div id="slides-aux" class="slides mask">
                <h2 class="slide-title slide" data-index="0"><a href="#">Road Map To Success</a></h2>
                <h2 class="slide-title slide" data-index="1"><a href="#">January</a></h2>
                <h2 class="slide-title slide" data-index="2"><a href="#">February</a></h2>
                <h2 class="slide-title slide" data-index="3"><a href="#">March</a></h2>
            </div>
        </div>
        <div id="info">
            <div class="slider-title-wrapper">
                <span class="line"></span>
                <h1 class="slider-title">
                    <span>YFPC</span>
                </h1>
            </div>
            <div class="about">
                <p>
                   Road Map to success is a monthly event that takes place every last sunday of the month
                </p>
            </div>
        </div>
        <nav id="slider-nav">
            <span class="current">01</span>
            <span class="sep"></span>
            <span class="total">04</span>
        </nav>
    </div>
   
    <!-- end Road Map to Success -->

 @stop