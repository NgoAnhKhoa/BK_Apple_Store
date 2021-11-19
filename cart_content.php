<?php
    include './core/process.php';
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col"> </th>
            <th scope="col">Sản phẩm</th>
            <th scope="col" class="text-center">Số lượng</th>
            <th scope="col" class="text-right">Giá ($)</th>
            <th>  </th>
        </tr>
    </thead>
    <tbody id="cart-content">
    <?php
        foreach($_SESSION['cart'] as $id => $quantity){
            $product = getProduct($id);
            $url = $product['url1'];
            $price = $product['price'];
        ?>

        <tr>
            <td class="img-container"><img src=<?php echo "'$url'"; ?> class="img-cart" alt="image"/> </td>
            <td class="product-name"><a href=<?php echo "'product.php?id=$id'"; ?>><?php echo $product['name']; ?></a></td>
            <td><input class="form-control quantity-product" id=<?php echo "'quantity$id'"; ?> type="number" value=<?php echo "$quantity"; ?> min="1" onchange="changeQuantity(<?php echo $id; ?>)"/></td>
            <td class="text-right price-item"><?php echo $price*$quantity; ?></td>
            <td class="text-right"><button class="btn btn-sm btn-danger" onclick="remove(<?php echo $id; ?>)"><i class="fa fa-trash"></i> </button> </td>
        </tr>
        <?php 
            }
        ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Tổng</td>
            <td class="text-right" id="total">$ 0</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Phí ship</td>
            <td class="text-right" id="ship">$ 0</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><strong>Tổng cộng</strong></td>
            <td class="text-right" id="total-and-ship"><strong>$  0</strong></td>
        </tr>
    </tbody>
</table>

<script src="./assets/js/cart.js"></script>
