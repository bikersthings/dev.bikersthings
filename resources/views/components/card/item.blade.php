<a href="/item-detail">
    <div class="card card-item">
        <div class="card-img">
            <img src="{{$itemPhotos}}">
            {!! ($itemTypeID==0) ? 
                '' 
                : 
                '<div class="card-status">'.$itemTypeName.'</div>' 
            !!}
            <div class="card-badges">
                
                {!! ($userStatusID==1) ? 
                    '<img src="assets/img/badge/verif.png" alt="">' 
                    : 
                    '' 
                !!}
                
                {!! ($itemStatusID==1) ? 
                    '<img src="assets/img/badge/boost-gold.png" alt="">' 
                    : 
                    '' 
                !!}
            </div>
        </div>
        <div class="card-body">
            <p class="card-title">{{$itemName}}</p>
            <p class="card-price" value="{{$itemPrice}}">Rp {{$itemPricePointed}}</p>
            <p class="card-location"><i class="fas fa-map-marker-alt"></i>{{$userCityName}}</p>
        </div>
    </div>
</a>