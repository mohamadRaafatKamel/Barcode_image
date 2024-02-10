@extends('layouts.print')
@section('title',' السيارة')
@section('car_view','')
@section('content')


<div id="DivIdToPrint" style="display:none0">
    {{-- <style>
        html body{background-color: #ffffff;}
        .table td {padding: 5px;}
        @media only print{
        body{visibility: hidden;}
        #DivIdToPrint{visibility: visible;}
        }
    </style> --}}
    <div class="container">
        
        <div class="row">
            <div class="col-12">
                {{-- <img style="width: 100%;" src="{{asset('assets/admin/print_car.jpeg')}}"> --}}
                <img src="{{ URL::to($path) }}" width="100%"/>
            </div>
        </div>

    </div>
</div>
    
{{-- <div style="text-align: center; padding-top:10px;">
<button class="btn" id="prt_byn" onclick="prt_byn()">Print</button>
</div> --}}
@endsection
@section('script')
<script>
// $(document).ready(function(){
//     $('#prt_byn').click(function(){
//         alert("The paragraph was clicked.");
//     });
// });
// function prt_byn() {
    window.print();
    // alert("The paragraph was clicked.");
// }
// window.onload = function(){
//     window.print();
// }
window.addEventListener("afterprint", (event) => {
  console.log("Aprint");
  history.back();
//   window.close();
});
</script>
@endsection
