<?php
////
include 'navi.php';
?>
<div class="container-fluid text-center" style="margin-top:100px;">
  <div class="well text-center">
  <form enctype="multipart/form-data" method="post" action="querytf2.php">
    <div class="input-group">
      <input type="text" class="form-control" size="30" placeholder="cari kata" required name="keyword" id="kata">
      <div class="input-group-btn">
        <button type="submit" class="btn btn-danger" name="submit" value="submit">Cari</button>
      </div>
    </div>
  </form>
  </div>
</div>
<?php
include 'foot.php';
?>