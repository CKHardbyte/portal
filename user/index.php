<?php require '../header.php' ?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">My Posts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">My Posts</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <!-- Info and action boxes -->
      <div class="row">
        <div class="col-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">July 2021</span>
                <span class="info-box-number">
                  41
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-6 col-md-3 ml-auto">
            <div class="w-100 h-75 d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#addPostModal"><i class="fas fa-plus"></i> New Post</button>
            </div>
        </div>
        <!-- /.col -->

      </div> <!-- ./row -->
      <div class="row">
        <div class="col-sm-12">
          <div class="list-group">
            <div class="card">
              <div class="card-header">Post title</div>
              <div class="card-body">
                <img src="<?php echo (UPLOADSPATH . '/1625605588.png') ?>" alt="..." class="img-thumbnail mb-2" width="200" height="200">
                <br /> 
                <a href="#" class="btn btn-primary">Visit post</a>
              </div>
              <div class="card-footer text-muted">
                2:00AM July 2021
              </div>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- Templates -->
<template id="postTemplate">
  <div class="card">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</template>

<!-- Add post modal -->
<div class="modal fade" id="addPostModal" data-backdrop="static" aria-labelledby="newPost" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Post</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="callout callout-danger text-danger d-none" id="addPostFormError">
            <p>There appears to be error(s) in your form</p>
        </div>

        <form id="addPostForm">
            <div class="form-group">
                <label for="postTitle">Title</label>
                <input type="text" class="form-control" name="title" id="postTitle" required placeholder="">
                <span class="add-post-form-error text-danger d-none" id="titleError">Input a valid title</span>
            </div>
            <div class="form-group">
                <label for="postContent">Link</label>
                <textarea class="form-control" name="link" id="postContent" required rows="3"></textarea>
                <span class="add-post-form-error text-danger d-none" id="linkError">Input a valid link</span>
            </div>
            <div><figure id="preview"></figure></div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="pictureAddon01"><i class="fas fa-file-image"></i></span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="picture" required id="picture" accept="image/*" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
            <span class="add-post-form-error text-danger d-none" id="pictureError">Input a valid picture</span>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="savePost" class="btn btn-primary"><i class="fas fa-clock loader d-none mr-1" id="savePostLoader"></i> Save</button>
      </div>
    </div>
  </div>
</div>


<?php require '../footer.php' ?>

<script>
  $('#savePost').click(function(e) {        
    const modal = document.querySelector('#addPostModal');
    const form = modal.querySelector('form');

    const title = form.title.value;
    const link = form.link.value;
    const picture = form.picture.files[0];
    // handleValidate(form);
    // return

    let formData = new FormData();

    formData.append('title', title);
    formData.append('link', link);
    formData.append('picture', picture);



    $.ajax({
      type: "POST",
      url: 'functions/createPost.php',
      data: formData,
      cache: false,
      processData:false,
      contentType: false,
      success: function(response) {
        console.log(response);
        response = $.parseJSON(response);
        if(response.status == 'success') {
        const data = response.data;

        }
      },
      beforeSend: function() {
        $('#savePost').attr('disabled', true);
        $('#savePostLoader').removeClass('d-none');
      },
      complete: function() {
        // Code to hide spinner.
        $('#savePost').removeAttr('disabled');
        $('#savePostLoader').addClass('d-none');
        console.warn('complete called');
      },
      error: function(result) {
        alert('Error Occurred, Please Contact Admin.');
      }
    }); // End Ajax
              
  });

  $('#picture').change(function() {
    const picture = this.files[0];
    if (!picture.type.startsWith('image/')){ 
      alert('pls upload a picture');
      return;
    }
    const figure = document.querySelector('#preview');
    figure.classList.add('preview');
    figure.innerHTML = '';
    const img = document.createElement("img");
    img.file = picture;

    figure.appendChild(img);
    const reader = new FileReader();
    reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
    reader.readAsDataURL(picture);
  });

  $('#addPostModal').on('hidden.bs.modal', function (e) {
    $('#addPostForm').trigger('reset');
    const figure = document.querySelector('#preview');
    figure.classList.remove('preview');
    figure.innerHTML = '';

    $('#savePost').removeAttr('disabled');
    $('#savePostLoader').addClass('d-none');
  });

  const container = document.getElementById("container");
  const template = document.getElementById("template");

</script>