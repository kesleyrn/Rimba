<?php
    // Your PHP code to fetch the full sub-blog description based on the ID from the database
    // Assuming $subBlogData contains the full sub-blog data for the selected ID
    $subBlogId = $_GET['id']; // Assuming 'id' is the parameter name for sub-blog ID
    $subBlogData = fetchSubBlogData($subBlogId); // Your function to fetch sub-blog data

    // Assuming $subBlogData contains 'title', 'description', and 'image'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $subBlogData['title']; ?></title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <div class="container">
        <div class="main-blog">
            <h1><?php echo $subBlogData['title']; ?></h1>
            <img src="<?php echo $subBlogData['image']; ?>" alt="<?php echo $subBlogData['title']; ?>" class="main-image">
            <p class="main-description">
                <?php echo $subBlogData['description']; ?>
            </p>
        </div>
    </div>
</body>
</html>
