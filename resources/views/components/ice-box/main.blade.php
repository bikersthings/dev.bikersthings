<a href="" target="blank_"> {{-- Unshow hreff dan target jika unavail --}}
    <div class="card card-item-ib">
        <div class="card-body">
            <img src="{{asset('assets/img/thumbnail/thumb5.png')}}" alt=""> {{-- Tambah style style="filter: grayscale(100%);" jika unavail--}}
        </div>
        <div class="card-footer">
            <div class="nama-ib">Street Rush</div>
            <div class="progress progress-ib my-2" style="position: relative; background-color: #8ec0ce">
                <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%; text-align: center"></div> {{-- Width dinamis dapet dari ((kuota-parti)/100%) --}}
                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color:white">
                    20 Left
                </div>
            </div>
            <button class="btn btn-gradient">REDEEM</button> {{-- tambah parameter 'disabled' dan teks ganti 'Finished' jika unavail --}}
            <div class="harga-ib">
                50 Ice Coupon
            </div>
            <div class="exp-ib">
                Exp : 19 May 2022
            </div>
        </div>
    </div>
</a>