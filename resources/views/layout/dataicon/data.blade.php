<section id="minimal-statistics">
        <div class="row">
        <div class="col-12 mt-3 mb-1">
            <div class="alert alert-success bg-cyan">
            WELCOME , {{ Auth::user()->name }}
            </div>
            
           
        </div>
        </div>
       
    
        <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">{{ $data['angkaMasjid'] }}</h3>
                    <span>MASJID</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/mosque.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">{{ $data['angkaMushola'] }}</h3>
                    <span>MUSHOLA</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/mushola.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">{{ $data['angkaGerejaKristen'] }}</h3>
                    <span>GEREJA KERISTEN</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/gerejakristen.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>


        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">{{ $data['angkaGerejaKatolik']}}</h3>
                    <span>GEREJA KATOLIK</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/gerejakatolik.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>


        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">{{ $data['angkaPureHindu']}}</h3>
                    <span>PURE HINDU</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/lempuyang-temple.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">{{ $data['angkaPureBudha'] }}</h3>
                    <span>PURE BUDHA</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/buddha.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">{{ $data['angkaKelenteng'] }}</h3>
                    <span>KELENTENG KONGHUCHU</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/pagoda.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        
     
        </div>
    
       
    </section>