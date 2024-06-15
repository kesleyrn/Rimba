<?php
//   include "../header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/RimbaTradenarkt.png" type="image/x-icon">
    <title></title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <div class="container">
        <div class="main-blog">
            <h1>Main Blog Title</h1>
            <img src="Keslee-01.png" alt="Main Blog Image" class="main-image">
            <p class="main-description">
                This is the main blog description. It contains detailed information about the main blog topic.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras venenatis 
                euismod malesuada.
            </p>
        </div>
        <div class="sub-blogs">
            <?php
                // Your PHP code to fetch sub-blog data from the database
                // Assuming $subBlogs is an array containing sub-blog data
                foreach ($subBlogs as $subBlog) {
                    $truncatedDescription = strlen($subBlog['description']) > 60 ? substr($subBlog['description'], 0, 60) . '...' : $subBlog['description'];
                    echo "<div class='sub-blog'>
                            <a href='sub-blog.php?id={$subBlog['id']}'>
                                <img src='{$subBlog['image']}' alt='{$subBlog['title']}' class='sub-image'>
                                <h3>{$subBlog['title']}</h3>
                                <p>$truncatedDescription</p>
                            </a>
                        </div>";
                }
            ?>
        </div>
    </div>
</body>
</html>
<?php
// include "../footer.php";
?>