<script type="text/javascript">
	$(function() {
		$(".various").fancybox({
			maxWidth    : 700,
			maxHeight   : 700,
			fitToView   : false,
			width       : '50%',
			height      : '80%',
			autoSize    : false,
			closeClick  : false,
			openEffect  : 'none',
			closeEffect : 'none',
			type: 'html',
			content: '<video id="video" preload controls><source src="<?php echo PATH_IMAGES; ?>video-colgate.mp4" type="video/mp4"><source src="<?php echo PATH_IMAGES; ?>video-colgate.webm" type="video/webm"><source src="<?php echo PATH_IMAGES; ?>video-colgate.ogv" type="video/ogv"></video>'
		});
	});
</script>
<!-- Section Consejos -->
<section id="consejos">
    <!-- Modal -->
    <div id="#inline" style="display:none;">
        <video id="video" preload controls> 
            <source src="<?php echo PATH_IMAGES; ?>video-colgate.mp4" type="video/mp4"> 
            <source src="<?php echo PATH_IMAGES; ?>video-colgate.webm" type="video/webm">
            <source src="<?php echo PATH_IMAGES; ?>video-colgate.ogv" type="video/ogv">
        </video>
    </div>

    <div class="containerSmall">
    	<h2>Vos también podés colaborar ahorrando agua:</h2>
    	<ul class="tips">
    		<li>
    			<img src="<?php echo PATH_IMAGES; ?>consejo-manos.jpg" alt="Al lavarte las manos">
    			<h3>Al lavarte las manos</h3>
				<p>Abrí la canilla sólo al enjuagarte.</p>
				<p class="litros">1 litro</p>
    		</li>
    		<li>
    			<img src="<?php echo PATH_IMAGES; ?>consejo-dientes.jpg" alt="Al lavarte las manos">
    			<h3>AL LAVARTE LOS DIENTES</h3>
				<p>Utilizá un vaso para enjuagarte.</p>
				<p class="litros">1.5 litros</p>
    		</li>
    		<li>
    			<img src="<?php echo PATH_IMAGES; ?>consejo-ducha.jpg" alt="Al lavarte las manos">
    			<h3>EN LA DUCHA</h3>
				<p>Cerrá la canilla mientras te enjabonás.</p>
				<p class="litros">75 litros</p>
    		</li>
    		<li>
    			<img src="<?php echo PATH_IMAGES; ?>consejo-auto.jpg" alt="Al lavarte las manos">
    			<h3>AL LAVAR EL AUTO</h3>
				<p>Utilizá balde y esponja.</p>
				<p class="litros">40 litros</p>
    		</li>
    		<li>
    			<img src="<?php echo PATH_IMAGES; ?>consejo-regar.jpg" alt="Al lavarte las manos">
    			<h3>EN EL JARDÍN</h3>
				<p>Utilizá el agua necesaria para regar, no la uses para “barrer” hojas o suciedad.</p>
				<p class="litros">70 litros</p>
    		</li>
    	</ul>
        <div class="clear"></div>
    </div>
    <div class="containerBtns">
        <div class="containerSmall">
            <a class="btnMiraConsejos" href="#comentarios"><span>Mirá cómo otros se han comprometido</span></a>
            <a class="btnMiraVideo various" href="#"><span>Video</span></a><!--  href="#inline" -->
        </div>  
    </div> 
</section>