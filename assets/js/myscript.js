const flashData = $('.flash-data').data('flashdata');

if(flashData){
	new Swal({
		title: 'Data Siswa',
		text: 'Berhasil '  + flashData,
		icon : 'success'
	});
}

//tombol hapus
$('.tombol-hapus').on('click', function (e){
	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah nda Yakin?',
		text: "Data Siswa Akan Dihapus!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	  }).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href; 
		  
		}
	  })
});

	

