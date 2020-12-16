<html>
	<head>
		<title>MyBlog</title>
		<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="bs-component">
	          <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	            <a class="navbar-brand" href="<?php echo base_url(); ?>posts">MyBlog</a>
	            <div class="collapse navbar-collapse" id="navbarColor01">
	              <ul class="navbar-nav mr-auto">
	                <li><a class="nav-link" href="<?php echo base_url(); ?>posts">Posts</a></li>
	                <li><a class="nav-link" href="<?php echo base_url(); ?>categories/index">Categories</a></li>                          
	              </ul>
	              	<ul class="nav navbar-nav navbar-right">
	              		<li><a class="nav-link" href="<?php echo base_url(); ?>posts/create">Add Post</a></li>
	              		<li><a class="nav-link" href="<?php echo base_url(); ?>categories/create">Add Category</a></li>
	              	</ul>
	            </div>
	          </nav>
	      	</div>
	    </div>

      	<div class="container">