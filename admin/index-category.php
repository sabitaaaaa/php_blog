<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group">
                    <a href="dashboard.php" class="list-group-item list-group-item-actio" aria-current="true">
                        <i class="bi bi-speedometer2 me-1"></i> Dashboard
                    </a>
                    <a href="index-category.php" class="active list-group-item list-group-item-action"><i class="bi bi-file-earmark-text me-1"></i> Posts
                    </a>
                    <a href="#" class="list-group-item list-group-item-action"> <i class="bi bi-tags me-1"></i> Categories
                    </a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-person me-1"></i>Users
                    </a>
                    <a href="#" class="list-group-item list-group-item-action "><i class="bi bi-chat-left me-1"></i> Comments
                    </a>
                    <a href="#" class="list-group-item list-group-item-action "> <i class="bi bi-box-arrow-left me-1"></i> Logout
                    </a>
                  </div>
            </div>
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Posts</h2>
                    <a href="create-category.php" class="btn btn-primary">
                        <i class="bi bi-plus"></i> Add New
                    </a>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Post Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Post title</td>
                            <td>
                                <img src="" alt="">
                            </td>
                            <td>5th Dec 2024</td>
                            <td>
                                <a href="index-category.php" class="btn btn-primary btn-sm">
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