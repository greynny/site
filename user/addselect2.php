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
            <i class="fa fa-times-circle fa-3x fa-stack btn-danger" id="submit_delete_'.$_POST[id].'"   title="Відправити професію в &ldquo;БАН&rdquo;"></i>
            <i class="fa fa-question-circle fa-3x fa-stack btn-info"  id="modal2_2"  title="Мастер самопізнання"></i>
            <i class="fa fa-files-o  fa-3x fa-stack btn-success" id="modal2_1"   title="Карточка професії"></i>
            <i class="fa fa-star-o fa-3x fa-stack btn-warning"   title="Знаходиться в улюбленних"></i>
         </div>
        <script>
             $("#modal2_1").on("click", function(){
                $("#exampleModal2_1").arcticmodal();
            });
             $("#modal2_2").on("click", function(){
                $("#exampleModal2_2").arcticmodal();
            });
             $("#submit_delete_'.$_POST[id].'").click(function(){
               $.ajax({
                    url: "user/del_profession.php", // куда отправляем
                    type: "post", // метод передачи
                    dataType: "json", // тип передачи данных
                    data: { // что отправляем
                           "del_employment": '.$_POST[id].'
                            },
                       })
                       location.reload();
                });
                </script>     
			<div class="g-hidden">
				<div class="box-modal" id="exampleModal2_2">
					<div class="box-modal_close arcticmodal-close">X</div>
					'.$result[question].'
				</div>
				<div class="box-modal" id="exampleModal2_1">
					<div class="box-modal_close arcticmodal-close">X</div>
					'.$result[about].'
				</div>
			</div> 
			';

?>
