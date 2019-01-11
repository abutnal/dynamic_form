$(document).ready(function(){
	$('#cancel').hide();
	$(document).on('click', '#edit', function(event){
		event.preventDefault();
        		$("form#saveForm").prop('id','updateForm');
				$("input#create").prop('name','update');
				$("input#create").prop('id','update');
				$('.btn-name').val('Update');
				$('.panel-heading').html('Update Form');
				$('#cancel').show();
		// alert('I am ready');
	});

	$(document).on('click', '#cancel', function(event){
		event.preventDefault();
        		$("form#updateForm").prop('id','saveForm');
				$("input#update").prop('name','update');
				$("input#update").prop('id','update');
				$('.btn-name').val('Create');
				$('.panel-heading').html('Create Form');
				$('#cancel').hide();
	});
});