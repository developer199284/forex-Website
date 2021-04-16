@extends('frontend.layouts.dashboard')
@inject('dateFormat', 'App\Services\DateService')
@section('content')

<main id="content">
			

            <svg width="0" height="0" viewBox="0 0 635 754">
                <defs>
                    <clipPath id="svgPathSmall" clipPathUnits="objectBoundingBox" transform="scale(0.02, 0.0166)">
                        <path d="M38.035.49a11.928 11.928 0 00-8.46 3.5L6.735 26.83c-8.742 8.74-8.742 22.965 0 31.705l1.068 1.069 38.69-38.693A11.88 11.88 0 0050 12.451a11.88 11.88 0 00-3.505-8.46 11.922 11.922 0 00-8.46-3.5" />
                    </clipPath>
                </defs>
            </svg>
            
            <div class="c-mask c-mask--landing" data-animate="AnimateMask">
                <div class="c-mask__image">
                    <div class="media media--mask">
                        <div class="media__item">
                            <img src='../../../cdn-sucdenfinancial.azureedge.net/1/4/d/6/f/f/14d6ff9ab8d030f575648a65da131f4e924c2c47.jpg?anchor=center&amp;mode=crop&amp;width=635&amp;height=762&amp;rnd=132259819644370000' srcset='/media/ftrd3q0z/sf_solutions_header.jpg?anchor=center&mode=crop&width=635&height=762&rnd=132259819644370000 1x, /media/ftrd3q0z/sf_solutions_header.jpg?anchor=center&mode=crop&width=635&height=762&rnd=132259819644370000 2x' loading='lazy' alt='SF Solutions Header' />
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section bg-medium visible">
                <div class="container relative">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="t-small" data-animate="AnimateText">MeTaTrader</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-lg-5">
                            <div class="c-text-block">
                                <p class="h2" data-animate="AnimateText">Trusted, transparent and tailored solutions</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-6 offset-lg-1">
                            <div class="editor editor--intro" data-animate="AnimateText">
                                <p>To provide solutions to our clients' complex needs, our approach is highly flexible. We listen, understand and adapt to the needs of each business, often encountering unique requirements. Our aim is to tailor solutions and manage them with precision, so we can provide a trusted, transparent service, from execution through to post-trade - whether for corporate, institutional or broker clients.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="section bg-base c-latest-events">
                <div class="container" data-response="events">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="t-large" data-animate="AnimateText">video</h2>
                        </div>
                           
                    </div>
            
                            <div data-response-updater="events">
                                <div class="row" data-animate="AnimateList">
                                        <div class="col-md-3 col-lg-6">
                                            <div class="c-event">
                                                <div class="t-small">
                                                    <div class="c-event__date">
                                                       
                                                    </div>
                                                </div>
                                                
                                            </div>
            
                                        </div>
                                        <div class="col-md-3 col-lg-6">
                                            <div class="c-event">
                                                <div class="t-small">
                                                    <div class="c-event__date">
                                                        
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
            
                                        </div>
                                       
                                </div>
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
