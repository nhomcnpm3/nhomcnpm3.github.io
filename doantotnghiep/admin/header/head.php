<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Admin panel TrueMart</title>
    <meta name="description" content="">
    <link href= <?php echo $level.css_path."font-awesome.min.css"?> rel="stylesheet">
    <link href= <?php echo $level.css_path."bootstrap.min.css"?> rel="stylesheet">
    <link href= <?php echo $level.css_path."style.css"?> rel="stylesheet">
    <style>
      .overlay1 a {
  padding: 8px;
  text-decoration: none;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay1 a:hover, .overlay1 a:focus {
  color: #f1f1f1;
}
      .overlay1 .closebtn1 {
	position: absolute;
	top: -12px;
	right: 8px;
	font-size: 30px;
  }
  .overlay1 .closebtn1 {
	font-size: 40px;
	top: 5%;
	right: 5%;
	}
.overlay-content1 {

	top: 12%;
	width: 100%;
  }
  .overlay1 {
	height: 40%;
	width: 0;
	position: fixed;
	z-index: 51;
	top: 5%;
	left: 32%;
	overflow-x: hidden;
	transition: 0.5s;
  }
      </style>
  </head>