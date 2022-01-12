<div class="col-md-12">

                        <form action="{{ url('filter/datakelurahan') }}" method="GET">
                          <div class="form-group">
                              <label for="email">{{ __('Pilih Kelurahan') }}</label>

                            
                             
                              <select class="test-select2 form-control" id="city" name="id">
                                  <option> --- PILIH Kelurahan--- </option>
                                  @foreach ($datakuid  as $prov)
                                 
                                      <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                                  @endforeach 
                                  
                              </select>
                             
                              
                          </div>
                          
                          <button type="submit" class="btn btn-primary" value="Submit">Submit</button>


                        </form>
                    </div>