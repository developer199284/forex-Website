@extends('frontend.layouts.dashboard')
@inject('dateFormat', 'App\Services\DateService')
@section('content')

<style>
.nomargin{
    
}    
label{
    margin-top: 26px;
    font-size: 19px;
}
input[type=text], select, textarea {
    width: 80%;
    padding: 12px;
    color:black;
    border: 1px solid rgb(88, 202, 60);
    background-color: rgb(253, 251, 251);
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  .c-report-card {
    border-radius: 0px;
  }
  @media (max-width:706px) {
    .c-report-card {
        padding-bottom: 173.5%;
    }
}

.information-box {
    background-color: #3c435b; 
    color:white; 
    padding:2% 3% 30% 3%;

}

@media (max-width:706px) {
    .information-box{
        padding:2% 3% 146% 3%;
    }
}



</style>
 <main id="content">
    <section class="section bg-dark c-reports" data-reports>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="h5"data-animate="Animate" >Finance</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 col-lg-6">
                            <div class="c-report-card" style="background-color: #3c435b; color:white;">
                                <div class="row">
                                    <a href="#" class="" style="margin:30px auto; font-size:34px;"> <span>Send Withdrawal Request</span></a>
                                </div>
                                <div class="row" style="padding:0px 20px;">
                                    <span class="col-lg-6" style="text-align: left"><label>Your MT4 Login ID:</label></span>
                                    <span class="col-lg-6"><input type="text"></span>
                                </div>
                                <div class="row" style="padding:0px 20px;">
                                    <span class="col-lg-6" style="text-align: left"><label>Amount:</label></span>
                                    <span class="col-lg-6"><input type="text" placeholder="$"></span>
                                </div>
                                <div class="row" style="padding:0px 20px;">
                                    <span class="col-lg-6" style="text-align: left"><label>Your e-mail:</label></span>
                                    <span class="col-lg-6"><input type="text"></span>
                                </div>
                                <div class="row" style="padding:0px 20px;">
                                    <span class="col-lg-6" style="text-align: left"><label>Account No(eg.IBAN):</label></span>
                                    <span class="col-lg-6"><input type="text"></span>
                                </div>
                                    <button class="btn" style="margin: 20px auto 5px; border-radius:0px;" >Send Request</button>

                               
                            </div>
                            <hr>
                        </div>

                        <div class="col-sm-1 col-lg-6">
                            <div class="c-report-card" style="background-color: #3c435b; color:white;">
                                <div class="row">
                                    <a href="#" class="" style="margin:30px auto; font-size:34px;"> <span>Send Deposit Notification</span></a>
                                </div>
                                <div class="row" style="padding:0px 20px;">
                                    <span class="col-lg-6" style="text-align: left"><label>Your MT4 Login ID:</label></span>
                                    <span class="col-lg-6"><input type="text"></span>
                                </div>
                                <div class="row" style="padding:0px 20px;">
                                    <span class="col-lg-6" style="text-align: left"><label>Amount:</label></span>
                                    <span class="col-lg-6"><input type="text" placeholder="$"></span>
                                </div>
                                <div class="row" style="padding:0px 20px;">
                                    <span class="col-lg-6" style="text-align: left"><label>Description:</label></span>
                                    <span class="col-lg-6"><textarea id="subject" name="subject" placeholder="Write something.." style="height:97px"></textarea>
                                    </span>
                                </div>
                              
                                <button class="btn" style=" margin: 20px auto 5px; border-radius:0px;" click="" >Send Notification</button>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row" style="    text-align: center;    padding: 55px 0px 25px 0px;">
                        <div class="col-12">
                            <button class="btn" style=" margin: 20px auto 5px; border-radius:0px;" click="" >Our Account Informations</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 col-lg-12">
                            <div class="c-report-card information-box">
                                <div class="row" style="padding:5px 20px;">
                                    <span class="col-lg-6" style="text-align: right"><label>Beneficiary Name:</label></span>
                                    <span class="col-lg-6" style="text-align: left"><label>"Database Data"</label></span>
                                </div>
                                <div class="row" style="padding:5px 20px;">
                                    <span class="col-lg-6" style="text-align: right"><label>IBAN:</label></span>
                                    <span class="col-lg-6" style="text-align: left"><label>"Database Data"</label></span>
                                </div>
                                <div class="row" style="padding:5px 20px;">
                                    <span class="col-lg-6" style="text-align: right"><label>Beneficiary's Bank:</label></span>
                                    <span class="col-lg-6" style="text-align: left"><label>"Database Data"</label></span>
                                </div>
                                <hr>
                                <div class="row" style="padding:5px 20px;">
                                    <span class="col-lg-6" style="text-align: right"><label>USDT Wallet:</label></span>
                                    <span class="col-lg-6" style="text-align: left"><label>"Database Data"</label></span>
                                </div>
                                <div class="row" style="padding:5px 20px;">
                                    <span class="col-lg-6" style="text-align: right"><label>"Database Data" Wallet:</label></span>
                                    <span class="col-lg-6" style="text-align: left"><label>"Database Data"</label></span>
                                </div>

                            </div>
                          
                        </div>
                </div>
                
            </div>

 </main>


<script type="text/javascript" src="frontend/js/home.js"></script>
@endsection
