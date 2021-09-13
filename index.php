<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="input" id="input">
        <input type="submit" value="submit">
    </form>
    <?php
        if(isset($_POST['input'])){
            $pairs = 0;
            $input = explode(' ', $_POST['input']);
            for($i = 0; $i < count($input); $i++) {
                for($j = 0; $j < count($input); $j++) {
                    if($i == $j) continue;
                    if($input[$i] == $input[$j]) {
                        $pairs++;
                        array_splice($input, $j, 1);
                        array_splice($input, $i, 1);
                        break;
                    }
                }

                // Another Solution
                // $index = array_search($i, array_splice($input, $i, 1));
                // if(!$index) {
                //     $pairs++;
                //     array_splice($input, $index, 1);
                //     array_splice($input, $i, 1);
                // }
            }
            echo $pairs;
        }
    ?>
    <hr>
    <form action="index.php" method="post">
        <input type="text" name="sentences" id="sentences">
        <input type="submit" value="submit">
    </form>
    <?php
            if(isset($_POST['sentences'])) {
                $arSentences = explode(' ', $_POST['sentences']);
                $sentences = count($arSentences);
                foreach($arSentences as $key) {
                    if(preg_match("/[''\!\_\*\=\(\&\[\‘’\"]/", $key) != false) $sentences--;
                }
                echo $sentences;
            }
    ?>
</body>
</html>