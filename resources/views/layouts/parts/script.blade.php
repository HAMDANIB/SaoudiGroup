

<script type="text/javascript">
	$(document).ready(function(){
		var table=$('#datatable').DataTable();

		// //start Edit Record	
		table.on('click','.edit',function(){
			str=$(this).closest('tr');
			if($(str).hasClass('child')){
				str=str.prev('.parent');
			}			
			var data=table.row(str).data();
			console.log(data);

			$('#fname').val(data[1]);
			$('#lname').val(data[2]);
			$('#address').val(data[3]);
			$('#mobile').val(data[4]);

			$('#editform').attr('action','/employee/'+data[0]);
			$('#editmodal').modal('show');
		});

		// //start Delete Record	
		table.on('click','.delete',function(){
			str=$(this).closest('tr');
			if($(str).hasClass('child')){
				str=str.prev('.parent');
			}			
			var data=table.row(str).data();
			console.log(data);

			$('#deleteform').attr('action','/employee/'+data[0]);
			$('#deletemodal').modal('show');
		});

	});

</script>

