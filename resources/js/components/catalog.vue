<template>
<div class="container">
<!-- nav -->
<div class="tile is-full">
	<div class="tile is-ancestor">
      <div class="tile is-parent">
        <div class="tile is-child box">
          <tabs type="boxed">
            <tab-pane label="Pictures">Pictures Tab</tab-pane>
            <tab-pane label="Music">Music Tab</tab-pane>
            <tab-pane label="Videos">Video Tab</tab-pane>
            <tab-pane label="Documents">Document Tab</tab-pane>
          </tabs>
          <tabs type="toggle">
            <tab-pane label="Pictures">Pictures Tab</tab-pane>
            <tab-pane label="Music">Music Tab</tab-pane>
            <tab-pane label="Videos">Video Tab</tab-pane>
            <tab-pane label="Documents">Document Tab</tab-pane>
          </tabs>
          <tabs type="boxed" :is-fullwidth="true" alignment="centered" size="large">
            <tab-pane label="Pictures" icon="fa fa-image">Pictures Tab</tab-pane>
            <tab-pane label="Music" icon="fa fa-music">Music Tab</tab-pane>
            <tab-pane label="Videos" icon="fa fa-film">Video Tab</tab-pane>
            <tab-pane label="Documents" icon="fa fa-file-text-o">Document Tab</tab-pane>
          </tabs>
        </div>
      </div>
    </div>
</div>

<!-- section1 -->
	<div class="tile is-ancestor">
		<div class="tile is-parent">
			<article class="tile is-child box">
				<img src="http://www.tlj.co.id/upload/product/20160314single-royal-brownie-cookie.jpg"/>
				<p class="title">One</p>
				<p class="subtitle">Subtitle</p>
			</article>
			<article class="tile is-child box">
				<img src="http://www.tlj.co.id/upload/product/20160314single-royal-brownie-cookie.jpg"/>
				<p class="title">Two</p>
				<p class="subtitle">Subtitle</p>
			</article>
		</div>
		<div class="tile is-parent">
			<article class="tile is-child box">
				<img src="http://www.tlj.co.id/upload/product/20160314single-royal-brownie-cookie.jpg"/>
				<p class="title">Three</p>
				<p class="subtitle">Subtitle</p>
			</article>
			<article class="tile is-child box">
				<img src="http://www.tlj.co.id/upload/product/20160314single-royal-brownie-cookie.jpg"/>
				<p class="title">Four</p>
				<p class="subtitle">Subtitle</p>
			</article>
		</div>
    </div>
<!-- section2 -->
	<div class="tile is-ancestor">
		<div class="tile is-parent">
			<article class="tile is-child box">
				<img src="http://www.tlj.co.id/upload/product/20160314single-pack-chocochip-cookie.jpg"/>
				<p class="title">One</p>
				<p class="subtitle">Subtitle</p>
			</article>
			<article class="tile is-child box">
				<img src="http://www.tlj.co.id/upload/product/20160314single-pack-chocochip-cookie.jpg"/>
				<p class="title">Two</p>
				<p class="subtitle">Subtitle</p>
			</article>
		</div>
		<div class="tile is-parent">
			<article class="tile is-child box">
				<img src="http://www.tlj.co.id/upload/product/20160314single-pack-chocochip-cookie.jpg"/>
				<p class="title">Three</p>
				<p class="subtitle">Subtitle</p>
			</article>
			<article class="tile is-child box">
				<img src="http://www.tlj.co.id/upload/product/20160314single-pack-chocochip-cookie.jpg"/>
				<p class="title">Four</p>
				<p class="subtitle">Subtitle</p>
			</article>
		</div>
    </div>
<!-- section3 -->
	<div class="tile is-ancestor">
		<div class="tile is-parent">
			<article class="tile is-child box">
				<img src="http://www.tlj.co.id/upload/product/20160314premium-cookie-set.jpg"/>
				<p class="title">One</p>
				<p class="subtitle">Subtitle</p>
			</article>
			<article class="tile is-child box">
				<img src="http://www.tlj.co.id/upload/product/20160314premium-cookie-set.jpg"/>
				<p class="title">Two</p>
				<p class="subtitle">Subtitle</p>
			</article>
		</div>
		<div class="tile is-parent">
			<article class="tile is-child box">
				<img src="http://www.tlj.co.id/upload/product/20160314premium-cookie-set.jpg"/>
				<p class="title">Three</p>
				<p class="subtitle">Subtitle</p>
			</article>
			<article class="tile is-child box">
				<img src="http://www.tlj.co.id/upload/product/20160314premium-cookie-set.jpg"/>
				<p class="title">Four</p>
				<p class="subtitle">Subtitle</p>
			</article>
		</div>
    </div>
</div>
</template>

<script>
export default {

}
</script>

<style <style scoped>
img{
	max-width: 50%;
}
.is-parent{
	padding:0px !important;
}
@media screen and (max-width: 600px) {
	.tile .is-parent{
		float: left;
		width:50%;
	}
}

@media screen and (max-width: 768px), print{
	.tile .is-parent{
		float: left;
		width:50%;
	}
}
</style>
