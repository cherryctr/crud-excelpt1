<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Export Excels</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
      <form action="{{ route('rumah.export')  }}" method="GET">
            <div class="form-group">
                <label for="formGroupExampleInput">Kota</label>
                <select class="test-select2 form-control" id="citys" name="id">
                   
                    <option> --- PILIH KOTA--- </option>
                    @foreach($city as $prov)
                    <option value="{{ $prov->id }}">{{ $prov->name }}  </option>
                    @endforeach
                   
                    
                    
            </select>
    
            <div class="form-group">
                <label for="formGroupExampleInput">Kelurahan</label>
                <select class="test-select2 form-control" id="district" name="district_id">
                    <option value="0"> --- PILIH KECAMATAN--- </option>
                   
                    
                    
            </select>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Kecamatan</label>
                <select class="test-select2 form-control" id="villages" name="villages_id">
                    <option value="0"> --- PILIH KELURAHAN--- </option>
                   
                       
                    
            </select>

            
            <label for="formGroupExampleInput2">Download Template</label>
            <a href="{{ route('rumah.temp') }}">Klik disini</a>
                
            </div>

            
           
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Changes</button>

      </form>
      </div>
       
      </div>
     
    </div>
  </div>
</div>