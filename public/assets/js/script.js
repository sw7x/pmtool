$('#projectList').on('init.dt', function() {
	$('.add-project')
		.attr('data-toggle', 'modal')
		.attr('data-target', '#addProjectModal');
});




$(function () {
	$("#projectList").DataTable({
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false,
		"dom": 'Bfrtip',
		"buttons": [
			{
				text: 'My button',
				action: function ( e, dt, node, config ) {
				//	$('#addProjectModal').modal('show');
					//	alert( 'Button activated' );
				},
				className: 'add-project'
			}
		]
	});
});







