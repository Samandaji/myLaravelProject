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

        <form>

         <label>Post title</label>
         <input type='text'>


        
        
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