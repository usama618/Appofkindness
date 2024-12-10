$(document).ready(function(){
	$.ajax({
		url: "http://localhost/appofkindness/monthlydata.php",
		method: "GET",
		success: function(data){
			console.log(data);
			var month = [];
			var donations  = [];

			for(var i in data){
				month.push(data[i].month);
				donations.push(data[i].donations);
			}

			var chartdata = {
				labels: month,
				datasets : [
					{
						label: 'Donations',
						backgroundColor: 'rgba(0, 51, 102, 1)',
						borderColor: 'rgba(204, 204, 153, 1)',
						hoverBackgroundColor: 'rgba(204, 204, 153, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: donations
					}
				]
			};
			var ctx= $("#mycanvas");
			var barGraph= new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data){
			console.log(data);
		}
	});
});