<!DOCTYPE html>
<html>
<div class="container">
<!-- Header -->
<?php include('templates/header.php') ?>

<div class="center-all">
    <section class="product-search">
        <div class="container mt-5">
            <div class="row">
            <div class="col-md-6 m-auto">
                <h3 class="text-center mb-3">MVH Product Search</h3>
                <div class="form-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" id="searchBar" class="form-control form-control-lg" placeholder="Enter product information...">
                        <div class="results-box">
                        <h4><span id="num-of-products" class="text-center results-padding badge badge-secondary"></span></h4>
                        <!-- <h6 id="num-of-products" class="text-center mb-3 results-padding"></h6> -->
                        </div>
                    </div>
                 </div>
            </div>
        </div>

        <div id="product-list"> </div>
            <table class="table table-stripped table-hover">
                <tr class="bg-info text-center">
                        <th class="bg-info"> ID </th>
                        <th class="bg-info"> Code </th>
                        <th class="bg-info"> Description </th>
                        <th class="bg-info"> Stock </th>
                        <th class="bg-info"> Packaging </th>
                        <th class="bg-info"> Printed </th>
                        <th class="bg-info"> Brand </th>
                    </tr>
                <tbody id="productTable" class="text-center"></tbdoy>
            </table>
   </section>


<!-- Footer -->
<footer class="section">
<?php include('templates/footer.php') ?>
<!-- !Footer -->
</div>
</div>
    
</html>