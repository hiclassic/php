<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Load Bootstrap -->
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity=
"sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" 
        crossorigin="anonymous">
    <script src=
"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous">
    </script>
    <script src=
"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity=
"sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous">
    </script>        
</head>

<!-- navbar start -->
     <?php 
     
     include ('project/inc/nav.php'); 
     
     ?>
    <!-- navbar end -->

    <!-- header start -->
     <?php
      include ('paroja/inc/header.php');
       ?>
    <!-- header end -->

<body>
    <h1 class="text-success">
        Geeksforgeeks
    </h1>
    <h4>
        Bootstrap 5 Layout Forms
    </h4>
    <form>
        <div class="row mb-3">
            <label for="inputName" class="col-sm-2 col-form-label">
                Name
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" 
                       id="inputName">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputemail" class="col-sm-2 col-form-label">
                Email
            </label>
            <div class="col-sm-10">
                <input type="email" class="form-control" 
                       id="inputemail">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary" disabled>
                    Registered
                </button>
                <button type="submit" class="btn btn-primary">
                    Sign in
                </button>
            </div>
        </div>
    </form> 

     <div class="container mt-3">
        <h1 style="color: green;">
            GeeksforGeeks
        </h1>
        <div class="container mt-3" style="width: 600px;">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        Card title</h4>
                    <p class="card-text">
                        Some example text.
                        Some example text.</p>

                    <a href="#" class="card-link">
                        Card link</a>
                    <a href="#" class="card-link">
                        Another link</a>
                </div>
            </div>
        </div>
    </div>

</body>
    <!-- footer start -->

    <?php 
    include ('project/inc/footer.php'); 
    ?>
    <!-- footer end -->
    
</body>
</html>