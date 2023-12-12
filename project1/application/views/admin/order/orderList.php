<?php  $this->load->view('admin/include/header'); ?>

<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Order List</h6>
                        <a href="">Show All</a>
                    </div>
                    
                    <div class="table-responsive table-hover">
                    <table class="table table-hover text-dark">
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
    <?php $i=0; foreach($orderList as $order){ $i++ ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $order->order_name ?></td>
      <td><?php echo $order->order_amount ?></td>
      <td>
        <?php $productData=$this->AdminModel->getOrderProduct($order->order_id); ?>
        <?php
            foreach($productData as $list){
                echo "<b>Name: </b>".$list->product_name."<b> Quantity: </b>".$list->product_qty."<b> Price: </b>".$list->product_price."<br>";
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
        <a class="btn btn-danger" href="<?php echo base_url('AdminCon/OrderCancel/'); ?><?php echo $order->order_id ?>">Cancel</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
                    </div>
                </div>
</div>

<?php  $this->load->view('admin/include/footer'); ?>