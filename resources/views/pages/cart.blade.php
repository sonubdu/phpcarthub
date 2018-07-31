@extends('welcome')
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
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                    @foreach($cartdata as $cartitem)
						<tr>
							<td class="cart_product">
								<a href=""><img width="75px;" src="{{asset('frontend/images/home/product1.jpg')}}" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$cartitem->name}}</a></h4>
	
							</td>
							<td class="cart_price">
								<p>{{$cartitem->price}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$cartitem->price*$cartitem->qty}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
                        @endforeach

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

						

					
                   
@endsection
