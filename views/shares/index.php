<div>
    <?php if (!isset($_SESSION['is_logged_in'])) : ?>
        <h1 class="text-center">Please Login to view shares!</h1>
    <?php endif;?>
	<?php if (isset($_SESSION['is_logged_in'])) : ?>
	<a  class="btn btn-success btn-share btn-sm m-2" href="<?php echo ROOT_PATH; ?>shares/add">Share</a>
	<?php endif;?>
	<?php foreach($viewmodel as $item) : ?>
    <?php if (isset($_SESSION['is_logged_in'])) : ?>
			<div class="card cardcstm p-3 mb-2">
				<h5  style="font-size: 12px;">Title: <?php echo $item['title'];?></h5>
				<small  style="font-size: 12px;">Date: <?php echo $item['create_date'];?></small>
				<hr>
				<p><?php echo $item['body'];?></p>
				<br>
				<a href="<?php  echo $item['link']; ?>" target="_blank"  style="color:black;">Link</a>
			</div>
    <?php endif;?>
	<?php endforeach; ?>
</div>