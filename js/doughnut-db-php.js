$(document).ready(function(){
	$.ajax({
		url: "http://localhost/appofkindness/dougnut-data.php",
		method: "GET",
		success: function(data){
			console.log(data);
			var category = [];
			var value  = [];

			for(var i in data){
				category.push(data[i].category);
				value.push(data[i].value);
			}

			var chartdata = {
				labels:  ["Food","Clothes","Electronics","Furniture","Money","Blood","Others"],
				datasets : [
					{
						label: 'Donations',
						backgroundColor: [
							"#DE8887",
							"#A9A9A9",
							"#DC143C",
							"#F4A460",
							"#2E8B57",
							"#CCCCCC",
							"#CCCC99"
						],
						borderColor: [
							"#CDA776",
							"#989898",
							"#CB252B",
							"#E39371",
							"#1D7A46",
							"#CCCCCC",
							"#CCCC99"

						],
						borderWidth: [1,1,1,1,1,1,1],
						
						data: value
					}
				]
			};
			var ctx= $("#doughnut-chartcanvas-1");
			var doughnut= new Chart(ctx, {
				type: "doughnut",
				data: chartdata
			});
		},
		error: function(data){
			console.log(data);
		}
	});
});