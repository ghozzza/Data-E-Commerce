<div id="pricing" class="pricing-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Harga Langganan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($paket as $v)
                <div class="col-md-4 col-sm-4 col-xs-12 mt-5">
                    <div class="pri_table_list">
                        <h3>Paket {{ $v->nama }} <br /> <span>Rp. {{ $v->harga }}</span></h3>
                        <h5>{{ $v->lama_langganan }} Hari</h5>
                        <a class="btn btn-primary px-5 mb-4" href="{{ url('paket/') }}{{ '/' . $v->id }}" target="_blank">Beli</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div><!-- End Pricing Section -->
