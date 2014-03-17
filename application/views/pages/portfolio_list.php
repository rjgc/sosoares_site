 <?php
/*function url_amigavel($string) { 
    $palavra = strtr($string, "ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ", "SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy");
    $palavranova = str_replace("_", " ", $palavra);
    $pattern = '|[^A-ZA-Z0-9\-]|';    $palavranova = preg_replace($pattern, ' ', $palavranova);
    $string = str_replace(' ', '-', $palavranova);
    $string = str_replace('---', '-', $string);
    $string = str_replace('--', '-', $string);
    return strtolower($string);
}*/
?>

<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li>Início</li>
                        <li>Portfolio Obras</li>
                        <!--<li>Travanca Project</li>-->
                    </ul>
                    <h1 class="title3">Portfolio Obras</h1>
                </div>
            </div>
       

	<div class="row">
		<div class="col-md-12">
			<div class="">
			    <h1 class="align">Obras</h1>
				<?php foreach ($obras as $obra){
				    for($i = 1; $i <= 10; $i++){
				    ?>
				
				  <a href="<?=base_url('index.php/pages/portfolio_caixilharia/'.$obra['id_obra'])?>"><div class="obras-list grow"><img src="<?php echo base_url() ?>assets/uploads/obras/<?php echo $obra['url'] ?>"/><p> <?php echo $obra['nome'] ?></p></div></a> 
				<?php }
				}?>
			</div>
		</div>
      </div><!-- /.row -->
 </div>
	
        <section class="related">
            <div class="container">
                <div id="center">      
           
       
        <!--/well-->
                </div>
            </div>
        </section>
