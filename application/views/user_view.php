<!doctype html>
<html>
 <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 </head>
 <body>

 <nav class="navbar navbar-expand-sm bg-info justify-content-center">
  <a class="navbar-brand">Červnové kurzy</a>
  <ul class="navbar-nav">  
    <li class="nav-item">
      <a class="nav-link btn-default" href="https://github.com/VojtiM411/Programovani_kurzy.git" target="_blank">Github repozitář</a>
    </li>
  </ul>
</nav>
<br>

 <div class="container">
  <strong>Jméno žáka :</strong>
  <select id='sel_user'>
     <?php
     foreach($zaci as $zak){
	echo "<option value='".$zak['jmeno']."' >".$zak['jmeno']."</option>";
     }
     ?>
  </select>

  
  <div >
   Ročník : <span id='srocnik'></span><br/>
   Číslo kurzu : <span id='sidkurz'></span><br/>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type='text/javascript'>
  $(document).ready(function(){
 
   $('#sel_user').change(function(){
    var jmeno = $(this).val();
    $.ajax({
     url:'<?=base_url()?>/Main/userDetails',
     method: 'post',
     data: {jmeno: jmeno},
     dataType: 'json',
     success: function(response){
       var len = response.length;
       $('#srocnik,#sidkurz').text('');
       if(len > 0){
         
         var rocnik = response[0].rocnik;
         var kurz_idkurz = response[0].kurz_idkurz;
 
         $('#srocnik').text(rocnik);
         $('#sidkurz').text(kurz_idkurz);
 
       }
 
     }
   });
  });
 });
 </script>
 </div>
 </body>
</html>