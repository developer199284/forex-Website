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
                            <h2 class="t-large text-align-center" data-animate="AnimateText">Latest Non-independent Research</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="h5"data-animate="Animate" >Daily</h3>
                                </div>
                            </div>
                            <div class="row" data-animate="AnimateList">
                                <div class="col-sm-1 col-lg-3">
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
                                <div class="col-sm-1 col-lg-3">
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
                                <div class="col-sm-1 col-lg-3">
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
                                <div class="col-lg-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="h5" data-animate="Animate">Weekly</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1 col-lg-12">
                                            <div class="c-report-card-group" data-animate="Animate">
                                                
                <div class="c-report-card --weekly c-report-card--weekly-fx">
                    <div class="c-report-card__t">
                        <a href="weekly-fx-options/2021-03-24/index.html" class="cover">Weekly Report <span>FX Options</span></a>
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
                                    <div class="col-lg-3">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="h5" data-animate="Animate">Monthly</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-1 col-lg-12">
                                                <div class="c-report-card-group" data-animate="Animate">
                                                    
            
            
            <div class="c-report-card c-report-card--monthly">
                <div class="c-report-card__t">
                    <a href="fx-monthly/april-2021/index.html" data-pdf="" class="cover" target="_self"><span>FX Monthly Report</span> April 2021</a>
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
            
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="h5" data-animate="Animate">Quarterly</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1 col-lg-6">
                                            <div class="c-report-card-group" data-animate="Animate">
                                                
            
            
            <div class="c-report-card c-report-card--quarterly">
                <div class="c-report-card__t">
                    <a href="quarterly-metals/qmr-q1-2021/index.html" data-pdf="" class="cover" target="_self"><span>Quarterly Metals Report</span> – Q1 2021</a>
                        <p><span>Chinese economic data continued to recover yet at a more moderate rate, underpinning the performance of base and ferrous metals. Vaccination rates will remain key, but Chinese New Year is likely to keep growth more subdued for the majority of February. In this report, our analysts provide fundamental and technical analysis and forecasts for base and precious metals, iron ore and steel. We assess how this past quarter impacted the metals market and outline what data points to look at to help navigate the next few months in the market.</span></p>
            
                </div>
            </div>
            
                                                    <div class="c-reports-archive-toggle">
                                                        <a href="#" data-archive-toggle="quaterly-metals">
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
                                                        <a href="weekly-fx-options/2021-03-17/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Weekly FX Options Report</p>
                                                        <time class="h5" datetime="2021-03-12">12.03.2021</time>
                                                        <a href="weekly-fx-options/2021-03-12/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Weekly FX Options Report</p>
                                                        <time class="h5" datetime="2021-03-03">03.03.2021</time>
                                                        <a href="weekly-fx-options/2021-03-03/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Weekly FX Options Report</p>
                                                        <time class="h5" datetime="2021-02-25">25.02.2021</time>
                                                        <a href="weekly-fx-options/2021-02-25/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Weekly FX Options Report</p>
                                                        <time class="h5" datetime="2021-02-17">17.02.2021</time>
                                                        <a href="weekly-fx-options/2021-02-17/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                            </ol>
                                        </div>
                                        <div class="c-reports-archive__link">
                                            <a class="btn" href="indexd219.html?type=WeeklyFX">See archive</a>
                                        </div>
                                    </div>
            
                                        <div class="c-reports-archive" data-archive-list="monthly-fx">
                                            <div class="c-reports-archive__list">
                                                <ol>
                                                        <li>
                                                            <p>FX Monthly Report</p>
                                                            <time class="h5" datetime="2021-03-02">02.03.2021</time>
                                                            <a href="fx-monthly/march-2021/index.html" class="link"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
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
                                                        <a href="quarterly-metals/qmr-q4-2020/index.html" data-pdf="" class="link" target="_self"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Quarterly Metals Report</p>
                                                        <time class="h5" datetime="2020-07-31">31.07.2020</time>
                                                        <a href="quarterly-metals/qmr-q3-2020/index.html" data-pdf="" class="link" target="_self"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Quarterly Metals Report</p>
                                                        <time class="h5" datetime="2020-05-01">01.05.2020</time>
                                                        <a href="quarterly-metals/qmr-q2-2020/index.html" data-pdf="" class="link" target="_self"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Quarterly Metals Report</p>
                                                        <time class="h5" datetime="2020-03-02">02.03.2020</time>
                                                        <a href="quarterly-metals/qmr-q1-2020/index.html" data-pdf="/media/ro0ld4yj/sucden_financial_quarterly_metals_report_march_2020.pdf" class="link pdf-link" target="_blank"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                                    <li>
                                                        <p>Quarterly Metals Report</p>
                                                        <time class="h5" datetime="2019-10-22">22.10.2019</time>
                                                        <a href="quarterly-metals/2019-10-22/index.html" data-pdf="/media/gbbjoknu/sucden_financial_quarterly_metals_report_october_2019.pdf" class="link pdf-link" target="_blank"><span>Read more</span><svg><use xlink:href="#arrow"></use></svg></a>
                                                    </li>
                                            </ol>
                                        </div>
                                        <div class="c-reports-archive__link">
                                            <a class="btn" href="index688f.html?type=QuarterlyMetals">See archive</a>
                                        </div>
                                    </div>
            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
            
          
            
            <section class="s-padding-b bg-base c-upcoming-research">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="t-large text-align-center" data-animate="AnimateText">Upcoming Investment Research</h2>
                        </div>
                    </div>
                    <div class="row" data-animate="AnimateList">
            
            
                            <div class="col-lg-6">
                                <div class="c-upcoming-research-block">
                                    <p class="t-small"><time datetime="">Release date &ndash; 27.05.2021</time></p>
                                    <h3 class="h5">Electric Vehicles Report</h3>
                                    <p></p>
                                </div>
                            </div>
                    </div>
                </div>
            </section>
            
            <section class="s-padding-b bg-base">
                <div class="container">
                    <div class="c-campaign-action bg-purple" data-animate="AnimateText">
                        <h2 class="h3"><a href="index709e.html?modal=register" class="cover" data-modal-control="register">Interested in a free Investment Research trial?</a></h2>
                        <p>Discover our in-depth research reports covering the coffee market and a variety of topical subjects.</p>
                        <div class="c-campaign-action__l">
                            <svg><use xlink:href="#arrow"></use></svg>
                        </div>
                    </div>
                </div>
            </section>
            
            
            
