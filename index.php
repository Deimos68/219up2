<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.6.0.js"></script>
    <style>
        .myclass {
            background: #b69a9a;
        }
    </style>
</head>
<body>
 <script>
    $(document).ready(function(){
    $("#d1").click(function(){
        $("div").css("background","red");
    });

    $("#d2").click(function(){
        $("div").css("background","blue");
    })
});
</script>
<p id="p1">
    картинка
<div class="myclass" id="d1" style="height: 200px; width: 200px" ></div> 
<br>


<div class="myclass" id="d2" style="height: 200px; width: 200px" ></div>
</body>
</html>
<div>