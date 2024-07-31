<?php ob_start() ?>
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th colspan="4" class="text-center">
                        <h3>Availabilities</h3>
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Amount</th>
                    <th>Product_ID</th>
                    <th>Stock_ID</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($availabilities as $availability) : ?>
                    <tr>
                        <td><?= $availability['id'] ?></td>
                        <td><?= $availability['amount'] ?></td>
                        <td><?= $availability['product_id'] ?></td>
                        <td><?= $availability['stock_id'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th colspan="4" class="text-center">
                        <h3>Products</h3>
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category_ID</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['title'] ?></td>
                        <td><?= $product['category_id'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <table class="table table-striped mt-5 text-center w-50">
            <thead>
                <tr>
                    <th colspan="4" class="text-center">
                        <h3>Stocks</h3>
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stocks as $stock) : ?>
                    <tr>
                        <td><?= $stock['id'] ?></td>
                        <td><?= $stock['title'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <div class="w-100"></div>
        <table class="table table-striped mt-5 text-center w-50">
            <thead>
                <tr>
                    <th colspan="4" class="text-center">
                        <h3>Categories</h3>
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category) : ?>
                    <tr>
                        <td><?= $category['id'] ?></td>
                        <td><?= $category['title'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?= $i; ?>
<?php $content = ob_get_clean() ?>
<?php include('app/views/layout.php') ?>