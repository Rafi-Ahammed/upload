 <!DOCTYPE HTML>
<html lang="en">

<head>
<meta charset="UTF-8">
    <Title>Upload File</Title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFek1dGmjRAKycuHAHRg320mUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
   <body>
    <div class ="container">

       <div class="row">   </br>
       
          <form action="{{ route('upload.file')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
          {{csrf_field()}}-->
    
    <input type="file" name="file">
    <input type="submit" class="btn btn-info">
     </form>
      </div>
      <div class="row">
  
         </div>
      </div>
    </body>

</html>