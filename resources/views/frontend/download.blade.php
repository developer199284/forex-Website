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
            
            <div class="c-reports-filter" data-reports-filter>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="c-reports-filter__row" data-animate="AnimateList">
                                <span>Filter reports by</span>
                                <div class="c-filter__input">
                                    <div class="c-filter-dropdown" data-filter-dropdown>
                                        <button class="c-filter__selected" data-dropdown-selected>
                                            <span>type</span>
                                            <svg height="5" width="8"><use xlink:href="#triangle"></use></svg>
                                        </button>
                                        <ul>
                                                <li><a href="index0bc8.html?type=Research" data-dropdown-value="Research">Investment Research</a></li>
                                                <li><a href="indexa049.html?type=DailyBaseMetals" data-dropdown-value="DailyBaseMetals">Daily Base Metals</a></li>
                                                <li><a href="index11c4.html?type=DailyFX" data-dropdown-value="DailyFX">Daily FX</a></li>
                                                <li><a href="indexd5ee.html?type=DailySoftCharts" data-dropdown-value="DailySoftCharts">Daily Softs Technical Charts</a></li>
                                                <li><a href="indexd219.html?type=WeeklyFX" data-dropdown-value="WeeklyFX">Weekly FX Options</a></li>
                                                <li><a href="index46ab.html?type=MonthlyFX" data-dropdown-value="MonthlyFX">Monthly FX</a></li>
                                                <li><a href="index688f.html?type=QuarterlyMetals" data-dropdown-value="QuarterlyMetals">Quarterly Metals</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span>from</span>
                                <div class="c-filter__input">
                                    <input type="text" name="startDate" placeholder="dd/mm/yyyy" data-date>
                                </div>
                            </div>
                            <div class="c-reports-filter__row" data-animate="AnimateList">
                                <span>and/or search by</span>
                                <div class="c-filter__input">
                                    <input type="search" name="keyword" placeholder="keyword" data-keyword />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="c-reports-filter__buttons" data-animate="AnimateText">
                                <button class="btn" data-submit>Show me results</button>
                                <a href="#" class="link link--reset link--small">
                                    <span>Reset</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 18"><path fill="currentColor" fill-rule="nonzero" d="M12.301 5.27l5.095 2.018L19 2.276l-1.04-.333-.989 3.092A8.934 8.934 0 008.942 0C4.012 0 0 4.037 0 9s4.011 9 8.942 9a8.928 8.928 0 008.24-5.497l-1.005-.427a7.84 7.84 0 01-7.235 4.826c-4.33 0-7.851-3.545-7.851-7.902s3.522-7.902 7.851-7.902a7.845 7.845 0 017.072 4.463l-3.31-1.311-.403 1.02z"/></svg>
                                </a>
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
            
            <section class="section bg-dark c-campaign">
                <div class="container">
                    <div class="c-campaign-action bg-purple" data-animate="AnimateText">
                        <h2 class="h3"><a href="indexcd4b.html?modal=subscribe" class="cover" data-modal-control="subscribe">Sign-up to get the latest Non-independent research</a></h2>
                        <p>We will email you each time a new report has been published.</p>
                        <div class="c-campaign-action__l">
                            <svg><use xlink:href="#arrow"></use></svg>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section bg-base c-premium-research">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="t-large text-align-center" data-animate="AnimateText">Investment Research</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="swiper-container swiper-desktop" data-swiper-premium-research>
                                <div class="swiper-wrapper" data-animate="AnimateList">
                                        <div class="swiper-slide">
                                            <div class="c-premium-research-block">
                                                <div class="c-premium-research-block__i">
                                                    <div class="media media--1-1">
                                                        <div class="media__item">
                                                            <img src='../../../cdn-sucdenfinancial.azureedge.net/0/d/d/4/3/5/0dd435a9d368be6af3f2f81f9d1059ba178d13f4.jpg?anchor=center&amp;mode=crop&amp;width=550&amp;height=550&amp;rnd=132612371197830000' srcset='/media/njxlcqof/coffee_march_2021_web.jpg?anchor=center&mode=crop&width=550&height=550&rnd=132612371197830000 1x, /media/njxlcqof/coffee_march_2021_web.jpg?anchor=center&mode=crop&width=1100&height=1100&rnd=132612371197830000 2x' loading='lazy' alt='Coffee March 2021 Web' />
                                                        </div>
                                                    </div>
                                                    <svg width="52" height="58" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M41.604.893l9.838 10.627H38.374l-.237-9.217a2 2 0 013.467-1.41z" fill="#5000A7"/><g fill-rule="nonzero"><path fill="#000" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/><path fill="#9435FB" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/></g><g fill="#FFF" fill-rule="nonzero"><path d="M21.32 17.503h-2.3l-.711-2.187a.638.638 0 00-1.213 0l-.71 2.187h-2.3a.638.638 0 00-.374 1.153l1.861 1.352-.71 2.187a.639.639 0 00.98.712l1.86-1.353 1.862 1.353a.636.636 0 00.749 0 .637.637 0 00.231-.712l-.71-2.188 1.86-1.353a.637.637 0 00-.375-1.15z"/><path d="M33.414 30.796l-3.802-3.802c-1.086-1.086-2.87-1.229-4.144-.437l-.001-.002-1.3-1.322a8.511 8.511 0 002.154-5.655c.001-4.73-3.865-8.578-8.618-8.578-4.754 0-8.619 3.848-8.619 8.576 0 4.73 3.867 8.577 8.62 8.577a8.601 8.601 0 005.554-2.03l1.288 1.31a3.285 3.285 0 00-.61 1.91c0 .887.345 1.723.974 2.352l3.803 3.802c.627.63 1.46.975 2.35.975a3.3 3.3 0 002.352-.974 3.327 3.327 0 00-.001-4.702zm-23.056-11.22c0-4.027 3.294-7.302 7.345-7.302 4.05 0 7.344 3.275 7.344 7.302 0 4.028-3.294 7.303-7.344 7.303-4.05 0-7.345-3.275-7.345-7.303zm22.155 15.021c-.774.774-2.125.774-2.9 0l-3.803-3.801a2.037 2.037 0 01-.6-1.452c0-.55.212-1.064.6-1.45a2.039 2.039 0 011.452-.603c.548 0 1.064.214 1.45.602l3.803 3.802a2.057 2.057 0 01-.002 2.902z"/></g></g></svg>
                                                </div>
                                                <div class="c-premium-research-block__t">
                                                    <h3 class="h3"><a href="research/brazil-in-vogue-coffee-market-update/index.html" class="cover"><span>Brazil in Vogue - Coffee Market Update</span></a></h3>
                                                    <p>Following the release of our Crop Update last month, our analysts provide a more in-depth breakdown of the S&amp;D balance, whilst looking at the bright spots for consumption post-COVID. Brazil shipments are starting to fall, but the deficit has not yet shown its cards. European economic growth lags behind the U.S. and we expect this to remain the case due to poor vaccine policy management, causing consumption growth in the bloc to be weaker. </p>
                                                    <div class="c-premium-research-details">
                                                        <p>Written by Geordie Wilkes</p>
                                                        <p class="t-small"><time datetime="2021-04-01">01.04.2021</time></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="c-premium-research-block">
                                                <div class="c-premium-research-block__i">
                                                    <div class="media media--1-1">
                                                        <div class="media__item">
                                                            <img src='../../../cdn-sucdenfinancial.azureedge.net/a/6/a/4/4/1/a6a4411a22f115ebe19ba62cb645f570fcd6439b.jpg?anchor=center&amp;mode=crop&amp;width=550&amp;height=550&amp;rnd=132582238682330000' srcset='/media/k1rniu0g/coffee_update_feb_2021_header.jpg?anchor=center&mode=crop&width=550&height=550&rnd=132582238682330000 1x, /media/k1rniu0g/coffee_update_feb_2021_header.jpg?anchor=center&mode=crop&width=1100&height=1100&rnd=132582238682330000 2x' loading='lazy' alt='Coffee Update Feb 2021 Header' />
                                                        </div>
                                                    </div>
                                                    <svg width="52" height="58" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M41.604.893l9.838 10.627H38.374l-.237-9.217a2 2 0 013.467-1.41z" fill="#5000A7"/><g fill-rule="nonzero"><path fill="#000" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/><path fill="#9435FB" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/></g><g fill="#FFF" fill-rule="nonzero"><path d="M21.32 17.503h-2.3l-.711-2.187a.638.638 0 00-1.213 0l-.71 2.187h-2.3a.638.638 0 00-.374 1.153l1.861 1.352-.71 2.187a.639.639 0 00.98.712l1.86-1.353 1.862 1.353a.636.636 0 00.749 0 .637.637 0 00.231-.712l-.71-2.188 1.86-1.353a.637.637 0 00-.375-1.15z"/><path d="M33.414 30.796l-3.802-3.802c-1.086-1.086-2.87-1.229-4.144-.437l-.001-.002-1.3-1.322a8.511 8.511 0 002.154-5.655c.001-4.73-3.865-8.578-8.618-8.578-4.754 0-8.619 3.848-8.619 8.576 0 4.73 3.867 8.577 8.62 8.577a8.601 8.601 0 005.554-2.03l1.288 1.31a3.285 3.285 0 00-.61 1.91c0 .887.345 1.723.974 2.352l3.803 3.802c.627.63 1.46.975 2.35.975a3.3 3.3 0 002.352-.974 3.327 3.327 0 00-.001-4.702zm-23.056-11.22c0-4.027 3.294-7.302 7.345-7.302 4.05 0 7.344 3.275 7.344 7.302 0 4.028-3.294 7.303-7.344 7.303-4.05 0-7.345-3.275-7.345-7.303zm22.155 15.021c-.774.774-2.125.774-2.9 0l-3.803-3.801a2.037 2.037 0 01-.6-1.452c0-.55.212-1.064.6-1.45a2.039 2.039 0 011.452-.603c.548 0 1.064.214 1.45.602l3.803 3.802a2.057 2.057 0 01-.002 2.902z"/></g></g></svg>
                                                </div>
                                                <div class="c-premium-research-block__t">
                                                    <h3 class="h3"><a href="research/patience-crop-update/index.html" class="cover"><span>Patience - Crop Update</span></a></h3>
                                                    <p>Our analysts provide a short update for the coffee market and recent price activity. The weather issues we reported in December are starting to materialise, but shipments and inventories fail to confirm the deficit. Traders need to be patient but what are the key themes for the market in the next month?</p>
                                                    <div class="c-premium-research-details">
                                                        <p>Written by Geordie Wilkes</p>
                                                        <p class="t-small"><time datetime="2021-02-22">22.02.2021</time></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="c-premium-research-block">
                                                <div class="c-premium-research-block__i">
                                                    <div class="media media--1-1">
                                                        <div class="media__item">
                                                            <img src='../../../cdn-sucdenfinancial.azureedge.net/4/4/5/b/7/9/445b79719a8a2c3930c58aa6e5590975c9820692.jpg?anchor=center&amp;mode=crop&amp;width=550&amp;height=550&amp;rnd=132574328921630000' srcset='/media/ew0bt53b/electric_vehicles_reports_header_europe.jpg?anchor=center&mode=crop&width=550&height=550&rnd=132574328921630000 1x, /media/ew0bt53b/electric_vehicles_reports_header_europe.jpg?anchor=center&mode=crop&width=1100&height=1100&rnd=132574328921630000 2x' loading='lazy' alt='Electric Vehicles Reports Header Europe' />
                                                        </div>
                                                    </div>
                                                    <svg width="52" height="58" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M41.604.893l9.838 10.627H38.374l-.237-9.217a2 2 0 013.467-1.41z" fill="#5000A7"/><g fill-rule="nonzero"><path fill="#000" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/><path fill="#9435FB" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/></g><g fill="#FFF" fill-rule="nonzero"><path d="M21.32 17.503h-2.3l-.711-2.187a.638.638 0 00-1.213 0l-.71 2.187h-2.3a.638.638 0 00-.374 1.153l1.861 1.352-.71 2.187a.639.639 0 00.98.712l1.86-1.353 1.862 1.353a.636.636 0 00.749 0 .637.637 0 00.231-.712l-.71-2.188 1.86-1.353a.637.637 0 00-.375-1.15z"/><path d="M33.414 30.796l-3.802-3.802c-1.086-1.086-2.87-1.229-4.144-.437l-.001-.002-1.3-1.322a8.511 8.511 0 002.154-5.655c.001-4.73-3.865-8.578-8.618-8.578-4.754 0-8.619 3.848-8.619 8.576 0 4.73 3.867 8.577 8.62 8.577a8.601 8.601 0 005.554-2.03l1.288 1.31a3.285 3.285 0 00-.61 1.91c0 .887.345 1.723.974 2.352l3.803 3.802c.627.63 1.46.975 2.35.975a3.3 3.3 0 002.352-.974 3.327 3.327 0 00-.001-4.702zm-23.056-11.22c0-4.027 3.294-7.302 7.345-7.302 4.05 0 7.344 3.275 7.344 7.302 0 4.028-3.294 7.303-7.344 7.303-4.05 0-7.345-3.275-7.345-7.303zm22.155 15.021c-.774.774-2.125.774-2.9 0l-3.803-3.801a2.037 2.037 0 01-.6-1.452c0-.55.212-1.064.6-1.45a2.039 2.039 0 011.452-.603c.548 0 1.064.214 1.45.602l3.803 3.802a2.057 2.057 0 01-.002 2.902z"/></g></g></svg>
                                                </div>
                                                <div class="c-premium-research-block__t">
                                                    <h3 class="h3"><a href="research/the-true-cost-of-electric-vehicles-europe-energy-sector/index.html" class="cover"><span>The True Cost of Electric Vehicles - Europe Energy Sector</span></a></h3>
                                                    <p>The fourth of four reports focusing on how the electricity to charge electric vehicles is generated in Europe, comparing their overall efficiency and carbon footprint with internal combustion engine vehicles.</p>
                                                    <div class="c-premium-research-details">
                                                        <p>Written by Daria Efanova</p>
                                                        <p class="t-small"><time datetime="2021-02-17">17.02.2021</time></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="c-premium-research-block">
                                                <div class="c-premium-research-block__i">
                                                    <div class="media media--1-1">
                                                        <div class="media__item">
                                                            <img src='../../../cdn-sucdenfinancial.azureedge.net/5/e/1/c/1/3/5e1c13c76f92fd987e945c7639f89fb7efb9fb3c.jpg?anchor=center&amp;mode=crop&amp;width=550&amp;height=550&amp;rnd=132514929862530000' srcset='/media/igzpk5j1/coffee_report_q4_2020_main_header.jpeg?anchor=center&mode=crop&width=550&height=550&rnd=132514929862530000 1x, /media/igzpk5j1/coffee_report_q4_2020_main_header.jpeg?anchor=center&mode=crop&width=1100&height=1100&rnd=132514929862530000 2x' loading='lazy' alt='Coffee Report Q4 2020 Main Header' />
                                                        </div>
                                                    </div>
                                                    <svg width="52" height="58" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M41.604.893l9.838 10.627H38.374l-.237-9.217a2 2 0 013.467-1.41z" fill="#5000A7"/><g fill-rule="nonzero"><path fill="#000" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/><path fill="#9435FB" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/></g><g fill="#FFF" fill-rule="nonzero"><path d="M21.32 17.503h-2.3l-.711-2.187a.638.638 0 00-1.213 0l-.71 2.187h-2.3a.638.638 0 00-.374 1.153l1.861 1.352-.71 2.187a.639.639 0 00.98.712l1.86-1.353 1.862 1.353a.636.636 0 00.749 0 .637.637 0 00.231-.712l-.71-2.188 1.86-1.353a.637.637 0 00-.375-1.15z"/><path d="M33.414 30.796l-3.802-3.802c-1.086-1.086-2.87-1.229-4.144-.437l-.001-.002-1.3-1.322a8.511 8.511 0 002.154-5.655c.001-4.73-3.865-8.578-8.618-8.578-4.754 0-8.619 3.848-8.619 8.576 0 4.73 3.867 8.577 8.62 8.577a8.601 8.601 0 005.554-2.03l1.288 1.31a3.285 3.285 0 00-.61 1.91c0 .887.345 1.723.974 2.352l3.803 3.802c.627.63 1.46.975 2.35.975a3.3 3.3 0 002.352-.974 3.327 3.327 0 00-.001-4.702zm-23.056-11.22c0-4.027 3.294-7.302 7.345-7.302 4.05 0 7.344 3.275 7.344 7.302 0 4.028-3.294 7.303-7.344 7.303-4.05 0-7.345-3.275-7.345-7.303zm22.155 15.021c-.774.774-2.125.774-2.9 0l-3.803-3.801a2.037 2.037 0 01-.6-1.452c0-.55.212-1.064.6-1.45a2.039 2.039 0 011.452-.603c.548 0 1.064.214 1.45.602l3.803 3.802a2.057 2.057 0 01-.002 2.902z"/></g></g></svg>
                                                </div>
                                                <div class="c-premium-research-block__t">
                                                    <h3 class="h3"><a href="research/woeful-weather/index.html" class="cover"><span>Woeful Weather</span></a></h3>
                                                    <p>The latest update of our fundamental coffee market outlook focuses on consumption in recent months, and how recent stimulus packages will help prevent demand destruction. The road ahead is unclear but we provide trading strategies to help navigate the market.</p>
                                                    <div class="c-premium-research-details">
                                                        <p>Written by Geordie Wilkes</p>
                                                        <p class="t-small"><time datetime="2020-12-10">10.12.2020</time></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="c-premium-research-block">
                                                <div class="c-premium-research-block__i">
                                                    <div class="media media--1-1">
                                                        <div class="media__item">
                                                            <img src='../../../cdn-sucdenfinancial.azureedge.net/d/0/7/3/3/c/d0733cfcf596cda7cbb5ecba5913ea1ceb57674e.jpg?anchor=center&amp;mode=crop&amp;width=550&amp;height=550&amp;rnd=132446462874000000' srcset='/media/uyxjm1bd/electric_cars_header_jpn.jpeg?anchor=center&mode=crop&width=550&height=550&rnd=132446462874000000 1x, /media/uyxjm1bd/electric_cars_header_jpn.jpeg?anchor=center&mode=crop&width=1100&height=1100&rnd=132446462874000000 2x' loading='lazy' alt='Electric Cars Japan' />
                                                        </div>
                                                    </div>
                                                    <svg width="52" height="58" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M41.604.893l9.838 10.627H38.374l-.237-9.217a2 2 0 013.467-1.41z" fill="#5000A7"/><g fill-rule="nonzero"><path fill="#000" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/><path fill="#9435FB" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/></g><g fill="#FFF" fill-rule="nonzero"><path d="M21.32 17.503h-2.3l-.711-2.187a.638.638 0 00-1.213 0l-.71 2.187h-2.3a.638.638 0 00-.374 1.153l1.861 1.352-.71 2.187a.639.639 0 00.98.712l1.86-1.353 1.862 1.353a.636.636 0 00.749 0 .637.637 0 00.231-.712l-.71-2.188 1.86-1.353a.637.637 0 00-.375-1.15z"/><path d="M33.414 30.796l-3.802-3.802c-1.086-1.086-2.87-1.229-4.144-.437l-.001-.002-1.3-1.322a8.511 8.511 0 002.154-5.655c.001-4.73-3.865-8.578-8.618-8.578-4.754 0-8.619 3.848-8.619 8.576 0 4.73 3.867 8.577 8.62 8.577a8.601 8.601 0 005.554-2.03l1.288 1.31a3.285 3.285 0 00-.61 1.91c0 .887.345 1.723.974 2.352l3.803 3.802c.627.63 1.46.975 2.35.975a3.3 3.3 0 002.352-.974 3.327 3.327 0 00-.001-4.702zm-23.056-11.22c0-4.027 3.294-7.302 7.345-7.302 4.05 0 7.344 3.275 7.344 7.302 0 4.028-3.294 7.303-7.344 7.303-4.05 0-7.345-3.275-7.345-7.303zm22.155 15.021c-.774.774-2.125.774-2.9 0l-3.803-3.801a2.037 2.037 0 01-.6-1.452c0-.55.212-1.064.6-1.45a2.039 2.039 0 011.452-.603c.548 0 1.064.214 1.45.602l3.803 3.802a2.057 2.057 0 01-.002 2.902z"/></g></g></svg>
                                                </div>
                                                <div class="c-premium-research-block__t">
                                                    <h3 class="h3"><a href="research/the-true-cost-of-electric-vehicles-japan-energy-sector/index.html" class="cover"><span>The True Cost of Electric Vehicles - Japan Energy Sector</span></a></h3>
                                                    <p>The third of four reports focusing on how the electricity to charge electric vehicles is generated in Japan, comparing their overall efficiency and carbon footprint with internal combustion engine vehicles. </p>
                                                    <div class="c-premium-research-details">
                                                        <p>Written by Geordie Wilkes</p>
                                                        <p class="t-small"><time datetime="2020-11-11">11.11.2020</time></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="c-premium-research-block">
                                                <div class="c-premium-research-block__i">
                                                    <div class="media media--1-1">
                                                        <div class="media__item">
                                                            <img src='../../../cdn-sucdenfinancial.azureedge.net/3/7/9/b/1/f/379b1f49c6ae268f207c7f43c4cf5c03e5f4c6f4.jpg?center=0.33920828785614376,0.28053103402617019&amp;mode=crop&amp;width=550&amp;height=550&amp;rnd=132418966542400000' srcset='/media/4tddmglx/coffee_update_header_aug_2020.jpg?center=0.33920828785614376,0.28053103402617019&mode=crop&width=550&height=550&rnd=132418966542400000 1x, /media/4tddmglx/coffee_update_header_aug_2020.jpg?center=0.33920828785614376,0.28053103402617019&mode=crop&width=1100&height=1100&rnd=132418966542400000 2x' loading='lazy' alt='Coffee Update Header Aug 2020' />
                                                        </div>
                                                    </div>
                                                    <svg width="52" height="58" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M41.604.893l9.838 10.627H38.374l-.237-9.217a2 2 0 013.467-1.41z" fill="#5000A7"/><g fill-rule="nonzero"><path fill="#000" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/><path fill="#9435FB" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/></g><g fill="#FFF" fill-rule="nonzero"><path d="M21.32 17.503h-2.3l-.711-2.187a.638.638 0 00-1.213 0l-.71 2.187h-2.3a.638.638 0 00-.374 1.153l1.861 1.352-.71 2.187a.639.639 0 00.98.712l1.86-1.353 1.862 1.353a.636.636 0 00.749 0 .637.637 0 00.231-.712l-.71-2.188 1.86-1.353a.637.637 0 00-.375-1.15z"/><path d="M33.414 30.796l-3.802-3.802c-1.086-1.086-2.87-1.229-4.144-.437l-.001-.002-1.3-1.322a8.511 8.511 0 002.154-5.655c.001-4.73-3.865-8.578-8.618-8.578-4.754 0-8.619 3.848-8.619 8.576 0 4.73 3.867 8.577 8.62 8.577a8.601 8.601 0 005.554-2.03l1.288 1.31a3.285 3.285 0 00-.61 1.91c0 .887.345 1.723.974 2.352l3.803 3.802c.627.63 1.46.975 2.35.975a3.3 3.3 0 002.352-.974 3.327 3.327 0 00-.001-4.702zm-23.056-11.22c0-4.027 3.294-7.302 7.345-7.302 4.05 0 7.344 3.275 7.344 7.302 0 4.028-3.294 7.303-7.344 7.303-4.05 0-7.345-3.275-7.345-7.303zm22.155 15.021c-.774.774-2.125.774-2.9 0l-3.803-3.801a2.037 2.037 0 01-.6-1.452c0-.55.212-1.064.6-1.45a2.039 2.039 0 011.452-.603c.548 0 1.064.214 1.45.602l3.803 3.802a2.057 2.057 0 01-.002 2.902z"/></g></g></svg>
                                                </div>
                                                <div class="c-premium-research-block__t">
                                                    <h3 class="h3"><a href="research/back-to-the-grind/index.html" class="cover"><span>Back To The Grind</span></a></h3>
                                                    <p>The latest coffee report continues to analyse the impact COVID-19 has had on demand by re-applying previously used models. Our analysts also go through some recent changes to our crop forecasts and reinforce their trading strategies for the coming months as volatility picks up.</p>
                                                    <div class="c-premium-research-details">
                                                        <p>Written by Geordie Wilkes</p>
                                                        <p class="t-small"><time datetime="2020-08-20">20.08.2020</time></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="c-premium-research-block">
                                                <div class="c-premium-research-block__i">
                                                    <div class="media media--1-1">
                                                        <div class="media__item">
                                                            <img src='../../../cdn-sucdenfinancial.azureedge.net/0/4/5/2/c/f/0452cf7feedf5dbd2e4479ba3f8b4fb74c83df2f.jpg?anchor=center&amp;mode=crop&amp;width=550&amp;height=550&amp;rnd=132382428092300000' srcset='/media/3bplek4v/coffee_update_header_july_2020_july_2020.jpg?anchor=center&mode=crop&width=550&height=550&rnd=132382428092300000 1x, /media/3bplek4v/coffee_update_header_july_2020_july_2020.jpg?anchor=center&mode=crop&width=1100&height=1100&rnd=132382428092300000 2x' loading='lazy' alt='Coffee Update Header July 2020 July 2020' />
                                                        </div>
                                                    </div>
                                                    <svg width="52" height="58" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M41.604.893l9.838 10.627H38.374l-.237-9.217a2 2 0 013.467-1.41z" fill="#5000A7"/><g fill-rule="nonzero"><path fill="#000" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/><path fill="#9435FB" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/></g><g fill="#FFF" fill-rule="nonzero"><path d="M21.32 17.503h-2.3l-.711-2.187a.638.638 0 00-1.213 0l-.71 2.187h-2.3a.638.638 0 00-.374 1.153l1.861 1.352-.71 2.187a.639.639 0 00.98.712l1.86-1.353 1.862 1.353a.636.636 0 00.749 0 .637.637 0 00.231-.712l-.71-2.188 1.86-1.353a.637.637 0 00-.375-1.15z"/><path d="M33.414 30.796l-3.802-3.802c-1.086-1.086-2.87-1.229-4.144-.437l-.001-.002-1.3-1.322a8.511 8.511 0 002.154-5.655c.001-4.73-3.865-8.578-8.618-8.578-4.754 0-8.619 3.848-8.619 8.576 0 4.73 3.867 8.577 8.62 8.577a8.601 8.601 0 005.554-2.03l1.288 1.31a3.285 3.285 0 00-.61 1.91c0 .887.345 1.723.974 2.352l3.803 3.802c.627.63 1.46.975 2.35.975a3.3 3.3 0 002.352-.974 3.327 3.327 0 00-.001-4.702zm-23.056-11.22c0-4.027 3.294-7.302 7.345-7.302 4.05 0 7.344 3.275 7.344 7.302 0 4.028-3.294 7.303-7.344 7.303-4.05 0-7.345-3.275-7.345-7.303zm22.155 15.021c-.774.774-2.125.774-2.9 0l-3.803-3.801a2.037 2.037 0 01-.6-1.452c0-.55.212-1.064.6-1.45a2.039 2.039 0 011.452-.603c.548 0 1.064.214 1.45.602l3.803 3.802a2.057 2.057 0 01-.002 2.902z"/></g></g></svg>
                                                </div>
                                                <div class="c-premium-research-block__t">
                                                    <h3 class="h3"><a href="research/setting-the-scene/index.html" class="cover"><span>Setting the Scene</span></a></h3>
                                                    <p>The latest update of our fundamental coffee market outlook focuses on consumption in recent months, and how recent stimulus packages will help prevent demand destruction. The road ahead is unclear but we provide trading strategies to help navigate the market.</p>
                                                    <div class="c-premium-research-details">
                                                        <p>Written by Geordie Wilkes</p>
                                                        <p class="t-small"><time datetime="2020-06-25">25.06.2020</time></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="c-premium-research-block">
                                                <div class="c-premium-research-block__i">
                                                    <div class="media media--1-1">
                                                        <div class="media__item">
                                                            <img src='../../../cdn-sucdenfinancial.azureedge.net/d/2/1/3/5/0/d21350fbe3546203715a2971bddc7d0913c18512.jpg?anchor=center&amp;mode=crop&amp;width=550&amp;height=550&amp;rnd=132339294280670000' srcset='/media/jrodtkp1/electric_cars_china_2.jpeg?anchor=center&mode=crop&width=550&height=550&rnd=132339294280670000 1x, /media/jrodtkp1/electric_cars_china_2.jpeg?anchor=center&mode=crop&width=1100&height=1100&rnd=132339294280670000 2x' loading='lazy' alt='Electric Cars China 2' />
                                                        </div>
                                                    </div>
                                                    <svg width="52" height="58" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M41.604.893l9.838 10.627H38.374l-.237-9.217a2 2 0 013.467-1.41z" fill="#5000A7"/><g fill-rule="nonzero"><path fill="#000" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/><path fill="#9435FB" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/></g><g fill="#FFF" fill-rule="nonzero"><path d="M21.32 17.503h-2.3l-.711-2.187a.638.638 0 00-1.213 0l-.71 2.187h-2.3a.638.638 0 00-.374 1.153l1.861 1.352-.71 2.187a.639.639 0 00.98.712l1.86-1.353 1.862 1.353a.636.636 0 00.749 0 .637.637 0 00.231-.712l-.71-2.188 1.86-1.353a.637.637 0 00-.375-1.15z"/><path d="M33.414 30.796l-3.802-3.802c-1.086-1.086-2.87-1.229-4.144-.437l-.001-.002-1.3-1.322a8.511 8.511 0 002.154-5.655c.001-4.73-3.865-8.578-8.618-8.578-4.754 0-8.619 3.848-8.619 8.576 0 4.73 3.867 8.577 8.62 8.577a8.601 8.601 0 005.554-2.03l1.288 1.31a3.285 3.285 0 00-.61 1.91c0 .887.345 1.723.974 2.352l3.803 3.802c.627.63 1.46.975 2.35.975a3.3 3.3 0 002.352-.974 3.327 3.327 0 00-.001-4.702zm-23.056-11.22c0-4.027 3.294-7.302 7.345-7.302 4.05 0 7.344 3.275 7.344 7.302 0 4.028-3.294 7.303-7.344 7.303-4.05 0-7.345-3.275-7.345-7.303zm22.155 15.021c-.774.774-2.125.774-2.9 0l-3.803-3.801a2.037 2.037 0 01-.6-1.452c0-.55.212-1.064.6-1.45a2.039 2.039 0 011.452-.603c.548 0 1.064.214 1.45.602l3.803 3.802a2.057 2.057 0 01-.002 2.902z"/></g></g></svg>
                                                </div>
                                                <div class="c-premium-research-block__t">
                                                    <h3 class="h3"><a href="research/the-true-cost-of-electric-vehicles-china-energy-sector/index.html" class="cover"><span>The True Cost of Electric Vehicles - China Energy Sector</span></a></h3>
                                                    <p>The second of four reports focusing on how the electricity to charge electric vehicles is generated in China, comparing their overall efficiency and carbon footprint with internal combustion engine vehicles. </p>
                                                    <div class="c-premium-research-details">
                                                        <p>Written by Geordie Wilkes</p>
                                                        <p class="t-small"><time datetime="2020-06-01">01.06.2020</time></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="c-premium-research-block">
                                                <div class="c-premium-research-block__i">
                                                    <div class="media media--1-1">
                                                        <div class="media__item">
                                                            <img src='../../../cdn-sucdenfinancial.azureedge.net/8/0/4/0/1/2/804012912b3face597e24f4d56a2cc44732bd0ab.jpg?crop=0,0.0016025641025641634,0.43659855769230765,0&amp;cropmode=percentage&amp;width=550&amp;height=550&amp;rnd=132309003012030000' srcset='/media/nd5bcoqn/coffee_mug_home_window.jpeg?crop=0,0.0016025641025641634,0.43659855769230765,0&cropmode=percentage&width=550&height=550&rnd=132309003012030000 1x, /media/nd5bcoqn/coffee_mug_home_window.jpeg?anchor=center&mode=crop&width=1100&height=1100&rnd=132309003012030000 2x' loading='lazy' alt='Coffee Mug Home Window' />
                                                        </div>
                                                    </div>
                                                    <svg width="52" height="58" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M41.604.893l9.838 10.627H38.374l-.237-9.217a2 2 0 013.467-1.41z" fill="#5000A7"/><g fill-rule="nonzero"><path fill="#000" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/><path fill="#9435FB" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/></g><g fill="#FFF" fill-rule="nonzero"><path d="M21.32 17.503h-2.3l-.711-2.187a.638.638 0 00-1.213 0l-.71 2.187h-2.3a.638.638 0 00-.374 1.153l1.861 1.352-.71 2.187a.639.639 0 00.98.712l1.86-1.353 1.862 1.353a.636.636 0 00.749 0 .637.637 0 00.231-.712l-.71-2.188 1.86-1.353a.637.637 0 00-.375-1.15z"/><path d="M33.414 30.796l-3.802-3.802c-1.086-1.086-2.87-1.229-4.144-.437l-.001-.002-1.3-1.322a8.511 8.511 0 002.154-5.655c.001-4.73-3.865-8.578-8.618-8.578-4.754 0-8.619 3.848-8.619 8.576 0 4.73 3.867 8.577 8.62 8.577a8.601 8.601 0 005.554-2.03l1.288 1.31a3.285 3.285 0 00-.61 1.91c0 .887.345 1.723.974 2.352l3.803 3.802c.627.63 1.46.975 2.35.975a3.3 3.3 0 002.352-.974 3.327 3.327 0 00-.001-4.702zm-23.056-11.22c0-4.027 3.294-7.302 7.345-7.302 4.05 0 7.344 3.275 7.344 7.302 0 4.028-3.294 7.303-7.344 7.303-4.05 0-7.345-3.275-7.345-7.303zm22.155 15.021c-.774.774-2.125.774-2.9 0l-3.803-3.801a2.037 2.037 0 01-.6-1.452c0-.55.212-1.064.6-1.45a2.039 2.039 0 011.452-.603c.548 0 1.064.214 1.45.602l3.803 3.802a2.057 2.057 0 01-.002 2.902z"/></g></g></svg>
                                                </div>
                                                <div class="c-premium-research-block__t">
                                                    <h3 class="h3"><a href="research/home-time/index.html" class="cover"><span>Home Time</span></a></h3>
                                                    <p>The latest report outlines the fundamentals of the coffee market and assesses the impact of COVID-19 on demand and supply chain logistics. We outline changes to our forecasts for the 2020/21 season and provide some trading strategies to help navigate this tricky market. </p>
                                                    <div class="c-premium-research-details">
                                                        <p>Written by Geordie Wilkes</p>
                                                        <p class="t-small"><time datetime="2020-04-07">07.04.2020</time></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="c-premium-research-block">
                                                <div class="c-premium-research-block__i">
                                                    <div class="media media--1-1">
                                                        <div class="media__item">
                                                            <img src='../../../cdn-sucdenfinancial.azureedge.net/e/6/3/9/8/9/e63989ff8016001d6d381c8635db5427996876e1.jpg?anchor=center&amp;mode=crop&amp;width=550&amp;height=550&amp;rnd=132302150148470000' srcset='/media/zqkdppzs/adobestock_237685010.jpeg?anchor=center&mode=crop&width=550&height=550&rnd=132302150148470000 1x, /media/zqkdppzs/adobestock_237685010.jpeg?anchor=center&mode=crop&width=1100&height=1100&rnd=132302150148470000 2x' loading='lazy' alt='Electric Vehicle in Tunnel' />
                                                        </div>
                                                    </div>
                                                    <svg width="52" height="58" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M41.604.893l9.838 10.627H38.374l-.237-9.217a2 2 0 013.467-1.41z" fill="#5000A7"/><g fill-rule="nonzero"><path fill="#000" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/><path fill="#9435FB" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/></g><g fill="#FFF" fill-rule="nonzero"><path d="M21.32 17.503h-2.3l-.711-2.187a.638.638 0 00-1.213 0l-.71 2.187h-2.3a.638.638 0 00-.374 1.153l1.861 1.352-.71 2.187a.639.639 0 00.98.712l1.86-1.353 1.862 1.353a.636.636 0 00.749 0 .637.637 0 00.231-.712l-.71-2.188 1.86-1.353a.637.637 0 00-.375-1.15z"/><path d="M33.414 30.796l-3.802-3.802c-1.086-1.086-2.87-1.229-4.144-.437l-.001-.002-1.3-1.322a8.511 8.511 0 002.154-5.655c.001-4.73-3.865-8.578-8.618-8.578-4.754 0-8.619 3.848-8.619 8.576 0 4.73 3.867 8.577 8.62 8.577a8.601 8.601 0 005.554-2.03l1.288 1.31a3.285 3.285 0 00-.61 1.91c0 .887.345 1.723.974 2.352l3.803 3.802c.627.63 1.46.975 2.35.975a3.3 3.3 0 002.352-.974 3.327 3.327 0 00-.001-4.702zm-23.056-11.22c0-4.027 3.294-7.302 7.345-7.302 4.05 0 7.344 3.275 7.344 7.302 0 4.028-3.294 7.303-7.344 7.303-4.05 0-7.345-3.275-7.345-7.303zm22.155 15.021c-.774.774-2.125.774-2.9 0l-3.803-3.801a2.037 2.037 0 01-.6-1.452c0-.55.212-1.064.6-1.45a2.039 2.039 0 011.452-.603c.548 0 1.064.214 1.45.602l3.803 3.802a2.057 2.057 0 01-.002 2.902z"/></g></g></svg>
                                                </div>
                                                <div class="c-premium-research-block__t">
                                                    <h3 class="h3"><a href="research/the-true-cost-of-electric-vehicles-us-energy-sector/index.html" class="cover"><span>The True Cost of Electric Vehicles - US Energy Sector</span></a></h3>
                                                    <p>The first of four reports focusing on how the electricity to charge electric vehicles is generated, comparing their overall efficiency and carbon footprint with internal combustion engine vehicles.</p>
                                                    <div class="c-premium-research-details">
                                                        <p>Written by Geordie Wilkes</p>
                                                        <p class="t-small"><time datetime="2020-01-06">06.01.2020</time></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="c-premium-research-block">
                                                <div class="c-premium-research-block__i">
                                                    <div class="media media--1-1">
                                                        <div class="media__item">
                                                            <img src='../../../cdn-sucdenfinancial.azureedge.net/1/f/e/f/8/0/1fef806c2c8e4da788f9f3906aef9a0f04f55321.png?anchor=center&amp;mode=crop&amp;width=550&amp;height=550&amp;rnd=132283302639630000' srcset='/media/gt1h1l2f/coffee-report_1665x937.png?anchor=center&mode=crop&width=550&height=550&rnd=132283302639630000 1x, /media/gt1h1l2f/coffee-report_1665x937.png?anchor=center&mode=crop&width=1100&height=1100&rnd=132283302639630000 2x' loading='lazy' alt='Coffee Report 1665X937' />
                                                        </div>
                                                    </div>
                                                    <svg width="52" height="58" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M41.604.893l9.838 10.627H38.374l-.237-9.217a2 2 0 013.467-1.41z" fill="#5000A7"/><g fill-rule="nonzero"><path fill="#000" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/><path fill="#9435FB" d="M38.326 0a4.346 4.346 0 014.34 4.34v35.28c0 1.522-.815 2.95-2.128 3.729l-15.997 9.473c-.683.4-1.446.602-2.21.602a4.327 4.327 0 01-2.207-.605L4.127 43.35A4.36 4.36 0 012 39.617V4.337A4.34 4.34 0 016.337 0z"/></g><g fill="#FFF" fill-rule="nonzero"><path d="M21.32 17.503h-2.3l-.711-2.187a.638.638 0 00-1.213 0l-.71 2.187h-2.3a.638.638 0 00-.374 1.153l1.861 1.352-.71 2.187a.639.639 0 00.98.712l1.86-1.353 1.862 1.353a.636.636 0 00.749 0 .637.637 0 00.231-.712l-.71-2.188 1.86-1.353a.637.637 0 00-.375-1.15z"/><path d="M33.414 30.796l-3.802-3.802c-1.086-1.086-2.87-1.229-4.144-.437l-.001-.002-1.3-1.322a8.511 8.511 0 002.154-5.655c.001-4.73-3.865-8.578-8.618-8.578-4.754 0-8.619 3.848-8.619 8.576 0 4.73 3.867 8.577 8.62 8.577a8.601 8.601 0 005.554-2.03l1.288 1.31a3.285 3.285 0 00-.61 1.91c0 .887.345 1.723.974 2.352l3.803 3.802c.627.63 1.46.975 2.35.975a3.3 3.3 0 002.352-.974 3.327 3.327 0 00-.001-4.702zm-23.056-11.22c0-4.027 3.294-7.302 7.345-7.302 4.05 0 7.344 3.275 7.344 7.302 0 4.028-3.294 7.303-7.344 7.303-4.05 0-7.345-3.275-7.345-7.303zm22.155 15.021c-.774.774-2.125.774-2.9 0l-3.803-3.801a2.037 2.037 0 01-.6-1.452c0-.55.212-1.064.6-1.45a2.039 2.039 0 011.452-.603c.548 0 1.064.214 1.45.602l3.803 3.802a2.057 2.057 0 01-.002 2.902z"/></g></g></svg>
                                                </div>
                                                <div class="c-premium-research-block__t">
                                                    <h3 class="h3"><a href="research/blue-skies-ahead/index.html" class="cover"><span>Blue Skies Ahead?</span></a></h3>
                                                    <p>The latest episode of our fundamental coffee market outlook looks at whether or not the recent rally will last and gives some trading strategies to help navigate the market.</p>
                                                    <div class="c-premium-research-details">
                                                        <p>Written by Geordie Wilkes</p>
                                                        <p class="t-small"><time datetime="2019-12-18">18.12.2019</time></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="swiper-navigation">
                                    <div class="swiper-button swiper-button-prev"><svg><use xlink:href="#arrow"></use></svg></div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button swiper-button-next"><svg><use xlink:href="#arrow"></use></svg></div>
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
            
            
            
            
            
            
            <div class="modal" tabindex="-1" data-modal="subscribe">
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
            </div>
            
            
            
            
            
                <div class="umb-grid">
                            <div class="grid-section">
                            
                
            
            
            <section class="bg-green" data-animate="AnimateBand">
                <div class="c-band">
                    <div class="container">
                        <div class="c-band__t">
                            <h2 class="t-large" data-animate="AnimateText">FAQs</h2>
                            <p data-animate="AnimateText">These FAQs provide answers to some of the most frequently asked questions about our reports.</p>
                                <p data-animate="AnimateText">
                                        <a href="faqs/index.html" class="btn btn--dark" >FAQs Section</a>
                                </p>
            
                        </div>
                    </div>
                </div>
            </section>
            
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
