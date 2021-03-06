<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laravel Ajax Bootstrap Crud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Important to work AJAX CSRF -->
    <meta name="_token" content="{!! csrf_token() !!}" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet"></head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="javascript:void(0);">Ajax Modal Demo</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <button id="btn_add" name="btn_add" class="btn btn-default pull-right">Add New Product</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-striped table-hover ">
                <thead>
                <tr class="info">
                    <th>ID </th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Static ID</td>
                        <td>Static Product Name</td>
                        <td>Static Price</td>
                        <td>Static Actions</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Passing BASE URL to AJAX -->
<input id="url" type="hidden" value="{{ \Request::url() }}">

<!-- MODAL SECTION -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Product Form</h4>
            </div>
            <div class="modal-body">
                <form id="frmProducts" name="frmProducts" class="form-horizontal" novalidate="">
                    <div class="form-group error">
                        <label for="inputName" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control has-error" id="name" name="name" placeholder="Product Name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputDetail" class="col-sm-3 control-label">Price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" value="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-save" value="add">Save Changes</button>
                <input type="hidden" id="product_id" name="product_id" value="0">
            </div>
        </div>
    </div>
</div>
</body>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
