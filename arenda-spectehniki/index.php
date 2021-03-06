<?php $title = 'Аренда спецтехники'; ?>
<?php $description = ''; ?>
<?php $keywords = ''; ?>
<?php 
$root = $_SERVER['DOCUMENT_ROOT'];
include($root."/blocks/meta.php");
include($root."/blocks/header.php");
include("array.php");
?>
<article>
<div class="container">
<div class="row">
<h1 class="h1">Аренда спецтехники</h1>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-block">
		<p>Строительство и ремонт крупных объектов подразумевают использование специальной техники. Перевозка крупногабаритных и тяжелых грузов, высотные, дорожные и землеройные работы невозможно осуществить без специальных машин и оборудования. Покупка специальной строительной техники обходится недешево, поэтому оптимальным решением проблемы является ее аренда.</p>
		<p>Компания ЗАО «СМП-245-ТРАНССТРОЙ» предлагает услуги по аренде строительной спецтехники. У нас есть широкий ассортимент нужного для Вас строительного транспорта:</p>
		<ul>
			<li>&mdash;&nbsp;&nbsp;самосвалов и автопоездов;</li>
			<li>&mdash;&nbsp;&nbsp;экскаваторов и иной землеройной техники;</li>
			<li>&mdash;&nbsp;&nbsp;спец.техники (гидромолоты, буровые машины);</li>
			<li>&mdash;&nbsp;&nbsp;автокранов;</li>
			<li>&mdash;&nbsp;&nbsp;бульдозеров и т.д.</li>
		</ul>
		<p>Кроме этого, ЗАО «СМП-245-ТРАНССТРОЙ» предоставляет в аренду базу с подъездным и повышенным железнодорожным путём, производственные помещения и охраняемую площадку для хранения материалов.</p>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-block">
		<img src="<?php echo HTTP_SERVER;?>img/26.jpg" alt="" class="img-responsive center-block">
		<p class="center-block" style="max-width:275px;margin-top:10px;">База ЗАО «СМП-245-Трансстрой» 
	тел.: -49-34-27- (адрес: г. Владмир, ул. Большая Нижегородская д.124 а)</p>
	</div>
</div>

<div class="row">
<?php foreach($array as $key => $row) { ?>
	<div class="col-sm-6 col-md-4 col-lg-3">
		<a href="<?php echo HTTP_SERVER,$row['url'];?>">
			<img class="img-responsive center-block" src="<?php echo HTTP_SERVER.'img/arenda/'.$row['url'].'.jpg';?>" alt="<?php echo $row['name'];?>">
			<p class="text-center"><?php echo $row['name'];?></p>
		</a>
	</div>
<?php $clearfix ='';
	if (($key+1) % 2 == 0) {$clearfix=' visible-sm';}
	if (($key+1) % 3 == 0) {$clearfix=$clearfix.' visible-md';}
	if (($key+1) % 4 == 0) {$clearfix=$clearfix.' visible-lg';}
	if (strlen($clearfix)>0) {
?>
	<div class="clearfix<?php echo $clearfix; ?>"></div>
<?php }} ?>
</div>
</div><!-- container -->
</article>
<?php include($root."/blocks/footer.php"); ?>