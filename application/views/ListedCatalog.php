<h1>Car Catalog</h1>

<div id="body">

		<div class="row">
			<div class="column">
				<h1>Color</h1>
				<img class="myImg" src="Images/car1.png" alt="White Car" style="width:25%">
				<img class="myImg" src="Images/car2.png" alt="Black Car" style="width:25%">
				<img class="myImg" src="Images/car3.png" alt="Red Car" style="width:25%">
			</div>
			<div class="column">
				<h1>Rims</h1>
				<img class="myImg" src="Images/rim1.png" alt="White Car" style="width:20%; height:35%;">
				<img class="myImg" src="Images/rim2.png" alt="White Car" style="width:20%; height:35%;">
				<img class="myImg" src="Images/rim3.png" alt="White Car" style="width:20%; height:35%;">
				<img class="myImg" src="Images/rim4.png" alt="White Car" style="width:20%; height:35%;">
			</div>
			<div class="column">
				<h1>Racks</h1>
				<img class="myImg" src="Images/rack1.png" alt="White Car" style="width:20%; height:35%;">
				<img class="myImg" src="Images/rack2.png" alt="White Car" style="width:20%; height:35%;">
			</div>
			<div class="column">
				<h1>Spoiler</h1>
				<img class="myImg" src="Images/spoiler1.png" alt="White Car" style="width:20%; height:35%;">
				<img class="myImg" src="Images/spoiler2.png" alt="White Car" style="width:20%; height:35%;">
			</div>
		</div>
	
	<div id="myModal" class="modal">
	  <span class="close">&times;</span>
	  <img class="modal-content" id="img01">
	  <div id="caption"></div>
	</div>


	
</div> 

<script>
// Retrieve modal
	var modal = document.getElementById('myModal');
	var img = $('.myImg');
	var modalImg = $("#img01");
	var captionText = document.getElementById("caption");
	
	$('.myImg').click( 
	function(){
		modal.style.display = "block";
		var newSrc = this.src;
		modalImg.attr('src', newSrc);
		captionText.innerHTML = this.alt;
	});

	// create an X and closes the modal when clicked
	var span = document.getElementsByClassName("close")[0];
	span.onclick = function() { 
		modal.style.display = "none";
	}
</script>

