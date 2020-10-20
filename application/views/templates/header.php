<html>
    <head>
        <title>Blog</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" >myBlog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if($title == "Home") echo "active"; ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php if($title == "About") echo "active"; ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
            </li>
            <li class="nav-item <?php if($title == "Posts") echo "active"; ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>posts">Blogs</a>
            </li>
            <li class="nav-item <?php if($title == "Categories") echo "active"; ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>categories/">Categories</a>
            </li>
            <?php if ($this->session->userdata('logged_in')) : ?>
              <li class="nav-item <?php if($title == "Create Post") echo "active"; ?>">
                <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Posts</a>
              </li>

              <li class="nav-item <?php if($title == "Create Category") echo "active"; ?>">
                <a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a>
              </li>

              <li class="nav-item <?php if($title == "Log Out") echo "active"; ?>">
                <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Log Out</a>
              </li>
            <?php endif; ?>

            <?php if (!$this->session->userdata('logged_in')) : ?>

            <li class="nav-item <?php if($title == "Sign In") echo "active"; ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>users/login">Sign In</a>
            </li>
            <li class="nav-item <?php if($title == "Sign Up") echo "active"; ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
            </li>
          <?php endif; ?>

          </ul>
            <div class="container">
              <?php if ($this->session->flashdata('user_registered')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').' </p>' ?>
              <?php endif; ?>
            </div>
            <div class="container">
              <?php if ($this->session->flashdata('post_created')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').' </p>' ?>
              <?php endif; ?>
            </div>
            <div class="container">
              <?php if ($this->session->flashdata('login_failed')): ?>
                <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').' </p>' ?>
              <?php endif; ?>
            </div>

            <div class="container">
              <?php if ($this->session->flashdata('user_loggedin')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').' </p>' ?>
              <?php endif; ?>
            </div>

            <div class="container">
              <?php if ($this->session->flashdata('logout')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('logout').' </p>' ?>
              <?php endif; ?>
            </div>



            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
        </div>
      </nav>

<div class="container">
