<?php
session_start();
include_once '../connect/connect.php';
$sql = mysql_query("SELECT * FROM `employment` WHERE `id` = $_POST[id]");
$result = mysql_fetch_array($sql);

 echo ' <div id="selprof1">
           <img class="img-fluid" src="assets/images/pr/'.$result[educational].'_'.$result[specialty].'_'.$_POST[id].'.jpg" alt="...">
        </div>
        <hr>
        <div class="mt-3 text-center">
            <i class="fa fa-star-o fa-3x fa-stack btn-warning"   title="Знаходиться в улюбленних"></i>
            <i class="fa fa-files-o  fa-3x fa-stack btn-success" id="modal"   title="Карточка професії"></i>
            <i class="fa fa-question-circle fa-3x fa-stack btn-info"   title="Мастер самопізнання"></i>
            <i class="fa fa-times-circle fa-3x fa-stack btn-danger"   title="Відправити професію в &ldquo;БАН&rdquo;"></i>
        </div>
        <script>
             $("#modal").on("click", function(){
                $.alert({
                    columnClass: "col-md-12",
                    containerFluid: true, 
                    buttons: {
                        закрити: {
                            btnClass: "btn-orange",
                            action: function(){}
                        }},
                    title: "Карточка професії",
                    content: "вавававава",
                });
            });
        </script>

        ';
 
?>
