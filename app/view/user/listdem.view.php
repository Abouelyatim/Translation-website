<style type="text/css">

    table.data {
        width: 100%;
        clear: both;
    }

    table.data tr:hover td:nth-child(odd),
    table.data tr:hover td.odd,
    table.data tr:hover td {
        background: rgba(64, 142, 186, 0.18) !important;
        /*color: #FFF !important;*/
    }

    table.data tr:hover td a:link,
    table.data tr:hover td a:visited {
        color: #FFF !important;
    }

    table.data tr:first-child {
        border-bottom: solid 1px #EFEFEF;
    }

    table.data tr th {
        font-size: 0.85em;
        font-weight: bold;
        padding: 5px 0 10px 10px;
        border-right: solid 1px #EFEFEF;
        text-align: left;
        border-bottom: solid 3px #e0e0e0;
    }

    table.data tr th:last-child {
        text-align: center;
        border-right: none;
        width: 120px;
    }

    table.data tr td {
        font-size: 0.85em;
        padding: 8px 5px 8px 10px;
        text-align: left;
        border-bottom: solid 1px #EFEFEF;
    }

    table.data tr td:last-child {
        text-align: center;
    }

    div.statTable.report table tr td:last-child,
    div.statTable.report table tr th:last-child {
        text-align: left;
    }

    table.data tr:nth-child(odd) {
        background: #f3f5f6;
    }

    table.data tr.odd {
        background: #f3f5f6 !important;
    }

    table.data tr:first-child {
        background: transparent;
    }

    table.data tr td a.linethrough {
        text-decoration: line-through;
    }

    table.data tr td:last-child a {
        display: inline-block;
        margin-right: 5px;
        font-size: 1.1em;
    }

    table.data tbody tr:only-child td[colspan] {
        text-align: left;
    }

    table.dataTable thead .sorting_asc,
    table.dataTable thead .sorting_desc,
    table.dataTable thead .sorting {
        cursor: pointer;
        *cursor: hand;
    }



    /*
     * Control feature layout
     */
    .dataTables_wrapper {
        position: relative;
        clear: both;
        *zoom: 1;
        zoom: 1;
    }
    .dataTables_wrapper .dataTables_length {
        float: right;
        margin: 0 10px 25px 0;
    }
    .dataTables_wrapper .dataTables_length label,
    .dataTables_wrapper .dataTables_filter label {
        font-size: 0.8em;
    }
    .dataTables_wrapper .dataTables_filter {
        float: left;
        text-align: left;
        margin: 0 5px 25px 0;
    }
    .dataTables_wrapper .dataTables_filter input {
        margin-left: 0.5em;
        border-radius: 2px;
        border: solid 1px #EFEFEF;
        padding: 3px;
        width: 350px;
    }
    .dataTables_wrapper .dataTables_info {
        clear: both;
        float: right;
        padding-top: 0.755em;
        margin: 5px 0 0 0;
        font-size: 0.85em;
    }
    .dataTables_wrapper .dataTables_paginate {
        float: left;
        text-align: left;
        padding-top: 0.25em;
        margin: 5px 0 0 0;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        box-sizing: border-box;
        display: inline-block;
        padding: 2px 5px;
        margin-right: 2px;
        border-radius: 2px;
        text-align: center;
        text-decoration: none !important;
        cursor: pointer;
        *cursor: hand;
        border: 1px solid transparent;
        font-size: 0.85em;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
        color: #333333 !important;
        border: 1px solid #cacaca;
        background-color: #EFEFEF;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
        cursor: default;
        color: #ccc !important;
        border: 1px solid transparent;
        background: transparent;
        box-shadow: none;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        color: white !important;
        background-color: #585858;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:active {
        outline: none;
        background-color: #2b2b2b;
        /* W3C */
        box-shadow: inset 0 0 3px #111;
    }
    .dataTables_wrapper .dataTables_processing {
        position: absolute;
        top: 50%;
        right: 50%;
        width: 100%;
        height: 40px;
        margin-right: -50%;
        margin-top: -25px;
        padding-top: 20px;
        text-align: center;
        font-size: 1.2em;
        background-color: white;
        background: -webkit-gradient(linear, right top, right top, color-stop(0%, rgba(255, 255, 255, 0)), color-stop(25%, rgba(255, 255, 255, 0.9)), color-stop(75%, rgba(255, 255, 255, 0.9)), color-stop(100%, rgba(255, 255, 255, 0)));
        /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
        /* Chrome10+,Safari5.1+ */
        background: -moz-linear-gradient(right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
        /* FF3.6+ */
        background: -ms-linear-gradient(right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
        /* IE10+ */
        background: -o-linear-gradient(right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
        /* Opera 11.10+ */
        background: linear-gradient(to left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
        /* W3C */
    }
    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_processing,
    .dataTables_wrapper .dataTables_paginate {
        color: #666;
        font-family: 'NeoSansArabic' !important;
    }
    .dataTables_wrapper .dataTables_scroll {
        clear: both;
    }
    .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody {
        *margin-top: -1px;
        -webkit-overflow-scrolling: touch;
    }
    .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody th > div.dataTables_sizing,
    .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody td > div.dataTables_sizing {
        height: 0;
        overflow: hidden;
        margin: 0 !important;
        padding: 0 !important;
    }
    .dataTables_wrapper.no-footer .dataTables_scrollBody {
        border-bottom: 1px solid #111111;
    }
    .dataTables_wrapper.no-footer div.dataTables_scrollHead table,
    .dataTables_wrapper.no-footer div.dataTables_scrollBody table {
        border-bottom: none;
    }
    .dataTables_wrapper:after {
        visibility: hidden;
        display: block;
        content: "";
        clear: both;
        height: 0;
    }

    table.dataTable tr td:first-child a i {
        display: inline-block;
        margin: 0 5px 0 0;
    }
    /* Three columns side by side */
    .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
    }

    /* Display the columns below each other instead of side by side on small screens */
    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }

    /* Add some shadows to create a card effect */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    /* Some left and right padding inside the container */
    .container {
        padding: 0 16px;
    }

    /* Clear floats */
    .container::after, .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        color: grey;
    }

    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button:hover {
        background-color: #555;
    }
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


    div#socialContainer{
        background: #547980;
        height: 60px;
        width: auto;

        height: 40px;

        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
    }
    div#navbar {
        overflow:auto;
        background-color: #4d5256;
        width: 100%;
        position: fixed;
        top: 1;
        padding-top: 45px;
        z-index: 999;
    }

    h2#titel1{
        padding-left:50px!important;
        font-family: 'Raleway', sans-serif;
        font-weight: 900!important;
        font-family: cursive;
        color: white
    }
