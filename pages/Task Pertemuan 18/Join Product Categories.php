<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha2-dist/css/boostrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Join Product Categories</title>
</head>
<body>
    <div class="container">
    <h1 align='left'>Join Product Categories</h1>

    <table class="table table-bordered" style="margin-top: 30px;">
        <thead class="thead-light">
            <tr>
                <th>No</th></center>
                <th>Name Product</th>
                <th>Price</th>
                <th>Status</th>
                <th>Category</th>
            </tr>
        </thead>
    <!-- php -->
    <?php
        $koneksi = mysqli_connect("localhost", "root", "", "dump-ta_magang-202304021340");
        $data = mysqli_query($koneksi, "SELECT products.name as name1, products.price as price, products.status as `status`, categories.name as name2 FROM categories join products on categories.id = products.category_id order by products.id");
        $no = 1;
        while ($tampil = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $tampil['name1']?></td>
                <td><?php echo $tampil['price']?></td>
                <td><?php echo $tampil['status']?></td>
                <td><?php echo $tampil['name2']?></td>
            </tr>
        <?php
        }
        ?>
    </div>
</body>
</html>