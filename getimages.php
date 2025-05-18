  <?php
                include("connect.php");
                
                
                $image = ("#imgcol");
                
                

                $sql = "SELECT * from  gallery from page = Gallery";
                $result = mysqli_query($conn,$sql);
                if($result){
                 while($row = mysqli_fetch_array($result)){
                
         <div class="container-fluid">
        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo "uploads/".$row['image_name']; ?>" class="galelry-lightbox">
                <img src="<?php echo "uploads/".$row['image_name']; ?>" id="imgcol" alt="" class="img-fluid"  style="width: 600px" height="400px">
              </a>
            </div>
          
                 }
}else{
  echo "<script>swal('Error', 'No Record Found!', ' error'); </script>";
}
                
              ?>