</style>

<div  id="socialContainer">
    <h2 id="titel1">liste des demandes</h2>
</div>

<div id="navbar" style="height: 20px">
</div>
<br/><br/><br/>
<br/><br/><br/>
<br/><br/><br/>
<table class="data" id="myTable2">
    <thead>
    <tr>
        <th onclick="sortTable(0)">Nom client</th>
        <th onclick="sortTable(1)">Prenom client</th>
        <th>mail client</th>
        <th>Langue origine</th>
        <th>Langue source</th>
        <th onclick="sortTable(4)">fichier</th>

        <th onclick="sortTable(5)">date soumision</th>
        <th onclick="sortTable(6)">type</th>
        <th onclick="sortTable(7)">etat</th>
        <th onclick="sortTable(7)">prix</th>
        <th>bon</th>

        <th>control</th>


    </tr>
    </thead>
    <tbody>
    <?php

    foreach ($demande as $dem) {
    ?>

    <tr>

        <td><?= $dem[0]?></td>
        <td><?= $dem[1]?></td>
        <td><?= $dem[2]?></td>
        <td><?= $dem[3]?></td>
        <td><?= $dem[4]?></td>
        <td><?= $dem[5]?></td>
        <td><?= $dem[9]?></td>
        <td><?= $dem[10]?></td>
        <td><?= $dem[6]?></td>
        <td><?= $dem[12]?></td>
        <td><?= $dem[13]?></td>

        <td>

            <?php
            if($dem[6]!='terminer') {

                ?>
                <a style="color: #c3e6cb" href="/web/public/user/accepter/<?=$dem[7]?>/<?=$dem[6]?>" onclick="">accepter</a>
                <a style="color: #c3e6cb" href="/web/public/user/refuser/<?=$dem[7]?>/<?=$dem[6]?>" onclick="">resfuser</a>
                <?php
            }
            if($dem[6]=='terminer') {

            ?>
            <a download style="color: #c3e6cb" href="/web/public/uploads/documents/<?php  echo $dem[14] ?>" >download</a>
                <?php
            }
            ?>



        </td>
        <?php } ?>




    </tr>



    <script>
        function sortTable(n) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById("myTable2");
            switching = true;
            // Set the sorting direction to ascending:
            dir = "asc";
            /* Make a loop that will continue until
            no switching has been done: */
            while (switching) {
                // Start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /* Loop through all table rows (except the
                first, which contains table headers): */
                for (i = 1; i < (rows.length - 1); i++) {
                    // Start by saying there should be no switching:
                    shouldSwitch = false;
                    /* Get the two elements you want to compare,
                    one from current row and one from the next: */
                    x = rows[i].getElementsByTagName("TD")[n];
                    y = rows[i + 1].getElementsByTagName("TD")[n];
                    /* Check if the two rows should switch place,
                    based on the direction, asc or desc: */
                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            // If so, mark as a switch and break the loop:
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            // If so, mark as a switch and break the loop:
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    /* If a switch has been marked, make the switch
                    and mark that a switch has been done: */
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    // Each time a switch is done, increase this count by 1:
                    switchcount ++;
                } else {
                    /* If no switching has been done AND the direction is "asc",
                    set the direction to "desc" and run the while loop again. */
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }



    </script>

    </tbody>
</table>
<br/><br/><br/>
<div style="display: inline-flex;width: 100%" >
    <button   style="width:10%;margin-left: 15px;margin-right: 15px ;"><a style="color: #f7f5fe" href= "/web/public/index/login"  >retour</a></button>
</div>