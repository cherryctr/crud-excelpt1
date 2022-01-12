<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Excels</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
            
            
      <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                  <label for="formGroupExampleInput">Kota</label>
                  <select class="test-select2 form-control" id="kota" name="id">
                    
                      <option> --- PILIH KOTA--- </option>
                      @foreach($city as $prov)
                      <option value="{{ $prov->id }}">{{ $prov->name }}  </option>
                      @endforeach
                    
                      
                      
                  </select>
                </div>
    
            <div class="form-group">
                <label for="formGroupExampleInput">Kelurahan</label>
                <select class="test-select2 form-control" id="districts" name="district_id">
                    <option value="0"> --- PILIH KECAMATAN--- </option>
                   
                    
                    
            </select>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Kecamatan</label>
                <select class="test-select2 form-control" id="village" name="villages_id">
                    <option value="0"> --- PILIH KELURAHAN--- </option>
                   
                       
                    
            </select>
            </div>


            <div class="form-group">
                  <label for="formGroupExampleInput">Kategori</label>
                  <select class="test-select2 form-control" id="citys" name="kategori_id">
                    
                      <option value=""> --- PILIH KATEGORI--- </option>
                      @foreach($kategori as $kat)
                      <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}  </option>
                      @endforeach
                    
                      
                      
                  </select>
                </div>

                <div class="form-group">
                  <label for="formGroupExampleInput">Input File</label>
                  <input type="file" name="file" class="form-control">
                <br>
                </div>
    
    
                
                
            
           
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-success">Import User Data</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>