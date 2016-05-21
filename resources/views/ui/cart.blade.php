@extends('layouts.app')

@section('script')
  <script type="text/javascript">
   $("input[name='quantity']").keyup(function () {
    $(this).parent('tr').find('.cart').html($(this).val());
     console.log($(this).parent('tr').html());
     var cartPrice = $(this).closest('tr').find('.cart-price').html();
      console.log(cartPrice.replace(/\Rp.|\./g, ''));
   })
 </script>
@endsection

@section('content')


<section id="cart_items">
    <div class="container">
      <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Shopping Cart</li>
        </ol>
      </div>
      
      <div class="table-responsive cart_info">
        <table class="table table-condensed">
          <thead>
            <tr class="cart_menu">
              <td class="image">Produk</td>
              <td class="description"></td>
              <td class="price">Harga</td>
              <td class="quantity">Kuantitas</td>
              <td class="total">Total</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
           @foreach($cart as $key => $cart2)
            <tr>
           
              <td class="cart_product">
                <a href=""><img src="{{ url('gambar1/'.$cart[$key]['gambar1']) }}" style="max-width: 100%;height: 100px;"  alt=""></a>
              </td>
              <td class="cart_description">
                <h4><a href="">{{ $cart[$key]['ket'] }}</a></h4>
                <p>Code: {{ $cart[$key]['ket'] }}</p>
              </td>
              <td class="cart_price">
                <p>Rp.{{ $cart[$key]['harga'] }},-</p>
              </td>
              <td class="cart_quantity">
                <div class="cart_quantity_button">
                 <form action="{{url('/updatekuantitas')}}" oninput="tambahqty({{ $cart[$key]['harga'] }})">
                  <input  type="number" name="qty" id="qty"  value="1" >

                </div>
              </td>
              <td class="cart_total">
               
                <h5 id="total_nominal"><strong>Rp.{{ $cart[$key]['harga'] }},-</strong></h5>
                </form>
                
              </td>
              <td class="cart_delete">
                <a class="cart_quantity_delete" href="{{url('/hapuscart/'.$key)}}"><i class="fa fa-times"></i></a>
              </td>
               
            </tr>
           @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section> <!--/#cart_items-->

  


@endsection

                                                                              
<script>
    function tambahqty(harga){
        alert($(this).serialize);
        // console.log($(this).val());
        var qty = document.getElementById("qty").value;

        var total_nominal = harga * qty;

    var total_nominalfix = total_nominal.toFixed(2).replace(/./g, function(c, i, a) {
        return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
    });

    // $.ajax({
    //   'type': 'POST',
    //   'url': 'updatekuantitas',
    //   'data': {
    //     'id'
    //   }
    // })

    $("#total_nominal").children().html('Rp. '+ total_nominalfix);
    }
</script> 
</script>
