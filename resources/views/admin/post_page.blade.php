<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
   <style type='text/css'>

              .post_title
              {
                font-size: 30px;
                font-weight: bold;
                text-align: center;
                padding: 30px;
                color: white;
              }
              .div_center
              {
                text-align: center;
                padding: 30px;
              }
              
              label{
                display:inline-block;
                width: 200px;
              }

            </style>
  </head>
  <body>
    <header>
        @include('admin.header')
  
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
            
          
        </div>
       <h1 class="post_title"> Add Post</h1>

       <div>
       
        <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-date">

          @csrf
    
        <div class="div_center">
            <label>Post Title</label>
            <input type="text" name="title">
        </div>
        <div class="div_center">
            <label>Post Description</label>
            <textarea name="description"></textarea>
        </div>
        <div class="div_center">
            <label>Add Image</label>
            <input type="file" name="image">
        </div>

        <div class="div_center">

            <input type="Submit" class="btn btn-primary">
        </div>

        
        
        </form>
       </div>


     </div>
      
        <footer class="footer">
         @include('admin.footer')
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.script')
  </body>
</html>