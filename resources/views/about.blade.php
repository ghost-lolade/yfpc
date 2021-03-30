@extends('layout')
@section('content')


    <div class="aboutbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="abouttitlepage">
                        <h2>about</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <style>
        .logor {
          font-size: 200px;
          width: 100%
        }
        .about h4 strong, .row h2 {
            font-weight: 700;
            font-size: 26px
        }
        .about {
            font-weight: 500;
            line-height: 2;
            font-size: 20px;
            
        }
        
             @media screen and (max-width: 768px) {
          .col-sm-4 {
            text-align: center;
            margin: 25px 0;
          }
        }
        </style>
        
        <div class="container-fluid">
          <div class="row about">
            <div class="col-sm-8 words">
              <h2 class="center">YFPC</h2>
              
              <p>Motivate young adults as leaders to become whatever they desire in life as long as they have access to the right information and the right people who can show them the way.
                .</p>
                <h4>Youth for Purpose Canada is a humanitarian organization focused on grooming future leaders by providing high-impact interaction programs to young adults. Currently located in Canada, Youth for Purpose Canada (FYPC) also has the intent to spread around nations.
                </h4>
                <h4><strong>MISSION: </strong>Granting access to powerful life transforming network and information.</h4>
              <h4><strong>VISION: </strong>We are on a mission to inspire youths and younger adults to break from every limiting shackle holding them back from achieving their life goals.
              </h4>
            </div>
            <div class="col-sm-4">
              <img class="logor" src="images/wwpngqqqq.png" alt="" srcset="">
            </div>
          </div>
        </div>
        
        {{-- <div class="container-fluid bg-grey">
          <div class="row about">
            <div class="col-sm-6">
                <img class="logor" src="images/pexels-c-technical-6591437.jpg" alt="">
            </div>
            <div class="col-sm-6 words">
              
              <h4><strong>MISSION: </strong>Granting access to powerful life transforming network and information.</h4>
              <h4><strong>VISION: </strong>We are on a mission to inspire youths and younger adults to break from every limiting shackle holding them back from achieving their life goals.
              </h4>
            </div>
          </div>
        </div> --}}
    <div id="screenshot" class="Lastestnews">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h4>OUR VOLUNTEERS</h4>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 box">
                    <div class="news-box box">
                        <figure><img src="images/1.jpg" alt="img" /></figure>
                        <h3>Elisha Ayantokun</h3>
                        <span>Missionary, Entrepreneur</span>
                        <p>Elisha Ayantokun is the Founder/CEO of Youth for Purpose Canada, an entrepreneur, a motivational speaker and a missionary. He is also the Founder/Senior Pastor of Christ Apostolic Church Mount Bethel in Canada. He is known for his slogan as, ‘loving God, serving people’.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="news-box box">
                        <figure><img src="images/2.jpg" alt="img" /></figure>
                        <h3>Zacheous Somorin</h3>
                        <span> Journalist</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 ">
                    <div class="news-box box">
                        <figure><img src="images/3.jpg" alt="img" /></figure>
                        <h3>DR. Jane Chibo-Ihenacho</h3>
                        <span>General practitioner, <br>Public health specialist</span>
                        <p>DR. Jane Chibo-Ihenacho is a highly motivated and experienced health care professional with demonstrated history working in the clinical hospital setting and healthcare industry in general; with a sound analytical, Critical thinking, problem solving and strong leadership skill.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end music-box  -->

    @stop