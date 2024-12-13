<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Post - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group">
                    <a href="dashboard.php" class="list-group-item list-group-item-actio" aria-current="true">
                        <i class="bi bi-speedometer2 me-1"></i> Dashboard
                    </a>
                    <a href="index-post.php" class="list-group-item list-group-item-action"><i class="bi bi-file-earmark-text me-1"></i> Posts
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
                    <h2>Edit Post</h2>
                    <div>
                        <a href="create-post.html" class="btn btn-success">
                            <i class="bi bi-plus"></i> Add New
                        </a>
                        <a href="index-post.html" class="btn btn-primary">
                            <i class="bi bi-arrow-left"></i> All Posts
                        </a>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="form-group">
                                    <label class="form-label">Post Title 
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Post Title">
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 mt-3">
                                        <label class="form-label">Post Image 
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="file" class="form-control" name="title" placeholder="Enter Post Title">
                                    </div>
                                    <div class="form-group col-md-6 mt-3">
                                        <label class="form-label">Category 
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select Category</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label class="form-label">Post Details 
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control" name="content" id="" rows="10" placeholder="Enter Post details "></textarea>
                                </div>
                                <div class="mt-3">
                                    <label class="form-label">Status 
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                          Publish
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                          Draft
                                        </label>
                                      </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Save Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>