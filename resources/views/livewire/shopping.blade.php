<div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        Keranjang
                    </div>
                    <div class="card-body">
                        {{ $jumlah }}
                    </div>
                </div><br>
                <div class="card">
                    <div class="card-header">
                        Belanjaan Saya
                    </div>
                    <div class="card-body">
                         @foreach($datas as $item)
                       <p>{{ $item->nama_barang }}<button class="btn btn-danger" wire:click="destroy({{ $item->id }})">Hapus</button></p>
                    @endforeach
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        Produk
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset('gambar/ayam.jpeg') }}" class="card-img-top" alt="">
                                        <h5 class="card-title">Ayam Goreng</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Rp 10.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('Ayam Goreng', '10000')">BELI</button>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset('gambar/Nasi.jpg') }}" class="card-img-top" alt="">
                                        <h5 class="card-title">Nasi Putih</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Rp 5.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('Nasi Putih', '5000')">BELI</button>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset('gambar/rendang.jpg') }}" class="card-img-top" alt="">
                                        <h5 class="card-title">Rendang Kambing</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Rp 25.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('Rendang Kambing', '25000')">BELI</button>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset('gambar/tempe.jpg') }}" class="card-img-top" alt="">
                                        <h5 class="card-title">Tempe Goreng</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Rp 5.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('Tempe Gorang', '5000')" >BELI</button>  
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
