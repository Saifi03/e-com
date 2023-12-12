<!-- <form method="" action="">                       
    <input type="text" name="q" placeholder="What do yo u need?">
    <button type="submit" class="site-btn">SEARCH</button>
</form> -->

            <form method="get" action="<?php echo base_url('SiteCon/search'); ?>" class="subscribe-form">
              <div class="form-group d-flex pt-1">
                <input type="text" name="q" class="form-control" placeholder="What do yo u need?">
                <input type="submit" value="SEARCH" class="submit px-3">
              </div>
            </form>