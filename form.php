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
  <!-- <link rel="stylesheet" href="./froala/froala_editor.pkgd.min.css"> -->
  <!-- FilePond styles -->
  <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
  <script src="https://cdn.tiny.cloud/1/b69kodqon0pasxedh64ci40757sso9c5b2jnz5dx5lv2un1o/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
            <div>
              <input type="file" multiple>
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
          <textarea class="text-container" name="blogpost" id="myTextarea" required>

          </textarea>
        </div>
      </form>
    </div>
  </div>

  <script src="style.js"></script>
  <!-- <script type="text/javascript" src="./froala/froala_editor.pkgd.min.js"></script>
  <script>
    var editor = new FroalaEditor('#froalaEditor');
  </script> -->

  <script>
    //INITIALIZE TinyMCE AND ATTACH TO TEXTAREA ELEMENT
    tinymce.init({
      selector: "#myTextarea",
      height: 400,
      plugins: [
        'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
        'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
        'insertdatetime', 'media', 'table', 'help', 'wordcount'
      ],
      toolbar: 'undo redo | blocks | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent |' +
        'removeformat | help',
      content_style: 'body { font-family: Helvetica, Arial, sans-serif; font-size:16px }'
    });
  </script>
  <!-- ADD FILEPOND SCRIPTS -->
  <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
  <script>
    // SELECT AND CREATE THE FILEPOND ELEMENT
    const inputElement = document.querySelector('input[type="file"]');
    const pond = FilePond.create(inputElement);
  </script>
</body>

</html>