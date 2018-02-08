<?php require_once './views/partials/header.php'; ?>
<table class="table table-striped" Style="margin-bottom: 50px; margin-top: 50px; margin-left: 50px; margin-right: 150px;">
  <thead class="thead-dark ">
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
        <b>Total:
        <?php
          $total = 0;
          foreach ($products as $product) {
            $total += $product['price'] * $lineItems[$product['id']];
          }

          echo ($total . '&nbsp;$');
        ?></b>
      </td>
    </tr>
  </tfoot>
</table>

<a href="/index.php?r=/order" class="btn btn-success" style="margin-left: 50px;">Place order</a>

<?php require_once './views/partials/footer.php'; ?>
