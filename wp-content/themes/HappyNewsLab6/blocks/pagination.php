

<div class="pagination">
  <a href="?pageno=1">First</a>
  
  <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">Prev</a>

  <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>" class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">Next</a>

  <a href="?pageno=<?php echo $total_pages; ?>">Last</a>
</div>