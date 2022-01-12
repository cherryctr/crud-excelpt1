<div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                                    <label for="email">{{ __('Pilih Kabupaten') }}</label>

                                
                                    <select class="form-control" id="city" name="id">
                                        <option> --- PILIH KABUPATEN--- </option>
                                        @foreach ($city as $prov)
                                            <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                                        @endforeach 
                                        
                                    </select>
                                  
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                                    <label for="email">{{ __('Pilih Kecamatan') }}</label>

                                
                                    <select class="form-control" id="district" name="district">
                                        <option> --- PILIH KECAMATAN--- </option>
                                       
                                        
                                    </select>
                                  
                        </div>

                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                                    <label for="email">{{ __('Pilih Kelurahan') }}</label>

                                
                                    <select class="form-control" id="villages" name="villages">
                                        <option> --- PILIH KECAMATAN--- </option>
                                       
                                        
                                    </select>
                                  
                        </div>

                    </div>

                    
                    

                    
                </div>

                <div class="divider"></div>