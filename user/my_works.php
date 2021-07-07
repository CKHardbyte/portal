<?php require '../header.php' ?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">My Works
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/portal/user">Home</a></li>
              <li class="breadcrumb-item active">My Works</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="w-100 h-75 d-flex justify-content-center align-items-center">
              <form class="w-100">
                <select class="custom-select my-1 mr-sm-2" id="">
                  <option value="1">January</option>
                  <option value="2">February</option>
                  <option value="3">March</option>
                </select>
              </form>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-6 col-md-3 ml-auto">
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




<?php require '../footer.php' ?>

<script>

</script>