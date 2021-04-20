@extends('frontend.layouts.dashboard')
@inject('dateFormat', 'App\Services\DateService')
@section('content')
<head>
<style>
input[type=text], select, textarea {
    width: 100%;
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
  
  input[type=checkbox] {
    color:white;
    padding: 12px 20px;
    border:solid 2px white;
    border-radius: 4px;
    
  }

  input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  body{
      color:white;
  }
  h1{
      font-size:38px;
      margin:25px auto;
  }
  </style>
  </head>
<body>
<main id="content">
      <div class="container" style="max-width:100%; padding:25px 45px; background-image:url(images/contact-back.jpg); background-repeat:no-repeat; opacity:0.85;">
        <div class="row">
            <h1 >Contact Form</h1>
        </div>  
        <div class="col-sm-1 col-lg-5">
            
            <form action="/action_page.php">
            <label for="fname">Your Name</label>
            <input type="text" id="fname" name="firstname" placeholder="nice to meet">
        
            <label for="lname">Email</label>
            <input type="text" id="lname" name="lastname" placeholder="We'll reply to you">
        
            <label for="subject">Message</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
           
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> I'm not a robot.</label><br>

            <input type="submit" value="Submit">
            </form>
      </div>
      <div class="col-sm-1 col-lg-4">

      </div>
      <div class="col-sm-1 col-lg-3">

      </div>

</main>
 <body>
    
  
@endsection
