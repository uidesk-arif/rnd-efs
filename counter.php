<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creating Dynamic Countdown</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style type="text/css">
        #counter{
            width: 400px;
            background: #FF3131;
            box-shadow: 0px 2px 4px 0px black;
        }
    </style>
    
    <script>
    $(function() {
    function ajaxSubmit(form) {
        $.ajax({
            type: form.attr('method'), // <-- get method of form
            url: form.attr('action'), // <-- get action of form
            data: form.serialize(), // <-- serialize all fields into a string that is ready to be posted to your PHP file
            beforeSend: function(){
    
            },
            success: function(data){
            }
        });
    }
    
    $("#locForm").submit(function(e) {
        e.preventDefault();
        ajaxSubmit($(this));
    });
    
    setInterval(function() {
        ajaxSubmit($("#locForm"));
    }, 1000);
    });
    //10000
    </script>


    <script>
    
      window.onload = function() {
    
    var auto = setTimeout(function(){ autoRefresh(); }, 30);
    
    function submitform(e){
    alert('test');
    document.forms["locForm"].submit();
    
    e.preventDefault();
    }
    
    function autoRefresh(){
    clearTimeout(auto);
    auto = setTimeout(function(){ submitform(); autoRefresh(); }, 1000);
    }
      }
    </script>
</head>
<body>
    <form id="locForm" name="locForm" target="" action="nodejs.php" method="post" >


    <input type="text"  name="curLat"  value="" required>
    <input type="text" name="curLon"  value="" required>
    
    
    <input name="submit" type="submit" value="submit" />
    </form>

</body>
</html> 