
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
<body>
    <?php    
    if(isset($_POST['button'])){
        function factorial($val){
            $fact = 1;
            for($k=1;$k<=$val;$k++){
                $fact*=$k;
            }
            return $fact;
        }
        $cycle = $_POST["cycle"];
        $x = $_POST["x"];
        $result = 1 - $x;
        for($i=2;$i<$cycle+2;$i++){
            if($i%2==1){
                $result-=(pow($x,$i))/(factorial($i));
            }
            else{
                $result+=(pow($x,$i))/(factorial($i));
            }
        }
        echo("Ответ " . $result);
    }
    ?>
    <form method = "POST">
    <p>Введите количество итераций</p>
	<p><input type="text" name="cycle" value="2"></p>
	<p>Введите значение x</p>
	<p><input type ="text" name="x" value="5"></p>
	<p><input type="submit" name="button"></p>
</form>
</body>
</html>