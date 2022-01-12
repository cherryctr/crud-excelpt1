<div class="row">
              <div class="col-md-4">
                <div class="form-group">
                            <label for="email">{{ __('Pilih Kabupaten') }}</label>

                            
                            <select class="form-control filter" id="city" name="id">
                                <option> --- PILIH KABUPATEN--- </option>
                                @foreach ($city as $prov)
                                    <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                                @endforeach 
                                
                            </select>
                            
                        </div>
              </div>

              
              <div class="col-md-4">
                      <div class="form-group">
                      <label for="email" >{{ __('Pilih Kecamatan') }}</label>

                            
                            

                           
                              
                                    <!-- <input type="text" name="province_id" id="city"> -->
                                    
                                    <select name="district_id" class="form-control filter" id="district">
                                    <option value="0">-- PILIH --</option>

                                </select>
                            
                            
                        </div>
<               /div>

                        <div class="col-md-4">
                <div class="form-group">
                            <label for="email">{{ __('Pilih Kelurahan') }}</label>

                            
                            <select class="form-control filter" id="villages" name="villages">
                                <option value="0"> --- PILIH KABUPATEN--- </option>
                            </select>
                        </div>
              </div>
                        
              <div class="form-group float-right" >
                        <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>

                        <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
                    </div>
                        

              </div>