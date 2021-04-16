@extends('frontend.layouts.dashboard')
@inject('dateFormat', 'App\Services\DateService')
@section('content')

<main id="content">
			

            <div class="section bg-medium">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="t-small" data-animate="AnimateText">News</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-lg-5">
                            <div class="c-text-block">
                                <p class="h2" data-animate="AnimateText">You can see recent financial information for Investing.com</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-6 offset-lg-1">
                            <div class="editor" data-animate="AnimateText">
                                <p>Information is very imfortant. ELLIOT Trader provide latest recent information.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section bg-base c-latest-events">
                <div class="container" data-response="events">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="t-large" data-animate="AnimateText">Turkish economic calender</h2>
                        </div>
                            <div class="col-lg-8">
                                <div class="c-news-tabs">
                                    <div class="c-tabs" data-tabs>
                                        <ul data-animate="AnimateList">
                                                <li><a data-value="2021" data-uri="eyear" class="is-active" href="index45c8.html?eyear=2021">2021</a></li>
                                                <li><a data-value="2020" data-uri="eyear" href="index1822.html?eyear=2020">2020</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </div>
            
                            <div data-response-updater="events">
                                <div class="row" data-animate="AnimateList">
                                        <div class="col-md-3 col-lg-6">
                                            <div class="c-event">
                                                <div class="t-small">
                                                    <div class="c-event__date">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="35" width="35" viewBox="0 0 35 35"><g fill="none" fill-rule="evenodd"><rect width="30" height="27" x="4.5" y="8" fill="#3DFCB0" rx="2"></rect><path fill="#151B34" d="M2 4h29v27H2z"></path><path fill="#FFF" fill-rule="nonzero" d="M30.03 2.86h-2.145a.715.715 0 000 1.43h2.145v5.72H1.43V4.29h2.145a.715.715 0 100-1.43H1.43C.64 2.86 0 3.5 0 4.29v25.74c0 .79.64 1.43 1.43 1.43h28.6c.79 0 1.43-.64 1.43-1.43V4.29c0-.79-.64-1.43-1.43-1.43zM1.43 30.03V11.44h28.6v18.59H1.43z"></path><path fill="#FFF" fill-rule="nonzero" d="M9.295 4.29h12.87a.715.715 0 000-1.43H9.295a.715.715 0 000 1.43z"></path><path fill="#FFF" fill-rule="nonzero" d="M6.435 7.15c.395 0 .715-.32.715-.715V.715a.715.715 0 00-1.43 0v5.72c0 .395.32.715.715.715z"></path><path fill="#FFF" fill-rule="nonzero" d="M25.025 7.15c.395 0 .715-.32.715-.715V.715a.715.715 0 00-1.43 0v5.72c0 .395.32.715.715.715z"></path></g></svg>
                                                            <time datetime="2021-03-31">31 Mar 2021</time>
                                                    </div>
                                                </div>
                                                
                                            </div>
            
                                        </div>
                                        <div class="col-md-3 col-lg-6">
                                            <div class="c-event">
                                                <div class="t-small">
                                                    <div class="c-event__date">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="35" width="35" viewBox="0 0 35 35"><g fill="none" fill-rule="evenodd"><rect width="30" height="27" x="4.5" y="8" fill="#3DFCB0" rx="2"></rect><path fill="#151B34" d="M2 4h29v27H2z"></path><path fill="#FFF" fill-rule="nonzero" d="M30.03 2.86h-2.145a.715.715 0 000 1.43h2.145v5.72H1.43V4.29h2.145a.715.715 0 100-1.43H1.43C.64 2.86 0 3.5 0 4.29v25.74c0 .79.64 1.43 1.43 1.43h28.6c.79 0 1.43-.64 1.43-1.43V4.29c0-.79-.64-1.43-1.43-1.43zM1.43 30.03V11.44h28.6v18.59H1.43z"></path><path fill="#FFF" fill-rule="nonzero" d="M9.295 4.29h12.87a.715.715 0 000-1.43H9.295a.715.715 0 000 1.43z"></path><path fill="#FFF" fill-rule="nonzero" d="M6.435 7.15c.395 0 .715-.32.715-.715V.715a.715.715 0 00-1.43 0v5.72c0 .395.32.715.715.715z"></path><path fill="#FFF" fill-rule="nonzero" d="M25.025 7.15c.395 0 .715-.32.715-.715V.715a.715.715 0 00-1.43 0v5.72c0 .395.32.715.715.715z"></path></g></svg>
                                                            <time datetime="2021-03-11">11</time> <span>&ndash;</span> <time datetime="2021-03-12">12 Mar 2021</time>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
            
                                        </div>
                                       
                                </div>
                            </div>
            
                </div>
            </div>


            <div class="section bg-base visible c-newsroom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="c-text-block">
                                <h2 class="t-large" data-animate="AnimateText">News</h2>
                            </div>
                        </div>
                        <div class="col-lg-8">
            
                            <div data-response="news">
            
                                <div class="c-news-tabs">
                                    <div class="c-tabs" data-tabs>
                                        <ul data-animate="AnimateList">
                                                <li><a data-value="2021" data-uri="year" class="is-active" href="index9533.html?year=2021">2021</a></li>
                                                <li><a data-value="2020" data-uri="year" href="index5e62.html?year=2020">2020</a></li>
                                                <li><a data-value="2019" data-uri="year" href="indexa68b.html?year=2019">2019</a></li>
                                                <li><a data-value="2018" data-uri="year" href="index3afc.html?year=2018">2018</a></li>
                                                <li><a data-value="2017" data-uri="year" href="index55a9.html?year=2017">2017</a></li>
                                                <li><a data-value="2016" data-uri="year" href="index580a.html?year=2016">2016</a></li>
                                                <li><a data-value="2015" data-uri="year" href="index2495.html?year=2015">2015</a></li>
                                                <li><a data-value="2014" data-uri="year" href="indexde48.html?year=2014">2014</a></li>
                                                <li><a data-value="2013" data-uri="year" href="index2d04.html?year=2013">2013</a></li>
                                                <li><a data-value="2012" data-uri="year" href="indexd20b.html?year=2012">2012</a></li>
                                                <li><a data-value="2011" data-uri="year" href="indexaacd.html?year=2011">2011</a></li>
                                        </ul>
                                    </div>
                                </div>
            
                                <div data-response-updater="news">
            
                                    <div class="c-news-list" data-animate="AnimateList">
                                            <div class="c-news-block">
                                                <div class="t-small"><time datetime="2021-02-02">02.02.2021</time></div>
                                                <h3 class="h5"><a href="sucden-financial-selects-lisa-clearing-engine-from-ateo-finance-as-its-middle-office-platform/index.html"><span>Sucden Financial Selects LISA Clearing Engine from Ateo Finance as its Middle-Office Platform</span></a></h3>
                                                <div class="tag">Press release</div>
                                            </div>
                                            <div class="c-news-block">
                                                <div class="t-small"><time datetime="2021-01-13">13.01.2021</time></div>
                                                <h3 class="h5"><a href="sucden-financial-adopts-the-nasdaq-risk-platform-to-power-its-new-multi-asset-risk-management-system/index.html"><span>Sucden Financial adopts the Nasdaq Risk Platform to power its new multi-asset risk management system</span></a></h3>
                                                <div class="tag">Press release</div>
                                            </div>
                                    </div>
                                
            
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="c-shape-dots">
                        <div class="c-shape-dots__svg" data-scroll="6"></div>
                    </div>
            
                </div>
            </div>
            
            
           
          


                <div class="bg-purple" data-animate="AnimateBand">
                    <div class="c-band-cta" style="padding:3px;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4" >
                                    <img src="images/mobile.png" alt="mobile">
                                </div>
                                <div class="col-lg-4" style="margin:auto;" >
                                    
                                    
                                </div>
                                <div class="col-lg-2" style="margin:auto;" >
                                    <img src="images/mobile-btn2.png" alt="mobile">
                                    
                                </div>
                                <div class="col-lg-2" style="margin:auto;" >
                                    <img src="images/mobile-btn1.png" alt="mobile">
                                    
                                </div>
                        </div>
                    </div>
                </div>
                
                
    </main>



<script type="text/javascript" src="frontend/js/home.js"></script>
@endsection
