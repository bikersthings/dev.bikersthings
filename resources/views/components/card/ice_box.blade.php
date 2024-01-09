<div class="card card-item-ib">
    <div class="card-body">
        <img src="{{$ibPhotos}}" alt="" style="{{ $ibISexpired==true ? 'filter: grayscale(100%);' : 'no' }}">
    </div>
    <div class="card-footer">
        <div class="nama-ib">{{$ibName}}</div>
        <div class="progress progress-ib my-2" style="position: relative; background-color: #8ec0ce">
            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{$ibPercentage}}%; text-align: center"></div> {{-- Width dinamis dapet dari ((kuota-parti)/100%) --}}
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color:white">
                {{$ibLeft}} Left
            </div>
        </div>
        {!! ($ibISexpired==true) ? 
            '<button class="btn btn-gradient" disabled>FINISHED</button>' 
            : 
            '<button class="btn btn-gradient">REDEEM</button>' 
        !!}
        <div class="harga-ib">
            {{$ibICprice}} Ice Coupon
        </div>
        <div class="exp-ib">
            Exp : {{$ibExpDate}}
        </div>
    </div>
</div>