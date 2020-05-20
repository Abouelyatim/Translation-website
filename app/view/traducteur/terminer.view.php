<style type="text/css">
    <?php
  require "css/style.css";
    require "css/bootstrap.min.css";
    require "css/fontawesome.min.css";
  //include "css/style.css";

  ?>

</style>
</div>

<form class="modal-content animate" method="post" enctype="multipart/form-data">

    <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

    </div>

    <div class="container">

        <label for="file"><b>ajouter fichier</b></label>
        <input type="file" name="File" style="width:100%; height:35%;">


        <br/><br/>
        <button type="submit" name="submit9" value="save">envoyer</button>

    </div>
