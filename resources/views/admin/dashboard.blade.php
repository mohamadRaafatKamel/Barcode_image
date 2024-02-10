@extends('layouts.admin')

@section('content')
   
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Search 
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

            @include('admin.include.alerts.success')
            @include('admin.include.alerts.errors')

                <!-- Account Settings section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Search</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{route('admin.dashboard')}}"
                                              method="GET"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> Search </h4>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name"> Barcode </label>
                                                            <input type="text" id="name"
                                                                   class="form-control"
                                                                   placeholder="Barcode"
                                                                   name="name">
                                                            @error('name')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-primary" name="btn">
                                                            Search
                                                        </button>
                                                    </div>
                                                </form>

                                                    {{-- @if($image)
                                                    <div class="col-md-6">
                                                        <a class="btn" id="prt_byn" onclick="prt_byn()">Print</a>
                                                    </div>
                                                    <div class="col-md-12" id="div_to_print">
                                                        
                                                        <div class="form-group">
                                                             <img src="{{ URL::to($image) }}" width="100%"/>
                                                            <label for="phone"> Image </label>
                                                            <input type="image" id="path"
                                                                   class="form-control"
                                                                   scr="{{ URL::to($image) }}"
                                                                   placeholder="Image"
                                                                   name="path" readonly>
                                                            @error('path')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    @endif --}}

                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                
                                                
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Account Settings section end -->



            </div>
        </div>
    </div>
@endsection

@section('script')

{{-- <script src="https://www.gstatic.com/firebasejs/9.6.8/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-messaging.js"></script> --}}

<script>
    function prt_byn() {
        // window.print();
        // PrintElem();
        console.log($("#div_to_print"));

        $("#div_to_print").print();
        // alert("The paragraph was clicked.");
    }
    // window.addEventListener("afterprint", (event) => {
    //     console.log("Aprint");
    //     window.close();
    // });
    // jQuery(document).ready(function ($) {
       
        function PrintElem(){
            var mywindow = window.open('', 'PRINT', 'height=400,width=600');

            mywindow.document.write('<html><head><title></title>');
            mywindow.document.write('</head><body >');
            mywindow.document.write('<h1></h1>');
            mywindow.document.write(document.getElementById(div_to_print).innerHTML);
            mywindow.document.write('</body></html>');

            mywindow.document.close(); // necessary for IE >= 10
            mywindow.focus(); // necessary for IE >= 10*/

            mywindow.print();
            mywindow.close();

            return true;
        } 

    // });
</script>
@endsection