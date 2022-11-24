<?php
    $name = "Weeraphat Boonsawai";
    $sid = "6414421018";
    $program ="Information Technology";
    $faculty ="Computer Scinece and Information Technology";
    $faculty_url ="http://www.csit.rbru.ac.th";
    $age = 20;
    function parse_link($txt,$url){
        return '<a href="'.$url.'">'.$txt.'</a>';
    }
    function parse_link_format($txt,$url,$link_style){
        return '<a class="'.$link_style.'" href="'.$url.'">'.$txt.'</a>';
    }
?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>w02</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-900 to-bg-cyan-200">
    <div class=" border-solid border-2 bg-gradient-to-r from-blue-900 to-bg-cyan-200">
    <h1 class="text-center text-6xl font-semibold">
        <?php echo "$name"; ?>
    </h1>
    <h1 class="text-center text-4xl overline ">
        <?php echo "$sid"; ?>
    </h1>
    <h1 class="text-center text-4xl">
        <?php echo "$program"; ?>
    </h1>
    <h1 class="text-center text-4xl">
        <?php echo "$faculty"; ?>
    </h1>
    <h1 class="text-center text-4xl">
        <?php echo "$age"; ?>
    </h1>
    </div>
    <div class="bg-white text-center text-4xl">
    <?php
    if($age>20){
?>    
<?php
        echo parse_link($faculty,$faculty_url);

 }else{ 
    echo " คุณอายุยังไม่ถึง 30";
        echo parse_link("หน้าต่อไป","http://localhost/6414421018/next.php");

 }   
?>
    </body>
</html>