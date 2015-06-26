<?php 
include($root."/blocks/meta.php");
include($root."/blocks/header.php");?>

<article class="container">
<?php include($root."/blocks/breadcrumbs.php"); ?>
	<h1 class="h1"><?php echo $breadcrumbs;?></h1>
	<div class="row">
		<div class="col-md-6"><img class="img-responsive" src="<?php echo HTTP_URL;?>glav.jpg" alt="<?php echo $title;?>"></div>
		<div class="col-md-6">
<?php foreach($array['table'] as $row) { ?>
			<h2><?php echo $row['name'];?></h2>
			<table class="table">
				<tbody>
	<?php foreach($row['tb'] as $tb) { ?>
					<tr><td><?php echo $tb[0];?></td><td><?php echo $tb[1];?></td></tr>
	<?php } ?>
				</tbody>
			</table>
<?php } ?>
			<button class="btn btn-danger">Заказать аренду</button>
		</div>	
	</div>
	<p style="margin-top:30px;"><?php echo $array['opisanie'];?></p>
<?php 
$photo_col="col-xs-6 col-sm-4 col-md-3";
$photo_alt=$array['name'];
include($root."/blocks/img.php"); ?>
</article>

<?php include($root."/blocks/footer.php"); ?>
