<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
              <div class="form-group">
      
        
                <label>Pilih Kota</label>
                <select class="form-control" id="city" name="city">
                    <option> --- PILIH PROVINSI --- </option>
                    @foreach ($city as $prov)
                        <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                    @endforeach 
                    
                </select>
              </div>
             

      

        
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih Kecamatan</label>
                    <!-- <input type="text" name="province_id" id="city"> -->
                    
                    <select name="district" class="form-control" id="district">
                     <option value="0">-- PILIH --</option>

                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih Kelurahan</label>
                    <!-- <input type="text" name="province_id" id="city"> -->
                    
                    <select name="villages" class="form-control" id="villages">
                     <option value="0">-- PILIH --</option>

                    </select>
                  </div>
        
        
        
       
      
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


