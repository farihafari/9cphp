<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
       <?php
       $collection = [
        ['ali','dism','ali@gmail.com',57876],
        ['aliyan','dism','ali@gmail.com',57876],
        ['alishar','dism','ali@gmail.com',57876],
        ['alishba','dism','ali@gmail.com',57876],
        ['aliza','dism','ali@gmail.com',57876],
        ['alina','dism','ali@gmail.com',57876],
        ['aliyar','dism','ali@gmail.com',57876],

       ];
    //    echo $collection[1];
    // print_r($collection);
    // echo '<br>';
    // var_dump($collection);
    for($i=0;$i<count($collection);$i++){
         echo "<br>";
        for($j=0;$j<count($collection[$i]);$j++){
            echo $collection[$i][$j]."&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        
    }
       ?>
    </body>
</html>

