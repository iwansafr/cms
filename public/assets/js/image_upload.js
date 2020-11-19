$(document).ready(function(){
	$('#imageForm').validate({
		rules:{
			title: 'required',
			image: 'required',
		},
		messages:{

		},
		submitHandler: function(form){
			var form_action = $('#imageForm').attr('action');
			var fd = new FormData(form);
			var file = $('#image')[0].files;
			if(file.length>0){
				fd.append('file',file[0]);
				$.ajax({
					data:fd,
					url: form_action,
					type: "POST",
					dataType: 'json',
					contentType: false,
					processData: false,
					success: function(res){
						$('#image_box').prepend(`
							<div class="col-2">
								<div class="card-body text-center border">
				    			<img src="/images/upload/${res.data.image}" class="img img-fluid" style="min-height: 200px;object-fit:cover;" alt="">
				    			<label class="text-secondary" for="">${res.data.title}</label>
				    		</div>
				    	</div>`
			    		);
						$('#imageForm')[0].reset();
						$('#uploadImage').modal('hide');
					},
					error:function(data){

					}
				});
			}
		}
	});
	$.ajax({
		url: '/admin/image/data',
		type: 'GET',
		dataType:'json',
		success: function(res){
			if(res.status){
				for(key in res.data){
					console.log(key);
					console.log(res.data[key]);
					$('#image_box').prepend(`
						<div class="col-2">
							<div class="card-body text-center border">
			    			<img src="/images/upload/${res.data[key].image}" class="img img-fluid" style="min-height: 200px;object-fit:cover;" alt="">
			    			<label class="text-secondary">${res.data[key].title}</label>
			    		</div>
			    	</div>`
		    	);
				}
			}
		}
	});
});