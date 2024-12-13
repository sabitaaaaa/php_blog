<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group">
                    <a href="#" class="active list-group-item list-group-item-actio" aria-current="true">
                        <i class="bi bi-speedometer2 me-1"></i> Dashboard
                    </a>
                    <a href="index-post.php" class="list-group-item list-group-item-action"><i class="bi bi-file-earmark-text me-1"></i> Posts
                    </a>
                    <a href="index-category.php" class="list-group-item list-group-item-action"> <i class="bi bi-tags me-1"></i> Categories
                    </a>
                    <a href="index-user.php" class="list-group-item list-group-item-action"><i class="bi bi-people me-1"></i>Users
                    </a>
                    <a href="#" class="list-group-item list-group-item-action "><i class="bi bi-chat-left me-1"></i> Comments
                    </a> 
                    <a href="profile.php" class="list-group-item list-group-item-action "><i class="bi bi-person me-1"></i> Profile
                    </a>
                    <a href="#" class="list-group-item list-group-item-action "> <i class="bi bi-box-arrow-left me-1"></i> Logout
                    </a>
                  </div>
            </div>
            <div class="col-lg-9">
                <h2>Dashboard</h2>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card bg-primary">
                            <div class="card-body text-light">
                                <h4>Posts</h4>
                                <p class="mb-0">20 posts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-warning">
                            <div class="card-body">
                                <h4>Category</h4>
                                <p class="mb-0">20 categories</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-success">
                            <div class="card-body">
                                <h4>Comments</h4>
                                <p class="mb-0">20 comment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>