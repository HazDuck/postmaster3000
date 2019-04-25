<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-03-08
 * Time: 16:34
 */

require_once('functions.php');

    if (isset($_POST['submit']))
    {
        $railLength = 1.5;
        $postLength = 0.1;
        $posts = $_POST['postsVal'];
        $railings = $_POST['railingsVal'];
        $fence = $_POST['fenceVal'];
        $lengthValue = calcLength($posts, $railings, $railLength, $postLength);
        $materialsValue = calcMaterials($fence, $railLength, $postLength);
        $lengthToDisplay = checkPostsAndRailings($posts, $railings, $lengthValue);
        $materialsToDisplay = checkFence($fence, $materialsValue);
    }

?>
<head>
    <title>Postmaster 3000</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>WELCOME TO THE POSTMASTER 3000</h1>
    <form method="post" action="">
        1. Posts<input type="number" name="postsVal">
        Railings<input type="number" name="railingsVal">
        <br><br>2. Fence Length<input type="text" name="fenceVal">(m)
        <br><br><input type="submit" name="submit" class="submitButton"><br><br>
        <?php echo '1= ' . $lengthToDisplay ?><br><br>
        <?php echo '2= ' . $materialsToDisplay ?>
    </form>
</body>
