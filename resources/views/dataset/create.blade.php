<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-4 mb-4" data-toggle="modal" data-target="#tambahData">
  +Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
	  <form action="/store" method="post">
		{{ csrf_field() }}
		
		<label for="nama" class="col-sm-2 row mb-2 col-form-label">Nama</label>
		<input type="text" class="form-control" name="nama"> <br/>

		<label for="tempat_lahir" class="form-label">Tempat Lahir</label>
		<input type="text" class="form-control" name="tempat_lahir">

		<label for="tanggal_lahir" class="form-label mt-3">Tanggal Lahir</label>
		<input type="date" class="datepicker mb-3 form-control" name="tanggal_lahir" >

		<label for="jabatan" class="form-label">Jabatan</label>
		<input type="text" class="form-control" name="jabatan">
		
		<label for="NBM" class="form-label">NBM</label>
		<input type="text" class="form-control" name="NBM">

		<label for="pekerjaan" class="form-label">Pekerjaan</label>
		<input type="text" class="form-control" name="pekerjaan">
		
		<button type="submit" class="btn btn-primary mt-3">Submit</button>
		<button type="button" class="btn btn-secondary mt-3" data-dismiss="modal">Close</button>
	</form>


      </div>
    </div>
  </div>
</div>
    





 
	
 
</body>
