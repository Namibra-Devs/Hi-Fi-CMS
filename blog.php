<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi-Fi</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome-6/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <nav class="navbar">
            <a href="#">Company</a>
            <div class="navbar-details">
                <a href="#">Blog Dashboard</a>
                <a href="#">Log Out</a>
            </div>
        </nav>
        <div class="blogpost-section">
            <div class="blogpost">
                <h1>BLOG POSTS</h1>
                <a href="./form.php">
                    <button type="submit">Add New Post <i class="fa fa-angle-down"></i></button>
                </a>
            </div>
            <div class="blogpost-btns">
                <a href="#" class="tab-btn" data-filter="all">All</a>
                <a href="#" class="tab-btn" data-filter="published">Published</a>
                <a href="#" class="tab-btn" data-filter="unpublished">Unpublished</a>
            </div>
            <div class="blogpost-details">
                <div class="blogpost-card published active">
                    <img src="images/blog-1.png" alt="">
                    <div class="blogpost-card-details">
                        <div class="blogpost-card-date">
                            <p>June 17, 2023</p>
                            <button type="menu" class="menu-btn"><i class="fa fa-ellipsis-vertical"></i></button>
                        </div>
                        <div class="pop-up-menu">
                            <a href="">Edit</a>
                            <a href="">Unpublish</a>
                            <a href="">Delete</a>
                        </div>

                        <div class="blogpost-card-text">
                            <h3>Talk it out with Audio</h3>
                            <p>Use audio to have live conversations with other
                                collaborators directly in your Figma and FigJam files.</p>
                        </div>
                    </div>
                </div>
                <div class="blogpost-card unpublished">
                    <img src="images/blog-2.png" alt="">
                    <div class="blogpost-card-details">
                        <div class="blogpost-card-date">
                            <p>June 17, 2023</p>
                            <button type="menu" class="menu-btn"><i class="fa fa-ellipsis-vertical"></i></button>
                        </div>
                        <div class="pop-up-menu">
                            <a href="#">Edit</a>
                            <a href="#">Unpublish</a>
                            <a href="#">Delete</a>
                        </div>

                        <div class="blogpost-card-text">
                            <h3>Talk it out with Audio</h3>
                            <p>Use audio to have live conversations with other
                                collaborators directly in your Figma and FigJam files.</p>
                        </div>
                    </div>
                </div>
                <div class="blogpost-card published">
                    <img src="images/blog-3.png" alt="">
                    <div class="blogpost-card-details">
                        <div class="blogpost-card-date">
                            <p>June 17, 2023</p>
                            <button type="menu" class="menu-btn"><i class="fa fa-ellipsis-vertical"></i></button>
                        </div>
                        <div class="pop-up-menu">
                            <a href="">Edit</a>
                            <a href="">Unpublish</a>
                            <a href="">Delete</a>
                        </div>

                        <div class="blogpost-card-text">
                            <h3>Talk it out with Audio</h3>
                            <p>Use audio to have live conversations with other
                                collaborators directly in your Figma and FigJam files.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="style.js"></script>
</body>

</html>