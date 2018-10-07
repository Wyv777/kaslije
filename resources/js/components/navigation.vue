<template>
    <div class="container">
        <div class="topLogo">
            <div class="logo">JAWARA</div>
            <div class="sublogo">ROTI & KUE</div>
        </div>

        <div class="topnav" id="myTopnav">
            <a href="/" class="active">Home</a>
            <a href="/about">About</a>
            <a href="/catalog">Catalog</a>	
            <a href="/contact">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
</template>

<script>

    function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
    }
    
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
