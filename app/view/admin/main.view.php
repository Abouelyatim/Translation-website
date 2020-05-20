<style type="text/css">

    /*inscription*/

    body {font-family: Arial, Helvetica, sans-serif;}

    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 10px 10px;
        margin: 1px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4d5256;
        color: white;
        padding: 14px 20px;
        margin: 4px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 5px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 2px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 50%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)}
        to {-webkit-transform: scale(1)}
    }

    @keyframes animatezoom {
        from {transform: scale(0)}
        to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }

    .modal-content {


        width: 80%!important;
        padding-top: 1px!important;
    }

    button {
     background-color: #4d5256!important;
    }



</style>

<head>
    <title>TRAD</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css"/>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>





    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>




<body>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.12.4%20min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.12.4%20min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-3.4.1.slim.min.js"></script>

<style type="text/css">
    <?php
  require "css/style.css";
    require "css/bootstrap.min.css";
    require "css/fontawesome.min.css";
  //include "css/style.css";

  ?>

</style>


<div  id="socialContainer">

    <div id="socialDiv" >
        <ul id="socialIcons">
            <li><a href="#" class="fa fa-facebook"></a></li>
            <li><a href="#" class="fa fa-twitter"></a></li>
            <li><a href="#" class="fa fa-instagram"></a></li>
            <li><a href="#" class="fa fa-reddit"></a></li>
            <li><a href="#" class="fa fa-linkedin"></a></li>

        </ul>

    </div>
    <h2 id="titel1">ITARD</h2>


</div>


<div id="tesst">
    <div id="navbar">
        <a href="/web/public/admin/traducteur">Gestion des traducteurs</a>
        <a href="/web/public/admin/client">Gestion des clients</a>
        <a href="/web/public/admin/document">Gestion des documents</a>
        <a href="/web/public/admin/statistique">Statistique</a>


    </div>
</div>




<br/><br/><br/>
<br/><br/><br/><br/>
<br/><br/><br/><br/>

<div style="display: inline-flex;width: 100%" >
    <button   style="width:25%;margin-left: 15px;margin-right: 15px ;"><a href="/web/public/admin/traducteur"style="color: #f7f5fe">Gestion des traducteurs</a></button>
    <br/><br/>
    <button  style="width:25% ;margin-left: 15px;margin-right: 15px"><a href="/web/public/admin/client"style="color: #f7f5fe">Gestion des clients</a></button>
    <br/><br/>
    <button  style="width:25%;margin-left: 15px;margin-right: 15px"><a href="/web/public/admin/document"style="color: #f7f5fe">Gestion des documents</a></button>
    <br/><br/>

    <button  style="width:25%;margin-left: 15px;margin-right: 15px"><a href="/web/public/admin/statistique" style="color: #f7f5fe">Statistique</a></button>

</div>







</body>