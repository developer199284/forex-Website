@extends('frontend.layouts.dashboard')
@inject('dateFormat', 'App\Services\DateService')
@section('content')

<main id="content">
            <div class="section bg-medium" data-animate="SectionLanding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="c-text-block">
                                <h1 class="t-small" data-animate="AnimateText">Reports</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="c-text-block">
                                <p class="h2" data-animate="AnimateText">Read our insights and research to stay on top of change</p>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <div class="editor" data-animate="AnimateText">
                                <p>Our research team, together with the firm's experienced brokers produce commentary and analysis, covering a broad range of markets.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           
            <div class="reports-content" data-reports-content>
            
            
            
            <section class="section bg-white c-reports-noresults" data-reports-noresults>
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-align-center">
                            <p class="h6">No reports found</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section bg-dark c-reports" data-reports>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="t-large text-align-center" data-animate="AnimateText">HOW TO USE </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="h5"data-animate="Animate" >Videos</h3>
                                </div>
                            </div>
                            <div class="row" data-animate="AnimateList">
                                <div class="col-sm-1 col-lg-4">
                                    <div class="c-report-card-group">
                                        
            
                                <div class="c-report-card c-report-card--daily c-report-card--daily-base-metals">
                                    <div class="c-report-card__t">
                                        <a href="daily-base-metals/2021-04-09/index.html" class="cover">Daily Report <span>Base Metals</span></a>
                                            <p><span>Daily market commentary on LME aluminium, copper, lead, nickel, tin and zinc.</span></p>
                            
                                    </div>
                                    <div class="c-report-card__d blue">
                                        <time datetime="2021-04-09"><span>09</span>04.21</time>
                                    </div>
                                </div>
                                <div class="c-reports-archive-toggle">
                                    <a href="#" data-archive-toggle="daily-base-metals">
                                        <span>Past 5 Reports</span>
                                        <span>Close</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 24"><g transform="translate(0 .638)" fill="none" fill-rule="evenodd"><circle fill="#9435FB" cx="11.5" cy="11.5" r="11.5"/><g fill="#FFF" fill-rule="nonzero"><path d="M10.776 6.724v9.552a.724.724 0 101.448 0V6.724a.724.724 0 10-1.448 0z"/><path d="M10.776 10.776H6.724a.724.724 0 100 1.448h9.552a.724.724 0 100-1.448h-5.5z"/></g></g></svg>
                                    </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm-1 col-lg-4">
                        <div class="c-report-card-group">
                                                    
                            <div class="c-report-card c-report-card--daily c-report-card--daily-fx">
                                <div class="c-report-card__t">
                                    <a href="daily-fx/2021-04-09/index.html" class="cover">Daily Report <span>FX</span></a>
                                        <p><span>A morning report covering fundamentals and technicals for USD, EUR, GBP, JPY, and CHF</span></p>
                        
                                </div>
                                <div class="c-report-card__d yellow">
                                    <time datetime="2021-04-09"><span>09</span>04.21</time>
                                </div>
                            </div>
                                            <div class="c-reports-archive-toggle">
                                                <a href="#" data-archive-toggle="daily-fx">
                                                    <span>Past 5 Reports</span>
                                                    <span>Close</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 24"><g transform="translate(0 .638)" fill="none" fill-rule="evenodd"><circle fill="#9435FB" cx="11.5" cy="11.5" r="11.5"/><g fill="#FFF" fill-rule="nonzero"><path d="M10.776 6.724v9.552a.724.724 0 101.448 0V6.724a.724.724 0 10-1.448 0z"/><path d="M10.776 10.776H6.724a.724.724 0 100 1.448h9.552a.724.724 0 100-1.448h-5.5z"/></g></g></svg>
                                                </a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-sm-1 col-lg-4">
                                    <div class="c-report-card-group">
                                                            
                                    <div class="c-report-card c-report-card--daily c-report-card--daily-soft-charts">
                                        <div class="c-report-card__t">
                                            <a href="softs-technical-charts/2021-04-09/index.html" class="cover">Daily Report <span>Softs Technical Charts</span></a>
                                                <p><span>Technical analysis and charts for the key sugar, cocoa and coffee contracts.</span></p>
                                
                                        </div>
                                        <div class="c-report-card__d green">
                                            <time datetime="2021-04-09"><span>09</span>04.21</time>
                                        </div>
                                    </div>
                                    <div class="c-reports-archive-toggle">
                                        <a href="#" data-archive-toggle="daily-soft-charts">
                                            <span>Past 5 Reports</span>
                                            <span>Close</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 24"><g transform="translate(0 .638)" fill="none" fill-rule="evenodd"><circle fill="#9435FB" cx="11.5" cy="11.5" r="11.5"/><g fill="#FFF" fill-rule="nonzero"><path d="M10.776 6.724v9.552a.724.724 0 101.448 0V6.724a.724.724 0 10-1.448 0z"/><path d="M10.776 10.776H6.724a.724.724 0 100 1.448h9.552a.724.724 0 100-1.448h-5.5z"/></g></g></svg>
                                        </a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
            
                                    <div class="c-reports-archive" data-archive-list="daily-base-metals">
                                        <div class="c-reports-archive__list">
                                            <ol>
                                                    <li>
                                                        <p>Daily Base Metals Report</p>
                                                        <time class="h5" datetime="2021-04-08">08.04.2021</time>
                                                        <a href="daily-base-metals/2021-04-08/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Daily Base Metals Report</p>
                                                        <time class="h5" datetime="2021-04-07">07.04.2021</time>
                                                        <a href="daily-base-metals/2021-04-07/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Daily Base Metals Report</p>
                                                        <time class="h5" datetime="2021-04-06">06.04.2021</time>
                                                        <a href="daily-base-metals/2021-04-01/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Daily Base Metals Report</p>
                                                        <time class="h5" datetime="2021-03-26">26.03.2021</time>
                                                        <a href="daily-base-metals/2021-03-26/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Daily Base Metals Report</p>
                                                        <time class="h5" datetime="2021-03-25">25.03.2021</time>
                                                        <a href="daily-base-metals/2021-03-25/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                            </ol>
                                        </div>
                                        <div class="c-reports-archive__link">
                                            <a class="btn" href="indexa049.html?type=DailyBaseMetals">See archive</a>
                                        </div>
                                    </div>
            
                                    <div class="c-reports-archive" data-archive-list="daily-fx">
                                        <div class="c-reports-archive__list">
                                            <ol>
                                                    <li>
                                                        <p>Daily FX Report</p>
                                                        <time class="h5" datetime="2021-04-08">08.04.2021</time>
                                                        <a href="daily-fx/2021-04-08/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Daily FX Report</p>
                                                        <time class="h5" datetime="2021-04-07">07.04.2021</time>
                                                        <a href="daily-fx/2021-04-07/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Daily FX Report</p>
                                                        <time class="h5" datetime="2021-04-06">06.04.2021</time>
                                                        <a href="daily-fx/2021-04-06/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Daily FX Report</p>
                                                        <time class="h5" datetime="2021-03-31">31.03.2021</time>
                                                        <a href="daily-fx/2021-03-31/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Daily FX Report</p>
                                                        <time class="h5" datetime="2021-03-30">30.03.2021</time>
                                                        <a href="daily-fx/2021-03-30/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                            </ol>
                                        </div>
                                        <div class="c-reports-archive__link">
                                            <a class="btn" href="index11c4.html?type=DailyFX">See archive</a>
                                        </div>
                                    </div>
            
                                    <div class="c-reports-archive" data-archive-list="daily-soft-charts">
                                        <div class="c-reports-archive__list">
                                            <ol>
                                                    <li>
                                                        <p>Daily Soft Charts</p>
                                                        <time class="h5" datetime="2021-04-07">07.04.2021</time>
                                                        <a href="softs-technical-charts/2021-04-07/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Daily Soft Charts</p>
                                                        <time class="h5" datetime="2021-03-31">31.03.2021</time>
                                                        <a href="softs-technical-charts/2021-03-31/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Daily Soft Charts</p>
                                                        <time class="h5" datetime="2021-03-26">26.03.2021</time>
                                                        <a href="softs-technical-charts/2021-03-26/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Daily Soft Charts</p>
                                                        <time class="h5" datetime="2021-03-24">24.03.2021</time>
                                                        <a href="softs-technical-charts/2021-03-24/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Daily Soft Charts</p>
                                                        <time class="h5" datetime="2021-03-22">22.03.2021</time>
                                                        <a href="softs-technical-charts/2021-03-22/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                            </ol>
                                        </div>
                                        <div class="c-reports-archive__link">
                                            <a class="btn" href="indexd5ee.html?type=DailySoftCharts">See archive</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="h5" data-animate="Animate">Title</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1 col-lg-12">
                                            <div class="c-report-card-group" data-animate="Animate">
                                                                
                                                    <div class="c-report-card --weekly c-report-card--weekly-fx">
                                                        <div class="c-report-card__t">
                                                            <a href="#" class="cover">Weekly Report <span>FX Options</span></a>
                                                                <p><span>Commentary and analysis covering OTC currency option pricing, volatility and positioning.</span></p>
                                                
                                                        </div>
                                                        <div class="c-report-card__d yellow">
                                                            <time datetime="2021-03-24">24.03.21</time>
                                                        </div>
                                                    </div>
                                                    <div class="c-reports-archive-toggle">
                                                        <a href="#" data-archive-toggle="weekly-fx">
                                                            <span>Past 5 Reports</span>
                                                            <span>Close</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 24"><g transform="translate(0 .638)" fill="none" fill-rule="evenodd"><circle fill="#9435FB" cx="11.5" cy="11.5" r="11.5" /><g fill="#FFF" fill-rule="nonzero"><path d="M10.776 6.724v9.552a.724.724 0 101.448 0V6.724a.724.724 0 10-1.448 0z" /><path d="M10.776 10.776H6.724a.724.724 0 100 1.448h9.552a.724.724 0 100-1.448h-5.5z" /></g></g></svg>
                                                        </a>
                                                    </div>
            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="h5" data-animate="Animate">Title</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-1 col-lg-12">
                                                <div class="c-report-card-group" data-animate="Animate">
                                                    
            
            
                                        <div class="c-report-card c-report-card--monthly">
                                            <div class="c-report-card__t">
                                                <a href="#" data-pdf="" class="cover" target="_self"><span>FX Monthly Report</span> April 2021</a>
                                                    <p><span>Monthly commentary covering the FX markets, providing insights on recent developments on select currency pairs. Turkey’s woes are the focus of this month's FX Monthly report. The report includes a macroeconomic overview as well as desk comments and technical analysis on key currency pairs.</span></p>
                                        
                                            </div>
                                        </div>
            
                                                        <div class="c-reports-archive-toggle">
                                                            <a href="#" data-archive-toggle="monthly-fx">
                                                                <span>Past 5 Reports</span>
                                                                <span>Close</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 24"><g transform="translate(0 .638)" fill="none" fill-rule="evenodd"><circle fill="#9435FB" cx="11.5" cy="11.5" r="11.5" /><g fill="#FFF" fill-rule="nonzero"><path d="M10.776 6.724v9.552a.724.724 0 101.448 0V6.724a.724.724 0 10-1.448 0z" /><path d="M10.776 10.776H6.724a.724.724 0 100 1.448h9.552a.724.724 0 100-1.448h-5.5z" /></g></g></svg>
                                                            </a>
                                                        </div>
            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="h5" data-animate="Animate">Title</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-1 col-lg-12">
                                                <div class="c-report-card-group" data-animate="Animate">
                                                    
            
            
                                        <div class="c-report-card c-report-card--monthly">
                                            <div class="c-report-card__t">
                                                <a href="#" data-pdf="" class="cover" target="_self"><span>FX Monthly Report</span> April 2021</a>
                                                    <p><span>Monthly commentary covering the FX markets, providing insights on recent developments on select currency pairs. Turkey’s woes are the focus of this month's FX Monthly report. The report includes a macroeconomic overview as well as desk comments and technical analysis on key currency pairs.</span></p>
                                        
                                            </div>
                                        </div>
            
                                                        <div class="c-reports-archive-toggle">
                                                            <a href="#" data-archive-toggle="monthly-fx">
                                                                <span>Past 5 Reports</span>
                                                                <span>Close</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 24"><g transform="translate(0 .638)" fill="none" fill-rule="evenodd"><circle fill="#9435FB" cx="11.5" cy="11.5" r="11.5" /><g fill="#FFF" fill-rule="nonzero"><path d="M10.776 6.724v9.552a.724.724 0 101.448 0V6.724a.724.724 0 10-1.448 0z" /><path d="M10.776 10.776H6.724a.724.724 0 100 1.448h9.552a.724.724 0 100-1.448h-5.5z" /></g></g></svg>
                                                            </a>
                                                        </div>
            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              
                            </div>
                            <div class="row">
                                <div class="col-12">
            
                                    <div class="c-reports-archive" data-archive-list="weekly-fx">
                                        <div class="c-reports-archive__list">
                                            <ol>
                                                    <li>
                                                        <p>Weekly FX Options Report</p>
                                                        <time class="h5" datetime="2021-03-17">17.03.2021</time>
                                                        <a href="#" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Weekly FX Options Report</p>
                                                        <time class="h5" datetime="2021-03-12">12.03.2021</time>
                                                        <a href="#" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Weekly FX Options Report</p>
                                                        <time class="h5" datetime="2021-03-03">03.03.2021</time>
                                                        <a href="#" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Weekly FX Options Report</p>
                                                        <time class="h5" datetime="2021-02-25">25.02.2021</time>
                                                        <a href="#" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Weekly FX Options Report</p>
                                                        <time class="h5" datetime="2021-02-17">17.02.2021</time>
                                                        <a href="#" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                            </ol>
                                        </div>
                                        <div class="c-reports-archive__link">
                                            <a class="btn" href="#">See archive</a>
                                        </div>
                                    </div>
            
                                        <div class="c-reports-archive" data-archive-list="monthly-fx">
                                            <div class="c-reports-archive__list">
                                                <ol>
                                                        <li>
                                                            <p>FX Monthly Report</p>
                                                            <time class="h5" datetime="2021-03-02">02.03.2021</time>
                                                            <a href="#" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                        </li>
                                                </ol>
                                            </div>
                                            <div class="c-reports-archive__link">
                                                <a class="btn" href="index46ab.html?type=MonthlyFX">See archive</a>
                                            </div>
                                        </div>
            
            
                                    <div class="c-reports-archive" data-archive-list="quaterly-metals">
                                        <div class="c-reports-archive__list">
                                            <ol>
                                                    <li>
                                                        <p>Quarterly Metals Report</p>
                                                        <time class="h5" datetime="2020-10-26">26.10.2020</time>
                                                        <a href="#" data-pdf="" class="link" target="_self"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Quarterly Metals Report</p>
                                                        <time class="h5" datetime="2020-07-31">31.07.2020</time>
                                                        <a href="#" data-pdf="" class="link" target="_self"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Quarterly Metals Report</p>
                                                        <time class="h5" datetime="2020-05-01">01.05.2020</time>
                                                        <a href="#" data-pdf="" class="link" target="_self"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Quarterly Metals Report</p>
                                                        <time class="h5" datetime="2020-03-02">02.03.2020</time>
                                                        <a href="#" data-pdf="/media/ro0ld4yj/sucden_financial_quarterly_metals_report_march_2020.pdf" class="link pdf-link" target="_blank"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Quarterly Metals Report</p>
                                                        <time class="h5" datetime="2019-10-22">22.10.2019</time>
                                                        <a href="#" data-pdf="/media/gbbjoknu/sucden_financial_quarterly_metals_report_october_2019.pdf" class="link pdf-link" target="_blank"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                            </ol>
                                        </div>
                                        <div class="c-reports-archive__link">
                                            <a class="btn" href="#">See archive</a>
                                        </div>
                                    </div>
            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
