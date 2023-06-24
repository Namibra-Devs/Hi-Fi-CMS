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
  <link rel="stylesheet" href="./froala/froala_editor.pkgd.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
    <nav class="navbar">
      <a href="#">Company</a>
      <div class="navbar-details">
        <a href="./blog.php">Blog Dashboard</a>
        <a href="#">Log Out</a>
      </div>
    </nav>
    <div class="form-container">
      <form action="">
        <div class="basic-info">
          <h2>Basic Info</h2>
          <label for="">Name</label>
          <input type="text" name="" id="">
          <label for="" aria-required="true">Slug</label>
          <input type="text" name="" id="">
        </div>
        <div class="Custom-fields-container">
          <div class="customs-field">
            <h2>Custom Field</h2>
            <label for="">Overview</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
          </div>
          <div class="drag-image" id="dragger_wrapper">
            <h4>Blog Post Image</h4>
            <p>Shown in blog post overview and on the blog post page as a header Image</p>
            <div id="dragger">
              <div class="icon"><i class="fa fa-image"></i></div>
              <h5 id="dragger_text">Drag and drop image here</h5>
              <h4>Or</h4>
              <button id="browseBtn">click browse file</button>
              <input type="file" hidden id="fileSelectorInput">
            </div>
          </div>
          <div class="drag-image" id="dragger_wrapper">
            <h4>Gallery</h4>
            <p>Images to be used on the blog post</p>
            <div id="gallery">
              <div class="icon"><i class="fa-solid fa-plus"></i></div>
              <p>Add Image</p>
            </div>
          </div>
          <textarea class="text-container" name="blogpost" id="froalaEditor" required>

          </textarea>
        </div>
      </form>
    </div>
  </div>

  <script src="style.js"></script>
  <script type="text/javascript" src="./froala/froala_editor.pkgd.min.js"></script>
  <script>
    var editor = new FroalaEditor('#froalaEditor');
  </script>
</body>

</html>