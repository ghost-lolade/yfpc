    @extends('layout')
    @section('content')
    <style>
    .service {
        position: relative;
        width: 100%;
        /* max-width: 800px; Maximum width */
        /* margin: 0 auto; Center it */
      }

      /* .servicebox {
          margin-bottom: 40px;
      } */
      .servicebox div.space {
          height: 80px;
          background-color: red;
          position: relative;

      }
      
      .service .content {
        position: absolute; /* Position the background text */
        bottom: 0; /* At the bottom. Use top:0 to append it to the top */
        background: rgb(0, 0, 0); /* Fallback color */
        background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
        color: #f1f1f1; /* Grey text */
         /* Full width */
        padding: 20px; /* Some padding */
      }

      .service .content h1 {
          font-size: 30px
      }
      .servicerow .words p {
          font-size: 20px;
          padding: 8px;
          line-height: 30px;
      }
      
      .servicerow .words li {
          font-size: 18px;
          padding: 5px;
          line-height: 20px;
          padding-left: 8px;
      }
      .words h3 {
          padding-left: 8px;
          font-weight: 800;
      }
    </style>


    <div class="aboutbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="abouttitlepage">
                        <h2>SERVICE TO HUMANITY</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section class="servicerow">
        <div class="row servicebox">
            <div class="col-md-6 col-sm-12 service">
                <img src="images/pexels-gabby-k-6238120.jpg" alt="Notebook" style="width:100%;">
                <div class="content">
                <h1>Youthful Empowerment</h1>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 words">
                <p>This is the centerpiece of Youth For Purpose Canada to adequately help young adults to gain access to resources where with they are encouraged
                    to transforms their consciousness in the theme of their beliefs, values and cultural backgrounds</p>
                <p>Our youth empowerment program aims at improving the quality of life channeling younger people to participate in school scholarship programs in Universities across the world. This is the gateway to intergenerational equality.</p>
            </div>
            <div class="col-md-12 space"></div>
        </div>
        <div class="row servicebox">
            <div class="col-md-6 col-sm-12 words">
                <p>Our volunteers are always in search for information about job openings, scholarship and government aids in Canada.
                    The requirements for filling these opportunities are diligently sourced and communicated to our members.</p>
                <p>Our volunteers are further tasked with a thorough detailed discuss, teaching on our platforms about what to do and how to get these governmental aid.</p>
            </div>
            <div class="col-md-6 col-sm-12 service">
                <img src="images/pexels-rfstudio-3059748.jpg" alt="Notebook" style="width:100%;">
                <div class="content">
                    <h1>Access To Schorlarship</h1>
                </div>
            </div>
            <div class="col-md-12 space"></div>
        </div>
        <div class="row servicebox">
            <div class="col-md-6 col-sm-12 service">
                <img src="images/pexels-rodnae-productions-6646946.jpg" alt="Notebook" style="width:100%;">
                <div class="content">
                <h1>Community Service</h1>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 words">
                <p>Community is the host of every individual. We therefore understand how important it is to engage with not just our environment but the individuals that make up our community
                     with gestures that resonates to neighboring community and the society at large.</p>
                <p>Youth For Purpose Canada have dedicated minimum of 200 hours per individual to volunteerism in community service for the year 2021.
                </p>
                <h3>Our concerted effort to community services includes:</h3>
                <ol class="row">
                    <li class="col-md-6">Walking kids home from school.</li>
                    <li class="col-md-6">Teaching adults about internet skills.</li>
                    <li class="col-md-6">Organize books at our libraries.</li>
                    <li class="col-md-6">Visit seniors in care facilities.</li>
                    <li class="col-md-6">Fix broken signposts and so much more.</li>
                </ol>
            </div>
            <div class="col-md-12 space"></div>
        </div>
        <div class="row servicebox">
            <div class="col-md-6 col-sm-12 words">
                <p>YFPC offers the opportunity to furthering knowledge and cultural capital, learning about places and cultures, and gaining intercultural skills in the process.
                 To be prepared to live well and responsibly in a technology driven world without boundaries.
                 Youths are to be considered “global citizens” in today’s world where some level of international competence are required.
                 Whether our youths school at home or abroad, they will need to work effectively with others from very different and diverse backgrounds. This may be made more understandable in the case of business.
                </p>
                <p>YFPC Global Engagement also is functional at management of study abroad opportunities, management of partner exchange programs, 
                    facilitation of international research collaborations, dealing with visa and work permit issues for incoming and outgoing students and faculty, 
                    orientations for inbound students, pre-departure briefings for outbound students.</p>
            </div>
            <div class="col-md-6 col-sm-12 service">
                <img src="images/pexels-slondotpics-408503.jpg" alt="Notebook" style="width:100%; height:100%">
                <div class="content">
                <h1>Global Engagement</h1>
                </div>
            </div>
            <div class="col-md-12 space"></div>
        </div>
    </section>
    @stop