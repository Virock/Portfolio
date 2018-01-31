<?php
require_once 'methods.php';
topOfPage("Victor Ngozi Ahuwanya", "Resume, Portfolio, Victor, Ahuwanya, Ngozi, Programmer");
pageHeader("PERSONAL RESUME", "images/bg.jpg", true);
navLinks(true);
about();
?>
<div class="wthreeskills" id="skills">
    <div class="container-fluid">
        <h3>MY SKILLS</h3>

        <div class="wthreeskills-grids">
            <div class="col-md-offset-2 col-md-8 col-md-offset-2 wthreeskills-grid wthreeskills-grid-2">
                <h4>TECHNICAL SKILLS</h4>

                <div class="bar_group">
                    <div class='bar_group__bar thin' label='PHP' show_values='true' tooltip='true' value='85'></div>
                    <div class='bar_group__bar thin' label='CSS' show_values='true' tooltip='true' value='80'></div>
                    <div class='bar_group__bar thin' label='HTML' show_values='true' tooltip='true' value='95'></div>
                    <div class='bar_group__bar thin' label='JAVASCRIPT' show_values='true' tooltip='true' value='86'></div>
                    <div class='bar_group__bar thin' label='C++' show_values='true' tooltip='true' value='80'></div>
                    <div class='bar_group__bar thin' label='C' show_values='true' tooltip='true' value='90'></div>
                    <div class='bar_group__bar thin' label='C#' show_values='true' tooltip='true' value='88'></div>
                    <div class='bar_group__bar thin' label='MIKROC' show_values='true' tooltip='true' value='90'></div>
                    <div class='bar_group__bar thin' label='JAVA' show_values='true' tooltip='true' value='92'></div>
                    <div class='bar_group__bar thin' label='JSP' show_values='true' tooltip='true' value='88'></div>
                    <div class='bar_group__bar thin' label='SQL' show_values='true' tooltip='true' value='85'></div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Skills-ends-here -->

    <!-- services-starts-here -->
    <div class="services" id="service"> 
        <div class="container">	 
            <h3 class="agileits-title">MY INTERESTS</h3>
            <div class="services-w3ls-row">
                <div class="col-md-3 services-grids">
                    <div class="w3agile-servs-img">
                        <div class="icon-holder">
                            <span class="glyphicon glyphicon-queen" aria-hidden="true"></span>
                        </div>
                        <h4 class="mission">Sports </h4>
                        <p class="description">Love playing soccer</p>
                    </div>
                </div>
                <div class="col-md-3 services-grids">
                    <div class="w3agile-servs-img">
                        <div class="icon-holder">
                            <span class="fa fa-gears icon" aria-hidden="true"></span>
                        </div>
                        <h4 class="mission">Working</h4>
                        <p class="description">Yes! I'm a workaholic</p>
                    </div>
                </div>
                <div class="col-md-3 services-grids">
                    <div class="w3agile-servs-img">
                        <div class="icon-holder">
                            <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
                        </div>
                        <h4 class="mission">Video Games</h4>
                        <p class="description">Skyrim!!! Need i say more?</p>
                    </div>
                </div> 
                <div class="col-md-3 services-grids">
                    <div class="w3agile-servs-img">
                        <div class="icon-holder">
                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        </div>
                        <h4 class="mission">Music</h4>
                        <p class="description">Love me some calm tunes</p>
                    </div>
                </div> 	
                <div class="clearfix"> </div>
            </div>	 			
        </div>	 			
    </div>			
    <!-- //services-ends-here -->

    <!-- Experience-starts-here -->
    <div class="aitsresumewthree" id="experience">
        <div class="container">
            <div class="aitsresumewthree-tag">
                <h3 class="title">MY EXPERIENCE</h3>
            </div>
            <div class="load_more">
                <ul id="myList">
                    <li class="aitsaitsresumewthreeli-1">
                        <div class="l_g">
                            <div class="l_g_r g_r">
                                <div class="work">
                                    <div class="work-info"> 
                                        <div class="col-md-6 work-grid work-left"> 
                                            <h4>2016 - 2017</h4>
                                        </div>
                                        <div class="col-md-6 work-grid work-right"> 
                                            <h5>Freelance</h5>
                                            <p>I basically built whatever application or website i was asked to build by my clients.</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="work-info"> 
                                        <div class="col-md-6 work-grid work-right work-right2"> 
                                            <h4>2010 - 2011</h4>
                                        </div>
                                        <div class="col-md-6 work-grid work-left work-left2"> 
                                            <h5>E-Network</h5>
                                            <p>I was a cyber cafe attendant. I solved any technical issue that came up and handled finances. </p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="l_g">
                            <div class="l_g_r g_r">
                                <div class="work">
                                    <h4 class="title title2">EDUCATION</h4>
                                    <div class="work-info"> 
                                        <div class="col-md-6 work-grid work-left"> 
                                            <h4>2017-2019</h4>
                                        </div>
                                        <div class="col-md-6 work-grid work-right"> 
                                            <h5 class="univ">Graduate</h5>
                                            <p>I'm currently at California State University, Los Angeles conducting my graduate studies in computer science.</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="work-info"> 
                                        <div class="col-md-6 work-grid work-right work-right2"> 
                                            <h4>2010-2015</h4>
                                        </div>
                                        <div class="col-md-6 work-grid work-left work-left2"> 
                                            <h5>Undergraduate</h5>
                                            <p>I studied Electronic Engineering at the University of Nigeria, Nsukka.</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="work-info"> 
                                        <div class="col-md-6 work-grid work-left"> 
                                            <h4>2002-2008</h4>
                                        </div>
                                        <div class="col-md-6 work-grid work-right"> 
                                            <h5 class="sch">High School</h5>
                                            <p>Got my high school leaving certificate at Gideon Comprehensive High School, Oke-Afa Isolo, Lagos, Nigeria.</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="wow fadeInUp" id="loadMore">Show More <i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                <div class="wow fadeInDown" id="showLess">Show Less <i class="fa fa-chevron-up" aria-hidden="true"></i></div>
            </div>
        </div>
    </div>
    <!-- //Experience-ends-here -->

    <!-- Portfolio-starts-here -->
    <div id="portfolio" class="portfolio">
        <div class="container">
            <h3 class="agile-title">My Projects</h3>
            <div class="gallery_gds">
                <div class="filtr-container">
                    <div class="col-md-3 filtr-item" data-category="1, 4" data-sort="Busy streets">
                        <div class="agileits-img">
                            <a href="android/reverse_dictionary_offline/" title="Reverse dictionary (offline)">
                                <img src="images/reverse-dictionary.jpg" alt="Reverse dictionary (offline)" class="img-responsive img-style row2" /> 
                            </a> 
                        </div>
                        <div class="agileits-img">
                            <a href="web/assetget/" title="Assetget">
                                <img src="images/assetget.png" alt="Assetget" class="img-responsive img-style row2" /> 
                            </a> 
                        </div>
                    </div>
                    <div class="col-md-6 filtr-item" data-category="2, 3" data-sort="Luminous night">
                        <a href="android/reverse_dictionary_online/" title="Reverse dictionary (online)">
                                <img src="images/reverse-dictionary-online.jpg" alt="" class="img-responsive img-style row2" /> 
                            </a> 	
                        <div class="col-md-6 agileits-img g2">
                            <a href="web/POI/" title="Points of Interests in Calstatela">
                                <img src="images/POI.png" alt="Points of Interests in Calstatela" class="img-responsive img-style row2" />
                            </a>	
                        </div>
                        <div class="col-md-6 agileits-img g4">
                            <a href="images/coming_soon.png" class="swipebox" title="Coming soon">
                                <img src="images/pro6.jpg" alt="" class="img-responsive img-style row2" />
                            </a>	
                        </div>
                        <div class="clearfix"> </div>
                        <a href="web/crossroads/" title="Crossroads">
                            <img src="images/crossroads.png" alt="Crossroads" class="img-responsive img-style row2" />
                        </a>
                    </div>
                    <div class="col-md-3 filtr-item" data-category="1, 4" data-sort="Busy streets">
                        <div class="agileits-img">
                            <a href="web/youtube_to_spotify/" title="Youtube to Spotify">
                                <img src="images/export_small.png" alt="" class="img-responsive img-style row2" /> 
                            </a> 
                        </div>
                        <div class="agileits-img">
                            <a href="images/coming_soon.png" class="swipebox" title="Coming soon">
                                <img src="images/g6.jpg" alt="" class="img-responsive img-style row2" /> 
                            </a> 
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>  
    </div>    
    <?php
    require_once 'bottomOfPage.php';
    