<!--             
            <div class="modal" tabindex="-1" data-modal="register">
                <div class="modal-wrapper">
                    <div class="modal-content">
                        <button class="modal-content__close" data-modal-close>
                            <svg><use xlink:href="#close"></use></svg>
                        </button>
                        <div class="c-modal-form">
                            <div class="c-modal-form__header">
                                <h2 class="h2">Request free Investment Research trial</h2>
                                <p>Fill in your details below to register for a free trial of our chargeable reports and we will be in contact with further details.</p>
                            </div>
                            <div class="form form--dark" data-form-register>
                                <form action="https://www.sucdenfinancial.com/en/reports/" enctype="multipart/form-data" method="post" name="Register interest for Investment Research">                        <div class="form-thankyou">
                                        <div class="form-thankyou__text">
                                            <h2 class="h3">Thank you for registering your interest!</h2>
                                            <p>Thank you for registering your interest in our research, someone from our team will be in touch shortly. In the meantime, if you have any questions read our <a href="faqs/index.html">FAQ section</a>.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-errors"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="Firstname">First name*</label>
                                                <input id="Firstname" name="Firstname" required="" type="text" value="" />
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="Lastname">Last name*</label>
                                                <input id="Lastname" name="Lastname" required="" type="text" value="" />
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="Email">Email address*</label>
                                                <input id="Email" name="Email" required="" type="email" value="" />
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="Telephone">Telephone number</label>
                                                <input id="Telephone" name="Telephone" type="tel" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="CompanyName">Company name*</label>
                                                <input id="CompanyName" name="CompanyName" required="" type="text" value="" />
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-checkbox form-checkbox--terms">
                                                    <input id="Confirm" name="Confirm" required="" type="checkbox" value="true" /><input name="Confirm" type="hidden" value="false" />
                                                    <label for="Confirm">I confirm that I have read the Data Protection and Privacy Policy and that I agree to Sucden Financial Limited holding and processing my personal data.</label>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-captcha">
                                                    <script src="../../../www.google.com/recaptcha/api.js" async defer></script>
                                                    <div class="g-recaptcha" data-sitekey="6LdcdecUAAAAACgfdOEU5xk5xri1HmitjeYbfF0J"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-note">
                                                    <span>* Mandatory fields</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group text-align-center">
                                                <input class="btn" type="submit" value="Submit" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group text-align-center">
                                                <p>Have questions? <a href="faqs/index.html">Read our FAQ section</a></p>
                                            </div>
                                        </div>
                                    </div>
            <input name='ufprt' type='hidden' value='7EFE6D8829692BC8E40C90CF2018FB5D93F6F31B83C10F30F86A4331CB9923A9F0FC38506E9E37A95ECA7DFFAC1DA57A12DC1E3180ECC7EC940CCB3F14C248AEE96B357591CD377BFE58832F67F97861DAE390D93933DF69AC1FDDA7231B8480543600FF2FC495AF861815E4C6D6028EB293390960B684101A8620AA0896B4954A0348535D12A74E3A0AB82B970DA1C63F8508165A937287E6542A3EB6905A76' /></form>                </div>
                        </div>
            
                        <div class="c-modal-promo">
                            <div class="row">
                                <div class="col-md-4 col-lg-8">
                                    <div class="c-modal-promo__t">
                                        <h3 class="h4">Why not subscribe for our complimentary Non-independent Research reports?</h3>
                                        <p>Stay up to date with our Daily, Weekly and Quarterly reports.</p>
                                        <p><a href="indexcd4b.html?modal=subscribe" class="btn btn--white" data-modal-control="subscribe">Sign up</a></p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-4">
                                    <div class="c-modal-promo__i">
                                        <div class="media media--1-1">
                                            <img class="media__item" src="../../assets/img/forms/email-subscribe.png" alt="Report covers" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             -->
            
            
            
            
            
            <!-- <div class="modal" tabindex="-1" data-modal="subscribe">
                <div class="modal-wrapper">
                    <div class="modal-content">
                        <button class="modal-content__close" data-modal-close>
                            <svg><use xlink:href="#close"></use></svg>
                        </button>
                        <div class="c-modal-form">
                            <div class="c-modal-form__header">
                                <h2 class="h2">Subscribe</h2>
                                <p>Select all the reports you wish to sign up to and submit your details below</p>
                            </div>
                            <div class="form form--dark">
            
            <form action="https://www.sucdenfinancial.com/en/reports/" enctype="multipart/form-data" method="post" name="Subscribe for Non-independent Research">                        <div class="form-thankyou">
                                        <div class="form-thankyou__text">
                                            <h2 class="h3">Thank you for subscribing.</h2>
                                            <p>You should receive a confirmation email shortly. Please check your spam /junk mail folder if not received within a few minutes.</p>
                                            <p>Do not forget to click the link in the confirmation message, otherwise, you will not receive any of our future emails.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-errors"></div>
                                        </div>
                                    </div>
                                    <div class="row row--checkboxes">
                                            <div class="col-md-3 col-lg-4">
                                                <div class="form-group">
                                                    <div class="form-checkbox">
                                                        <input id="Subscriptions_0" name="Subscriptions" type="checkbox" value="420e4053ea" class="visually-hidden" />
                                                        <label for="Subscriptions_0">Daily Base Metals Report</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-lg-4">
                                                <div class="form-group">
                                                    <div class="form-checkbox">
                                                        <input id="Subscriptions_1" name="Subscriptions" type="checkbox" value="140591177d" class="visually-hidden" />
                                                        <label for="Subscriptions_1">Daily FX Report</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-lg-4">
                                                <div class="form-group">
                                                    <div class="form-checkbox">
                                                        <input id="Subscriptions_2" name="Subscriptions" type="checkbox" value="1efc5fbaf8" class="visually-hidden" />
                                                        <label for="Subscriptions_2">Softs Technical Charts (Monday, Wednesday, Friday)</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-lg-4">
                                                <div class="form-group">
                                                    <div class="form-checkbox">
                                                        <input id="Subscriptions_3" name="Subscriptions" type="checkbox" value="66af2f73ac" class="visually-hidden" />
                                                        <label for="Subscriptions_3">Weekly FX Options</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-lg-4">
                                                <div class="form-group">
                                                    <div class="form-checkbox">
                                                        <input id="Subscriptions_4" name="Subscriptions" type="checkbox" value="139dac80f6" class="visually-hidden" />
                                                        <label for="Subscriptions_4">FX Monthly Report</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-lg-4">
                                                <div class="form-group">
                                                    <div class="form-checkbox">
                                                        <input id="Subscriptions_5" name="Subscriptions" type="checkbox" value="5ab8809033" class="visually-hidden" />
                                                        <label for="Subscriptions_5">Quarterly Metals Report</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-lg-4">
                                                <div class="form-group">
                                                    <div class="form-checkbox">
                                                        <input id="Subscriptions_6" name="Subscriptions" type="checkbox" value="9914806a0f" class="visually-hidden" />
                                                        <label for="Subscriptions_6">Research Webinars</label>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="Sub_Firstname">First name*</label>
                                                <input id="Sub_Firstname" name="Sub_Firstname" required="" type="text" value="" />
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="Sub_Lastname">Last name*</label>
                                                <input id="Sub_Lastname" name="Sub_Lastname" required="" type="text" value="" />
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="Sub_Email">Email address*</label>
                                                <input id="Sub_Email" name="Sub_Email" required="" type="email" value="" />
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="Sub_CompanyName">Company name*</label>
                                                <input id="Sub_CompanyName" name="Sub_CompanyName" required="" type="text" value="" />
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="Sub_Jurisdiction">Company's Jurisdiction*</label>
                                                <p class="form-note form-note--no-margin">Please note, except journalists we cannot currently email subscribers in the European Economic Area (EEA)</p>
                                                <div class="row row--radios">
                                                        <div class="col-md-3 col-lg-4">
                                                            <div class="form-group">
                                                                <div class="form-radio">
                                                                    <input id="EEA" name="Sub_Jurisdiction" type="radio" value="EEA" class="visually-hidden" />
                                                                    <label for="EEA">EEA</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-lg-4">
                                                            <div class="form-group">
                                                                <div class="form-radio">
                                                                    <input id="Non-EEA" name="Sub_Jurisdiction" type="radio" value="Non-EEA" class="visually-hidden" />
                                                                    <label for="Non-EEA">Non-EEA</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-lg-4">
                                                            <div class="form-group">
                                                                <div class="form-radio">
                                                                    <input id="Media Organistation" name="Sub_Jurisdiction" type="radio" value="Media Organistation" class="visually-hidden" />
                                                                    <label for="Media Organistation">Media Organistation</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-checkbox form-checkbox--terms">
                                                    <input id="Sub_Confirm" name="Sub_Confirm" required="" type="checkbox" value="true" /><input name="Sub_Confirm" type="hidden" value="false" />
                                                    <label for="Sub_Confirm">I confirm that I have read the Data Protection and Privacy Policy and that I agree to Sucden Financial Limited holding and processing my personal data.</label>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-note">
                                                    <span>* Mandatory fields</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group text-align-center">
                                                <input class="btn" type="submit" value="Submit" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group text-align-center">
                                                <p>Have questions? <a href="faqs/index.html">Read our FAQ section</a></p>
                                            </div>
                                        </div>
                                    </div>
            <input name='ufprt' type='hidden' value='12312C7D6840BF4DE15D4FE021ED5978824A59C65DC0DDA9EA33C638C28D2DFF3A4BF15EEAD243636AF806EE353EEBB6EBB8FBC6426E1C77BE99319828B941160CA625B58BD0ACC513F267A7D5E70F673AF5BE26C93A714C62F31CAC5342D080CBBB9C5FED4B8CFEFEF8D6BD8DEF8B84D7437365B5966B720E691B4BEF74DA24C5580B2FC72FFC5AE159E213A4CD6DE3' /></form>
                            </div>
                        </div>
                        
                        <div class="c-modal-promo">
                            <div class="row">
                                <div class="col-md-4 col-lg-8">
                                    <div class="c-modal-promo__t">
                                        <h3 class="h4">Interested in reading our paid Investment Research?</h3>
                                        <p>Discover our in-depth research reports covering the coffee market and a variety of topical subjects.</p>
                                        <p><a href="index709e.html?modal=register" class="btn btn--white" data-modal-control="register">Request free trial</a></p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-4">
                                    <div class="c-modal-promo__i">
                                        <div class="media media--1-1">
                                            <img class="media__item" src="../../assets/img/forms/research-register.png" alt="Research report covers" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>
            </div> -->
           
     
            
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
