<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hi-Fi</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="font-awesome-6/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet" />
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
          <input type="text" name="" id="" />
          <label for="" aria-required="true">Slug</label>
          <input type="text" name="" id="" />
        </div>
        <div class="Custom-fields-container">
          <div class="customs-field">
            <h2>Custom Field</h2>
            <label for="">Overview</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
          </div>
          <div class="drag-image" id="dragger_wrapper">
            <h4>Blog Post Image</h4>
            <p>
              Shown in blog post overview and on the blog post page as a
              header Image
            </p>
            <div id="dragger">
              <div class="icon"><i class="fa fa-image"></i></div>
              <h5 id="dragger_text">Drag and drop image here</h5>
              <h4>Or</h4>
              <button id="browseBtn">click browse file</button>
              <input type="file" hidden id="fileSelectorInput" />
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
          <div class="text-container">
            <h4>Blog Post Text</h4>
            <div class="toolbar">
              <div class="btn-toolbar">
                <button type="button" onclick="formatDoc('bold')">
                  <i class="fa-solid fa-bold"></i>
                </button>
                <button type="button" onclick="formatDoc('underline')">
                  <i class="fa-solid fa-underline"></i>
                </button>
                <button type="button" onclick="formatDoc('italic')">
                  <i class="fa-solid fa-italic"></i>
                </button>
                <button type="button" onclick="formatDoc('justifyLeft')">
                  <i class="fa-solid fa-align-left"></i>
                </button>
                <button type="button" onclick="formatDoc('justifyCenter')">
                  <i class="fa-solid fa-align-center"></i>
                </button>
                <button type="button" onclick="formatDoc('justifyRight')">
                  <i class="fa-solid fa-align-right"></i>
                </button>
                <button type="button" onclick="formatDoc('justifyFull')">
                  <i class="fa-solid fa-align-justify"></i>
                </button>
                <button type="button" onclick="addImage()">
                  <i class="fa-solid fa-file-image"></i>
                </button>
                <button type="button" onclick="formatDoc('insertOrderedList')">
                  <i class="fa-solid fa-list-ol"></i>
                </button>
                <button type="button" onclick="formatDoc('insertUnorderedList')">
                  <i class="fa-solid fa-list-ul"></i>
                </button>
                <button type="button" onclick="addLink()">
                  <i class="fa-solid fa-link"></i>
                </button>
                <button type="button" onclick="formatDoc('undo')">
                  <i class="fa-solid fa-undo"></i>
                </button>
                <button type="button" onclick="formatDoc('redo')">
                  <i class="fa-solid fa-redo"></i>
                </button>
              </div>
            </div>
            <div id="content" class="content" contenteditable="true" spellcheck="true"></div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script src="style.js"></script>
</body>

</html>