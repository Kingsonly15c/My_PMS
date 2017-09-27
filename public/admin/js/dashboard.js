$(document).ready(function(){

	$(document).on('click','#modalclick',function(){
    var datas=$(this).data('url');
    $('#modalheader').html('<h3>Create New Admin</h3>');
    $('#modal').modal('show').find('#modalcontent').html(' ');
    $('#modal').modal('show').find('#modalcontent').load(datas);
});
	
});