
@if(Route::has('login'))
    @auth
        @if(Auth::user()->utype == "USR" && Auth::user()->id == $user)


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Anime Academy | Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('../../../plugins/fontawesome-free/css/all.min.css')}}">
  
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('../../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('../../../plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('../../../plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('../../../dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('../../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('../../../plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('../../../plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <style type="text/css">
    .text {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2; /* number of lines to show */
   -webkit-box-orient: vertical;
   margin-bottom: -8px;
}

  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('login') }}" class="nav-link">Dashboard</a>
      </li>
     <!--  <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <!--   <i class="fa fa-cart-arrow-down"></i> -->
          <!-- <span class="badge badge-danger navbar-badge">3</span> -->
        </a>
       
      </li>
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('login') }}" class="brand-link">
      <img src="{{asset('assets/images/AnimeLogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Profile</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user1.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('profile',Auth::user()->id) }}" class="nav-link ">
              <i class="nav-icon far fa-image"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('profile', Auth::user()->id ) }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Blog</p>
                </a>
              </li>
              
            
              
            </ul>
          </li>
          <br>




           <li class="nav-item">
           
              
              <p>
                <form class="nav-link" method="POST" action="{{ route('logout') }}" >
                  <i class="nav-icon fa fa-window-close" style="margin-right: -20px;"></i>
                            @csrf
                          
                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                
                                {{ __('Logout') }}

                            </x-jet-dropdown-link>
                          
                        </form>
               </p>
           
          </li>


          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
  tinymce.init({
    selector: 'textarea',
    height : "400",
    plugins: 'link code image media',
    /* enable title field in the Image dialog*/
  image_title: true,
  /* enable automatic uploads of images represented by blob or data URIs*/
  automatic_uploads: true,
  /*
    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
    images_upload_url: 'postAcceptor.php',
    here we add custom filepicker only to Image dialog
  */
  
  file_picker_types: 'image media',
  /* and here's our custom image picker*/
  video_template_callback: function(data) {
   return '<video style="z-index: 0;background-size: 100%;top: 0px;left: 0px;min-width: 100%;width: auto;height: 400px;"' + (data.poster ? ' poster="' + data.poster + '"' : '') + ' controls="controls">\n' + '<source src="' + data.source1 + '"' + (data.source1mime ? ' type="' + data.source1mime + '"' : '') + ' />\n' + (data.source2 ? '<source src="' + data.source2 + '"' + (data.source2mime ? ' type="' + data.source2mime + '"' : '') + ' />\n' : '') + '</video>';
 },
  file_picker_callback: function (cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/* media/*');

    /*
      Note: In modern browsers input[type="file"] is functional without
      even adding it to the DOM, but that might not be the case in some older
      or quirky browsers like IE, so you might want to add it to the DOM
      just in case, and visually hide it. And do not forget do remove it
      once you do not need it anymore.
    */

    input.onchange = function () {
      var file = this.files[0];

      var reader = new FileReader();
      reader.onload = function () {
        /*
          Note: Now we need to register the blob in TinyMCEs image blob
          registry. In the next release this part hopefully won't be
          necessary, as we are looking to handle it internally.
        */
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        /* call the callback and populate the Title field with the file name */
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };

    input.click();
  }
  
  });



</script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('login') }}">Home</a></li>
              <li class="breadcrumb-item active">Add Blog</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
              <!-- /.card-header PRODUCT-->
              
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Blog</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID #</th>
                    <th>Description</th>
                    <th>Remove</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($blog as $item)
                      <tr onclick="displayInEditForm({{$item['id']}});" style="cursor: pointer;">
                        <td style="text-align:center;vertical-align: middle !important;">{{$item['id']}}</td>
                        <td>
                          <strong>Title:</strong> {{$item['title']}}<br>
                          <strong>Date Publish:</strong> {{$item['datePublish']}}<br>
                          <strong>Image:</strong> {{$item['image']}}<br>
                          <strong>Video:</strong> {{$item['video']}}<br>
                          <strong >Content:</strong> <span class="text"> <?php echo strip_tags($item['content']); ?></span><br>
                        </td>
                        <td style="text-align:center;vertical-align: middle !important;cursor: pointer;" onclick="if (confirm('Do you want to delete this Blog ID#: {{$item['id']}}?')) {deleteBlog({{$item['id']}});}else{event.preventDefault();}"><i class="fa fa-times" style="color:red;font-size: 20px;"></i></a></td>
                        
                      </tr>
                      @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID #</th>
                    <th>Description</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
              <!-- /.card-body -->
        
              <br>
              <div class="card card-primary" style="width: 65%;margin: auto;">
              <div class="card-header">
                <h3 class="card-title">Add Blog</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/addBlogForm" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @if(Session::has('alert'))
                          <h2 class="btn btn-block " style="border:none;color:#dc3545!important;">
                              The title has already been used. Please try again.</h2></h2>
                        @endif
                        @if(Session::has('success'))
                          <h2 class="btn btn-block " style="border:none;color:#28a745!important;">
                              The data has been saved. Thank you.</h2></h2>
                        @endif
                        @if(Session::has('success1'))
                          <h2 class="btn btn-block " style="border:none;color:#28a745!important;">
                              The data has been updated. Thank you.</h2></h2>
                        @endif
                        @if(Session::has('success2'))
                          <h2 class="btn btn-block " style="border:none;color:#28a745!important;">
                              The data has been deleted. Thank you.</h2></h2>
                        @endif
                  
                  <div class="form-group" id="ids1" style="display: none;">
                    <label for="exampleInputEmail1">ID #</label>
                    <label id="note1" style="display: none;"><strong>Note:</strong> <label style="color:#dc3545;">To Add Blog again, please click the Add Blog button. Thank you.</label></label>
                    <input name="id" type="text" readonly maxlength="150" class="form-control" id="ids" placeholder="ID #" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input name="title" id="titles" type="text" maxlength="34" required class="form-control" id="exampleInputEmail1" placeholder="Enter Title" value="">
                  </div>
                  
              
                  <div class="form-group">
                    <label id="note2" style="display: none;"><strong>Note:</strong> <label style="color:#dc3545;">Please re-select the image if you want to edit. Thank you.</label></label>
                    <label for="exampleInputFile1">Image (Header Background Image)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        Note:
                        <input type="file" name="picture" required class="custom-file-input" id="exampleInputFile1">
                        <label class="custom-file-label" id="picsLabel" for="exampleInputFile1">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>

                  

                  <div class="form-group">
                    <label>Textarea</label>
                    <label style="color: red">Note: When you use image on the content, please put in a percentage on the width of the image and blank on the height. For design purposes.</label>
                    <textarea class="form-control" name="content" style="white-space: pre-wrap;"  rows="3" placeholder="Enter ..."></textarea>
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
            <!-- /.card -->
            <br><br><br><br>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; <!-- 2014-2019 --> Anime Academy.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="../../js/displayInEditForm.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  $(document).ready(function () {
  bsCustomFileInput.init();
});

     // display data on the form when you clicked on the table 
  function deleteBlog(blogId){
    window.location.href = "/deleteBlog/"+blogId;

  }//function
  
</script>
</body>
</html>


        @else
          <script>window.location = "/";</script>
        @endif
        <!-- end if authuser -->
    @else
         <script>window.location = "/";</script>
    @endif
    <!-- end if AUTH -->
@endif
<!-- end if route has login -->