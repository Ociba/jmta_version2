<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        @include('layouts.css')
    </head>
    <body class="fix-header fix-sidebar card-no-border">
        <div id="main-wrapper">
            @include('layouts.topbar')
            @include('layouts.sidebar')
            <div class="page-wrapper">
                <div class="container-fluid">
                    @include('layouts.breadcrumbs')
                    @include('layouts.messages')
                    <div class="row">
                    <div class="col-md-12 col-lg-12 col-xlg-12">
                        <div class="card card-body">
                            <div class="row">
                                <form class="form-horizontal mt-3" action="/assign-permissions/{{request()->route()->id}}" method="get">
                                @csrf
                                <div class="card-body table-responsive no-padding">
                                <div class="form-group row">
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-white text-justify">
                                    <p class="text-center font-weight-bold">BIBLE MARATHON .</p>
                                    <p class="font-weight-bold">1.	What is the Bible marathon?</p>
                                    <p>Bible marathon is the bible reading challenge of a minimum of 40 chapters per day as a precursor to enroll in the JMTA academy .</p>

                                    <p>The Bible is composed of 66 books in both old and new testament. Of these books there are 1180 chapters. If  one challenges himself/herself to read 40 chapters everyday he/she finishes the whole bible in 30 days,60 chapters takes 19 and a half days and 80 chapters 15 days.</p>
                                    <p>
                                    <p class="font-weight-bold">2.	How does one do the marathon?</p>
                                           <p> •	We don’t give a specific mode of bible reading as the academy but every one develops his or her mode. You are free to acquaint your self with better reading skills that you can outsource from any where. Our desire as the academy is to see that every marathon participant does bible reading. </p>
                                            <p>•	In bible reading reading we don’t do study. But we seek to read the story of God and in order to know the  nature and character of him(Hos.4:6a).We seek to know him(Eph.3:10,Dan.11:32b).</p>
                                            <p>•	As the academy we require every marathon participant to commit to sending us at least seven revelations on the nature and character of God on either the WhatsApp platform or on the academy website. </p>
                                            <p>•	At the completion of the book of 2Chronicles,we expect every marathon participant to give us a summary report of how the reading has impacted him or her. This can be done in writing or in an audio and or video recoding.</p> 
                                            <p>•	Then also at the end of old testament we shall expect another brief report before starting the new testament.</p>
                                            <p>•	At the completion of the entire bible then every marathon participant intending to join the academy  will be expected to fill the assessment form, then gets officially enrolled in the academy.</p> 
                                            <p>•	Besides bible reading every marathon is expected to read through other people’s revelations that are posted daily.</p> 
                                            <p>•	In the course of the marathon, we need people to present their prayer requests to the members especially about the difficulties one is facing in the marathon.</p>
                                            <p>•	As individuals, its important to set apart time strictly for bible reading.This can be done in a way that way thatone takes the 40 chapters in bits or at once daily depending on the time schedules one has.</p>

                                    </p>
                                    <p>
                                    <p class="font-weight-bold">3.	What are the benefits of doing the marathon?</p>
                                           <p> 1)	The main purpose of the bible marathon is basically to equip us with the knowledge of God.The bible is the story of God, the word of God, the spirit of God and the will of God.It therefore becomes the best and easiest way to pursue to know God (Dan.11:32b,Hos.4:6,phil.3:7-10).</p>
                                           <p> 2)	Because the will of God is encrypted in the word of God, we read the word in order to know the will of God for our lives/destiny and live it.This helps us to do it and be known by God (Mt.7:21-24).</p>
                                           <p> 3)	The marathon is about lamp some chewing and ingesting of the word of God. By so doing, we make our inner fountains rich in the word of God and one’s in dwelling presence of the spirit of God. This gives us a versatile and formidable warrior of the kingdom purposes.</p> 
                                           <p> 4)	Bible marathon is a precursor joining the John Mulinde Trumpet Academy. After finishing finish the bible in 30 days then you join the academy and take on the introductory course of Kingdom Dynamics.</p>
                                           <p> 5)	As you will realise,bible marathon is an experience that cause great inner transformation. On is able to discover who God is and who we are before God, which creates a deeper relationship with God. In other words marathon is life changing and life transforming.</p>
                                           <p> 6)	Above all the marathon challenge creates new relationships of people in pursuit of kingdom purposes. Many people have linked up with people who have greatly benefited their lives and have got solutions to their life challenges they have lived with for long without solutions Some have got formidable prayer partners and or counselors.</p> 


                                    </p>
                                </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>
        @include('layouts.javascript')
    </body>
</html>