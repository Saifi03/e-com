<?php $this->load->view('site/include/header'); ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
        <table class="table table-hover text-dark">
            <h3 style="text-align: center; color:lime; font-weight:700;">MY ORDER</h3>
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Name</th>
      <th scope="col">Amount</th>
      <th scope="col">Product</th>
      <th scope="col">Order Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach($orderData as $order){ $i++ ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $order->order_name ?></td>
      <td><?php echo $order->order_amount ?></td>
      <td>
        <?php $productData=$this->SiteModel->getOrderProduct($order->order_id); ?>
        <?php
            foreach($productData as $list){
                echo "<b>Name: </b>".$list->product_name."<b>/ Quantity: </b>".$list->product_qty."<b>/ Price: </b>".$list->product_price."<br>";
            }?>
      </td>
      <td>
        
        <?php if($order->order_status == 0){
          echo "Not Confirm";
        }elseif($order->order_status == 1){
          echo "Confirm";
        }else{
          echo "Order Cancel";
        } ?>

      </td>
      <td>
        <a class="btn btn-danger" href="<?php echo base_url('SiteCon/OrderCancel/'); ?><?php echo $order->order_id ?>">Cancel</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
        </div>
    </div>
</div>




<?php $this->load->view('site/include/footer'); ?>