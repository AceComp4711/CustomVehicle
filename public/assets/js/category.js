function create() {
				$.ajax({
					url: "Info/category/1", 
					type: 'get',
					success: function (result) {
					var data = result;
					console.log(“initialLoad3 = ” + initialLoad);
					console.log(data);
                }});
}