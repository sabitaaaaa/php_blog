<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <?php include('layout/sidebar.php');?>
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>User</h2>
                    <a href="create-post.php" class="btn btn-primary">
                        <i class="bi bi-plus"></i> Add New
                    </a>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Sabita Neupane</th>
                            <td>sabita@gmail.com</td>
                         
                            <td>
                                <a href="user.php" class="btn btn-primary btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>