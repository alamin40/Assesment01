<?php include 'header.php';?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Product</div>
                    <div class="card-body">


                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Description</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php foreach ($products as $product){ ?>
                                <tr>
                                    <td><img src="assets/img/<?php echo $product['image']; ?>" alt="" height="50px" width="50px" /></td>
                                    <td><?php echo $product['id']; ?></td>
                                    <td><?php echo $product['name']; ?></td>
                                    <td><?php echo $product['price']; ?></td>
                                    <td><?php echo $product['description']; ?></td>


                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>





                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>