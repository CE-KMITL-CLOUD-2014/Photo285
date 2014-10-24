<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
	 <style type="text/css">  
        .drop-area{  
          width:100px; height:25px;  
          border: 1px solid #999; text-align: center;  
          padding:10px; cursor:pointer;  
        }  
        #thumbnail img{width:100px;height:100px;margin:5px;}  
        canvas{border:1px solid red;}      
    </style>  
    <!-- Bootstrap -->
     <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Photo285</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav navbar-right">
					 <li class="dropdown">
					 <li class="active"><a href="#">Manage Album</a></li>
					 <li class="nonactive"><a href="userpage.php">username</a></li>
					 </li>
				  </ul>
				</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" >  
$(function () {  <!-- credit : http://www.ninenik.com/%E0%B9%81%E0%B8%AA%E0%B8%94%E0%B8%87%E0%B8%95%E0%B8%B1%E0%B8%A7%E0%B8%AD%E0%B8%A2%E0%B9%88%E0%B8%B2%E0%B8%87_%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%A0%E0%B8%B2%E0%B8%9E_%E0%B8%81%E0%B9%88%E0%B8%AD%E0%B8%99%E0%B8%AD%E0%B8%B1%E0%B8%9E%E0%B9%82%E0%B8%AB%E0%B8%A5%E0%B8%94_%E0%B8%94%E0%B9%89%E0%B8%A7%E0%B8%A2_html5_%E0%B8%AD%E0%B8%A2%E0%B9%88%E0%B8%B2%E0%B8%87%E0%B8%87%E0%B9%88%E0%B8%B2%E0%B8%A2-551.html >
  
  
    $("#upload").on("click",function(e){  
        $("#file_upload").show().click().hide();  
        e.preventDefault();  
    });  
    $("#file_upload").on("change",function(e){  
        var files = this.files  
        showThumbnail(files)          
    });  
  
    function showThumbnail(files){  
  
        $("#thumbnail").html("");  
        for(var i=0;i<files.length;i++){  
            var file = files[i]  
            var imageType = /image.*/  
            if(!file.type.match(imageType)){  
                //     console.log("Not an Image");  
                continue;  
            }  
  
            var image = document.createElement("img");  
            var thumbnail = document.getElementById("thumbnail");  
            image.file = file;  
            thumbnail.appendChild(image)  
  
            var reader = new FileReader()  
            reader.onload = (function(aImg){  
                return function(e){  
                    aImg.src = e.target.result;  
                };  
            }(image))  
  
            var ret = reader.readAsDataURL(file);  
            var canvas = document.createElement("canvas");  
            ctx = canvas.getContext("2d");  
            image.onload= function(){  
                ctx.drawImage(image,100,100)  
            }  
        } // end for loop  
  
    } // end showThumbnail  
  
  
      
      
});  
 </script>      
		

		
		<div class="col-xs-2 col-md-1">
		<div class="row" align="center" >
			<h3>Profile Description</h3>
			<button class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg"><a href = "#">AddAlbum</a></button>
			<button class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg"><a href = "#">DeleteAlbum</a></button>
		</div>
		</div>	
		
		
		
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
 
 
 <div style="margin:auto;width:80%;">    
        <h3> บันทึกข้อมูล</h3>     
        <form class="form" id="myFrom" method="post" action="../../Photo/addphoto"  role="form" enctype="multipart/form-data">      
            <div class="form-group">    
               <lable class="control-label">Name : </lable>    
                <input type="text" autocomplete="off" class="form-control" name="name">    
            </div>    
            <div class="form-group">    
               <lable class="control-label">Picture : </lable>    
               <input id="file_upload" style="display:none" name="file_upload[]" type="file" multiple="true">    
            <div id="upload" class="btn btn-info">  
               Upload File  
            </div>  
            <div id="thumbnail"></div>                 
            </div>    
            <button type="submit"  class="btn btn-primary">เพิ่มข้อมูล</button>               
        </form>    
        <br>    
        		
    </div>  
	
	
	
	
  </div>
			</div>
		  </div>
		</div>		
		
		
		<div class="col-xs-10 col-md-11">
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail" >
					<img src="img/Album.jpg" alt="...">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail"  >
					<img src="img/Album.jpg" alt="...">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail"  >
					<img src="img/Album.jpg" alt="...">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<a href="" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg1" >
					<img src="img/Jellyfish.jpg" alt="...">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg2" >
					<img src="img/Lighthouse.jpg" alt="...">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg3" >
					<img src="img/Chrysanthemum.jpg" alt="...">
				</a>
			</div>
				<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg4" >
					<img src="img/Hydrangeas.jpg" alt="...">
				</a>
			</div>
		</div>
			<div class="row">
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg1" >
						<img src="img/Jellyfish.jpg" alt="...">
					</a>
				</div>
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg2" >
						<img src="img/Lighthouse.jpg" alt="...">
					</a>
				</div>
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg3" >
						<img src="img/Chrysanthemum.jpg" alt="...">
					</a>
				</div>
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg4" >
						<img src="img/Hydrangeas.jpg" alt="...">
					</a>
				</div>
			</div>
		</div>	
		
		
		
  </body>
</html>