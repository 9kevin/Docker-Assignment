<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>BOOK STORE</h3>
	<form>
		<input type="text" name="title" placeholder="Enter the title", id="title">
		<input type="text" name="author" placeholder="Enter the author", id="author">
		<input type="text" name="quantity" placeholder="Enter the quantity", id="quantity">
	</form>

	<button id="button" onclick="storeData()">Add</button>

	<div id="mydiv">
		
	</div>


	


</body>
<script type="text/javascript">
	function storeData(){
		var title, author, quantity;
		title = document.getElementById("title");
		author = document.getElementById("author");
		quantity = document.getElementById("quantity");

		var p_author = document.createElement("P");
		var p_title = document.createElement("P");
		var p_quantity = document.createElement("P");

		var t_author = document.createTextNode(title.value);
		var t_title = document.createTextNode(author.value);
		var t_quantity = document.createTextNode(quantity.value);

		p_author.appendChild(t_author);
		p_title.appendChild(t_title);
		p_quantity.appendChild(t_quantity);

		var title_a = document.getElementById("mydiv").appendChild(p_title);
		var author_a = document.getElementById("mydiv").appendChild(p_author);
		var quantity_a = document.getElementById("mydiv").appendChild(p_quantity);
	}
</script>
</html>