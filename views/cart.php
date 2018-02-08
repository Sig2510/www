<?php require_once './views/partials/header.php'; ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Count</th>
      <th scope="col">Price</th>
      <th scope="col">Summ</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $product) { ?>
      <tr>
        <td><?php echo $product['title']; ?></td>
        <td><?php echo $lineItems[$product['id']]; ?></td>
        <td><?php echo $product['price']; ?></td>
        <td><?php echo $lineItems[$product['id']] * $product['price']; ?></td>
      </tr>
    <?php }?>

  </tbody>
  <tfoot>
    <tr>
      <td colspan="4">
        Total:
        <?php
          $total = 0;
          foreach ($products as $product) {
            $total += $product['price'] * $lineItems[$product['id']];
          }

          echo $total;
        ?>
      </td>
    </tr>
  </tfoot>
</table>

<a href="/index.php?r=/order" class="btn btn-warning">Place order</a>

<?php require_once './views/partials/footer.php'; ?>
