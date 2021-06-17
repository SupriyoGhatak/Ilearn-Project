<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/logo_1.png" style="height: 40px; width: 40px;" type="image/png" />
    <title>Ilearn Education</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    
  </head>
  <style>
    #cat-list li{
        cursor: pointer;
    }
       #cat-list li:hover {
        color: grey;
        background: #d3d3d3;
    }
    .prod-item p{
        margin: unset;
    }
    .bid-tag {
    position: absolute;
    right: .5em;
}
</style>
  <body method="POST">
    <!--================ Start Header Menu Area =================-->
   
    <!--================ End Header Menu Area =================-->
    <?php
    include 'Connection/common.php';
    include 'header_index.php';
    ?>
     <?php 
     $cid = isset($_GET['category_id']) ? $_GET['category_id'] : 0;
     ?>
    <div class="popular_courses section_gap_top"> 
        <div class="container"> 
        <div class="row"> 
         
        
                <div class="card">
                    <div class="card-header"><h3>Categories</div></h3>
                    <div class="card-body">
                        <ul class='list-group' id='cat-list'>
                            <li class='list-group-item' data-id='all' data-href="elib.php?page=home&category_id=all"><h6>All</li></h6>
                        <br>
                            <?php
                                $cat = $con->query("SELECT * FROM categories order by name asc");
                                while($row=$cat->fetch_assoc()):
                                    $cat_arr[$row['id']] = $row['name'];
                             ?>
                        <h6><li class='list-group-item' data-id='<?php echo $row['id'] ?>' data-href="elib.php?page=home&category_id=<?php echo $row['id'] ?>"><?php echo ucwords($row['name']) ?></li> </h6>

                            <?php endwhile; ?>
                        </ul>

                    </div>
                </div>
            </div>			
       
    
    
            
            
            
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <?php
                                $where = "";
                                if($cid > 0){
                                    $where  = " where CONCAT('[',REPLACE(category_ids,',','],['),']') LIKE '%[".$cid."]%'  ";
                                } 
                                $books = $con->query("SELECT * from books $where order by title asc");
                                if($books->num_rows <= 0){
                                    echo "<center><h4><i>No Available Product.</i></h4></center>";
                                } 
                                while($row=$books->fetch_assoc()): 
                             ?>
                         
                            
                             <div class="col-sm-6">
                                 <div class="card">
                                    
                                     <div class="card-img-top d-flex justify-content-center" style="max-height: 50vh; max-width: 50vh ; overflow: hidden">
                                     <iframe src="<?php echo $row['image_path'] ?>" width="400" height="400"></iframe>
                                     
                                     </div>
                                      <div class="float-right align-top d-flex">
                                     </div>
                                     <div class="card-body prod-item">
                                         <h5>
                                         <p>Title: <?php echo $row['title'] ?></p>
                                         <p>Author: <?php echo $row['author'] ?></p>
                                         <p>
                                            <small>
                                         </h5>
                                          <?php 
                                          $cats = '';
                                          $cat = explode(',', $row['category_ids']);
                                          foreach ($cat as $key => $value) {
                                            if(!empty($cats)){
                                              $cats .=", ";
                                            }
                                            if(isset($cat_arr[$value])){
                                              $cats .= $cat_arr[$value];
                                            }
                                          }
                                          //echo $cats;
                                          ?>
                                            
                                         <h7> <p class="truncate"><?php echo $row['description'] ?></p></h7>
                                         
                                         
                                         <a href="<?php echo $row['pdf_path'] ?> "> <button class="btn btn-primary btn-sm view_prod" type="button" style="background-color: #4CAF50;
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: left;
                        /*text-decoration: none;*/
                        display: inline-block;
                        font-size: 8px;
                        border-radius: 6px;
 
                        position: relative;
    left: 38%;">DOWNLOAD
                                             </button></a>
                                      
                                     </div>
                                 </div>
                             </div>
                            <?php endwhile; ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <!----------Ending Part------------------------------>
    
     

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
    <script>
    $('#cat-list li').click(function(){
        location.href = $(this).attr('data-href')
    })
     $('#cat-list li').each(function(){
        var id = '<?php echo $cid > 0 ? $cid : 'all' ?>';
        if(id == $(this).attr('data-id')){
            $(this).addClass('active')
        }
    })
     $('.view_prod').click(function(){
        uni_modal_right('View Book','view_prod.php?id='+$(this).attr('data-id'))
     })
</script>
  </body>
</html>