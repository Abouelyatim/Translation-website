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
        background-color: #4CAF50;
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






</style>


<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Inscription</button>

<div id="id01" class="modal">

    <form class="modal-content animate" action="" method="post">

        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

        </div>

        <div class="container">
            <label for="nom"><b>Nom</b></label>
            <input type="text" placeholder="Enter nom" name="nom" required>

            <label for="prenom"><b>Prenom</b></label>
            <input type="text" placeholder="Enter Prenom" name="prename" required>

            <label for="mail"><b>Mail</b></label>
            <input type="text" placeholder="Enter mail" name="mail"  pattern=".+@*.com" required>

            <label for="tel"><b>Tel</b></label>
            <input type="text" placeholder="Enter Tel" name="tel" required>

            <label for="fax"><b>Fax</b></label>
            <input type="text" placeholder="Enter Tel" name="fax" required>

            <label for="wilaya"><b>Wilaya</b></label>
            <select name="wilaya" style="width:100%; ">
                <option value="Oran">Oran</option>
                <option value="Boumerdes">Boumerdes</option>
                <option value="Alger">Alger</option>
                <option value="El-Oued">El-Oued</option>
                <option value="Tizi-ouzou">Tizi-ouzou</option>
            </select>

            <label for="commune"><b>Commune</b></label>
            <input type="text" placeholder="Enter nom" name="commune" required>

            <label for="adresse"><b>Adresse</b></label>
            <input type="text" placeholder="Enter nom" name="adresse" required>

            <label for="langues"><b>Langues</b></label>
            <select name="langues" style="width:100%;">
                <option value="Arabe-Français-Anglais">Arabe-Français-Anglais</option>
                <option value="Arabe–Turque">Arabe–Turque</option>
                <option value="Arabe-Anglais-Espagnol">Arabe-Anglais-Espagnol</option>
                <option value="El-Arabe-Français">Arabe-Français</option>
                <option value="	Arabe-Chinois-Anglais">Arabe-Chinois-Anglais</option>
            </select>


            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" name="submit10" value="save">Inscription</button>

        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

        </div>
    </form>
</div>