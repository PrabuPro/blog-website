<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test view</title>
</head>
<body>
    <h1>Test View</h1>

    <?php 
        
        foreach($results as $result){
            print_r($result);
            
            //  $result . '<br>';
        }
    
    ?>
    
</body>
</html>