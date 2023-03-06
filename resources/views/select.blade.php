
@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/select.css') }}">

<img class="imagew" src="{{ asset('/image/wallpaper.jpg') }}" alt="" width="100%" height="899px">

<div class="virsra">
    <h2>
        Select your size to save it for future
    </h2>
</div>


    <div class="lielaisdiv">

        <div class="input-group mb-3">
            <input id="sizeinput" type="text" class="form-control" placeholder="Recipient's username" aria-label="Cm" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="submitbutton">Save</button>
        </div>
        
        <div class="row1">
            <div class="col3">
                <div class="card" id="cardd1">
                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQnv9ij36ZmZzFbQ3agBIbpsB-sXXJkqqTEGMP3KKyqgNEfgLKS" class="cardimg" alt="...">
                    <div class="card1-body">
                        <select id="ident" class="form-control1">
                            @foreach ($vans as $value)
                                <option value="" disabled selected hidden>--> Click here to select cm <--</option>
                                <option id="ident" value="{{ $value->v_cm }}">{{ $value->v_cm }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col3">
                <div class="card" id="cardd2">
                    <img src="https://th.bing.com/th/id/OIP.-5BzDHfG77aUDltzc_LIKQAAAA?pid=ImgDet&rs=1"
                        class="cardimg" alt="...">
                            <select id="ident2" class="form-control1">
                                @foreach ($nike as $value)
                                    <option value="" disabled selected hidden>--> Click here to select cm <--</option>
                                    <option id="ident2" value="{{ $value->n_cm }}">{{ $value->n_cm }}</option>
                                @endforeach
                            </select>
                    <div class="card1-body">

                    </div>
                </div>
            </div>
        {{-- </div>
        <div class="row2"> --}}
            <div class="col3">
                <div class="card" id="cardd3">
                    <img src="https://seeklogo.com/images/A/adidas-logo-49D5BEBA90-seeklogo.com.png"
                        class="cardimg" alt="...">
                    <div class="card1-body">
                        <select id="ident3" class="form-control1">
                            @foreach ($adidas as $value)
                                <option value="" disabled selected hidden>--> Click here to select cm <--</option>
                                <option id="ident3" value="{{ $value->a_cm }}">{{ $value->a_cm }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col3">
                <div class="card" id="cardd4">
                    <img src="https://www.newbalance.com/dw/image/v2/AAGI_PRD/on/demandware.static/-/Library-Sites-NBUS-NBCA/default/dwc9cf77d7/images/page-designer/2021/april/12069_Comp_A_Mobile.jpg?sw=991&sfrm=jpg"
                        class="cardimg1" alt="...">
                    <div class="card1-body">
                        <select id="ident4" class="form-control1">
                            @foreach ($newbalance as $value)
                                <option value="" disabled selected hidden>--> Click here to select cm <--</option>
                                <option id="ident4" value="{{ $value->nb_cm }}">{{ $value->nb_cm }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="bak">
    <div class="box-1">
        <a id="nulll" href="/" class="btn2 btn-one" role="button"><span>Back Home</span></a>
    </div>
</div>

    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/show-hide.js') }}"></script>
    <script src="{{ asset('js/darkmode.js') }}"></script>
    <script src="{{ asset('js/password.js') }}"></script>

@endsection