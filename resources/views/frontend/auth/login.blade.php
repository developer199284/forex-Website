@extends('frontend.layouts.empty')
@section('content')
<link href="metronic/css/pages/login/login-2.css" rel="stylesheet" type="text/css"/>
<input type="hidden" name="error" id="error" value="{{isset($error)?$error:''}}" />
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
	<!--begin::Login-->
	<div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white {{$page_title=='Login'?'login-signin-on':($page_title=='Register'?'login-signup-on':'login-forgot-on')}}" id="kt_login">
    	<!--begin::Aside-->
    	<div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
	        <!--begin: Aside Container-->
	        <div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35">
	            <!--begin::Logo-->
	            <a href="#" class="text-center pt-2">
	                <img src="images/logo.png" class="max-w-135px" alt=""/>
	            </a>
	            <!--end::Logo-->

	            <!--begin::Aside body-->
	            <div class="d-flex flex-column-fluid flex-column flex-center">
                	<!--begin::Signin-->
                	<div class="login-form login-signin py-11">
	                    <!--begin::Form-->
	                    <form class="form" novalidate="novalidate" method="post" action="login" id="kt_login_signin_form">
	                    	<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                            <!--begin::Title-->
	                        <div class="text-center pb-8">
								<h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">{{trans('login.signin')}}</h2>
								<span class="text-muted font-weight-bold font-size-h4">{{trans('login.or')}} <a href="" class="text-primary font-weight-bolder" id="kt_login_signup">{{trans('login.createaccount')}}</a></span>
	                        </div>
	                        <!--end::Title-->

	                        <!--begin::Form group-->
	                        <div class="form-group">
	                            <label class="font-size-h6 font-weight-bolder text-dark">{{trans('login.email')}}</label>
	                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="username" autocomplete="off"/>
	                        </div>
	                        <!--end::Form group-->

	                        <!--begin::Form group-->
	                        <div class="form-group">
	                            <div class="d-flex justify-content-between mt-n5">
									<label class="font-size-h6 font-weight-bolder text-dark pt-5">{{trans('login.password')}}</label>
									<a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">
									{{trans('login.forgotpassword')}}
									</a>
	                            </div>

                            	<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="password" autocomplete="off"/>
	                        </div>
	                        <!--end::Form group-->

	                        <!--begin::Action-->
	                        <div class="text-center pt-2">
	                            <button id="kt_login_signin_submit" class="btn btn-dark font-weight-bolder font-size-h6 px-8 py-4 my-3">{{trans('login.signin')}}</button>
	                        </div>
	                        <!--end::Action-->
	                    </form>
	                    <!--end::Form-->
	                </div>
	                <!--end::Signin-->

	                <!--begin::Signup-->
	                <div class="login-form login-signup pt-11">
	                    <!--begin::Form-->
	                    <form class="form" novalidate="novalidate" method="post" action="/register" id="kt_login_signup_form">
							<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
							<!--begin::Title-->
	                        <div class="text-center pb-8">
	                            <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">{{trans('login.createaccount')}}</h2>
	                            <!--p class="text-muted font-weight-bold font-size-h4">{{trans('login.enterdetail')}}</p-->
	                        </div>
	                        <!--end::Title-->

	                        <!--begin::Form group-->
	                        <div class="form-group">
	                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="text" placeholder="{{trans('login.firstname')}}" name="first_name" autocomplete="off"/>
	                        </div>
	                        <!--end::Form group-->
	                        <!--begin::Form group-->
	                        <div class="form-group">
	                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="text" placeholder="{{trans('login.lastname')}}" name="last_name" autocomplete="off"/>
	                        </div>
	                        <!--end::Form group-->
	                        <!--begin::Form group-->
	                        <div class="form-group">
	                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="text" placeholder="{{trans('login.username')}}" name="username" autocomplete="off"/>
							</div>
	                        <!--end::Form group-->

	                        <!--begin::Form group-->
	                        <div class="form-group">
	                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="{{trans('login.email')}}" name="email" autocomplete="off"/>
	                        </div>
	                        <!--end::Form group-->

	                        <!--begin::Form group-->
	                        <div class="form-group">
	                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="{{trans('login.password')}}" name="password" autocomplete="off"/>
	                        </div>
	                        <!--end::Form group-->

	                        <!--begin::Form group-->
	                        <div class="form-group">
	                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="{{trans('login.confirm')}}" name="cpassword" autocomplete="off"/>
	                        </div>
	                        <!--end::Form group-->

	                        <!--begin::Form group-->
	                        <div class="form-group">
	                            <label class="checkbox mb-0">

	                                <input type="checkbox" name="agree"/>{{trans('login.iagree')}}<a href='javascript:;' style='margin-left:10px;'>{{trans('login.term')}}</a>.
                                    <span style="margin-left:10px;margin-right:10px;"></span>
	                            </label>
	                        </div>
	                        <!--end::Form group-->

	                        <!--begin::Form group-->
	                        <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
	                            <button type="button" id="kt_login_signup_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">{{trans('login.submit')}}</button>
	                            <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">{{trans('login.cancel')}}</button>
	                        </div>
	                        <!--end::Form group-->
	                    </form>
	                    <!--end::Form-->
	                </div>
	                <!--end::Signup-->

	                <!--begin::Forgot-->
	                <div class="login-form login-forgot pt-11">
	                    <!--begin::Form-->
	                    <form class="form" novalidate="novalidate" method="post" action="/forgot" id="kt_login_forgot_form">
							<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
	                        <!--begin::Title-->
	                        <div class="text-center pb-8">
	                            <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">{{trans('login.forgotten')}}</h2>
	                            <p class="text-muted font-weight-bold font-size-h4">{{trans('login.enteremail')}}</p>
	                        </div>
	                        <!--end::Title-->

	                        <!--begin::Form group-->
	                        <div class="form-group">
	                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="{{trans('login.email')}}" name="email" autocomplete="off"/>
	                        </div>
	                        <!--end::Form group-->

	                        <!--begin::Form group-->
	                        <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
	                            <button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">{{trans('login.submit')}}</button>
	                            <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">{{trans('login.cancel')}}</button>
	                        </div>
	                        <!--end::Form group-->
	                    </form>
	                    <!--end::Form-->
	                </div>
	                <!--end::Forgot-->
	            </div>
	            <!--end::Aside body-->

            </div>
            <!--end: Aside Container-->
	    </div>
	    <!--begin::Aside-->

    	<!--begin::Content-->
    	<div class="content order-1 order-lg-2 d-flex flex-column w-100 pb-0" style="background-color: #B1DCED;">
	        <!--begin::Title-->
	        <div class="d-flex flex-column justify-content-center text-center pt-lg-40 pt-md-5 pt-sm-5 px-lg-0 pt-5 px-7">
	            <h3 class="display4 font-weight-bolder my-7 text-dark" style="color: #986923;">{{trans('login.right-panel-title')}}</h3>
	            <p class="font-weight-bolder font-size-h2-md font-size-lg text-dark opacity-70">
	                {{trans('login.right-panel-text')}}
	            </p>
	        </div>
	        <!--end::Title-->

	        <!--begin::Image-->
	        <div class="content-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(metronic/media/svg/illustrations/login-visual-2.svg);"></div>
	        <!--end::Image-->
    	</div>
    	<!--end::Content-->
	</div>
	<!--end::Login-->
</div>
<!--end::Main-->

<!--begin::Page Scripts(used by this page)-->
<script src="frontend/js/lang/{{app()->getLocale()}}.js"></script>
<script src="metronic/js/pages/custom/login/login-general.js"></script>
<!--end::Page Scripts-->

@endsection
