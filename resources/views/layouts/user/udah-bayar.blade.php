<br><br>
<main id="main" class="mt-5">
    <div class="container">
        <div class="text-center mb-5">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            @foreach ($scrap as $i => $v)
                <div class="col-4 mb-3">
                    <div class="card bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">
                            <h5>{{ $v->nama }}</h5>
                            <p>{{ $v->kode_wilayah }} prov</p>
                            <form action="{{ url('dashboard/provinsi') }}" method="GET">
                                <input type="hidden" name="index" value="{{ $i }}">
                                <input type="hidden" name="kode_wilayah" value="{{ $v->kode_wilayah }}">
                                <button class="btn btn-primary">Details</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main><!-- End #main -->
