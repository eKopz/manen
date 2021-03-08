@extends('ecommerce.layout.index2')
@section('title', 'Manen.id')

@section('content')

    <!-- Popular Products -->
    <section class=" padding-top-100 padding-bottom-100">
      <div class="container">

        <!-- SHOP DETAIL -->
        <div class="shop-detail">
          <div class="row">

            <!-- Popular Images Slider -->
            <div class="col-md-7">

              <!-- Images Slider -->
              <div class="images-slider">
                <ul class="slides">
                  <li data-thumb="{{url('assets2/images/item-img-1-1.jpg')}}"> <img class="img-responsive" src="{{url('assets2/images/item-img-1-1.jpg')}}"  alt=""> </li>
                  <li data-thumb="{{url('assets2/images/item-img-1-4.jpg')}}"> <img class="img-responsive" src="{{url('assets2/images/item-img-1-4.jpg')}}"  alt=""> </li>
                  <li data-thumb="{{url('assets2/images/item-img-1-5.jpg')}}"> <img class="img-responsive" src="{{url('assets2/images/item-img-1-5.jpg')}}"  alt=""> </li>
                </ul>
              </div>
            </div>

            <!-- COntent -->
            <div class="col-md-5">
              <h4>Rise Skinny Jeans</h4>
              <p style="margin-top:-20px;">250gr/pack</p>
              <span class="price"><small>$</small>299</span>
              <ul class="item-owner">
                <li>Category:<span> <a href="#">women</a></span></li>
              </ul>

              <!-- Item Detail -->
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,</p>

              <!-- Short By -->
              <div class="some-info">
                <ul class="row margin-top-30">
                  <li class="col-md-6">

                    <!-- Quantity -->
                    <div class="quinty">
                      <button type="button" class="quantity-left-minus"  data-type="minus" data-field=""> <span>-</span> </button>
                      <input type="number" id="quantity" name="quantity" class="form-control input-number" value="1">
                      <button type="button" class="quantity-right-plus" data-type="plus" data-field=""> <span>+</span> </button>
                    </div>
                  </li>

                  <!-- ADD TO CART -->
                  <li class="col-md-6"> <a href="/keranjang" class="btn">ADD TO CART</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Popular Products -->
    <section class="dark-bg padding-top-100 padding-bottom-100">
      <div class="container-full">

        <!-- Main Heading -->
        <div class="heading text-center">
          <h4>Related Product</h4>
        </div>

        <!-- Popular Item Slide -->
        <div class="papular-block block-slide">

          <!-- Item -->
          <div class="item">
            <!-- Item img -->
            <div class="item-img"> <img class="img-1" src="{{url('assets2/images/item-img-1-1.jpg')}}" alt="" > <img class="img-2" src="{{url('assets2/images/item-img-1-1-1.jpg')}}" alt="" >
              <!-- Overlay -->
              <div class="overlay">
                <div class="position-bottom">
                  <div class="inn"><a href="#." data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a href="#.">Mid Rise Skinny Jeans </a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <!-- Price -->
            <span class="price"><small>$</small>299</span> </div>

          <!-- Item -->
          <div class="item">
            <!-- Item img -->
            <div class="item-img"> <img class="img-1" src="{{url('assets2/images/item-img-1-2.jpg')}}" alt="" > <img class="img-2" src="{{url('assets2/images/item-img-1-2-1.jpg')}}" alt="" >
              <!-- Overlay -->
              <div class="overlay">
                <div class="position-bottom">
                  <div class="inn"><a href="#." data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a href="#.">Mid Rise Skinny Jeans </a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <!-- Price -->
            <span class="price"><small>$</small>299</span> </div>

          <!-- Item -->
          <div class="item">
            <!-- Item img -->
            <div class="item-img"> <img class="img-1" src="{{url('assets2/images/item-img-1-3.jpg')}}" alt="" > <img class="img-2" src="{{url('assets2/images/item-img-1-3-1.jpg')}}" alt="" >
              <!-- Overlay -->
              <div class="overlay">
                <div class="position-bottom">
                  <div class="inn"><a href="#." data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a href="#.">Mid Rise Skinny Jeans </a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <!-- Price -->
            <span class="price"><small>$</small>299</span> </div>

          <!-- Item -->
          <div class="item">
            <!-- Sale -->
            <div class="on-sale"> Sale </div>
            <!-- Item img -->
            <div class="item-img"> <img class="img-1" src="{{url('assets2/images/item-img-1-4.jpg')}}" alt="" > <img class="img-2" src="{{url('assets2/images/item-img-1-4-1.jpg')}}" alt="" >
              <!-- Overlay -->
              <div class="overlay">
                <div class="position-bottom">
                  <div class="inn"><a href="#." data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a></div>
                </div>
              </div>
            </div>

            <!-- Item Name -->
            <div class="item-name"> <a href="#.">Mid Rise Skinny Jeans </a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <!-- Price -->
            <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span> </div>
          <!-- Item -->
          <div class="item">
            <!-- Item img -->
            <div class="item-img"> <img class="img-1" src="{{url('assets2/images/item-img-1-5.jpg')}}" alt="" > <img class="img-2" src="{{url('assets2/images/item-img-1-5-1.jpg')}}" alt="" >
              <!-- Overlay -->
              <div class="overlay">
                <div class="position-bottom">
                  <div class="inn"><a href="#." data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a href="#.">Mid Rise Skinny Jeans </a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <!-- Price -->
            <span class="price"><small>$</small>299</span> </div>

          <!-- Item -->
          <div class="item">
            <!-- Item img -->
            <div class="item-img"> <img class="img-1" src="{{url('assets2/images/item-img-1-6.jpg')}}" alt="" > <img class="img-2" src="{{url('assets2/images/item-img-1-6-1.jpg')}}" alt="" >
              <!-- Overlay -->
              <div class="overlay">
                <div class="position-bottom">
                  <div class="inn"><a href="#." data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a href="#.">Mid Rise Skinny Jeans </a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <!-- Price -->
            <span class="price"><small>$</small>299</span> </div>

          <!-- Item -->
          <div class="item">
            <!-- Item img -->
            <div class="item-img"> <img class="img-1" src="{{url('assets2/images/item-img-1-7.jpg')}}" alt="" > <img class="img-2" src="{{url('assets2/images/item-img-1-7-1.jpg')}}" alt="" >
              <!-- Overlay -->
              <div class="overlay">
                <div class="position-bottom">
                  <div class="inn"><a href="#." data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a href="#.">Mid Rise Skinny Jeans </a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <!-- Price -->
            <span class="price"><small>$</small>299</span> </div>

          <!-- Item -->
          <div class="item">
            <!-- Item img -->
            <div class="item-img"> <img class="img-1" src="{{url('assets2/images/item-img-1-8.jpg')}}" alt="" > <img class="img-2" src="{{url('assets2/images/item-img-1-8-1.jpg')}}" alt="" >
              <!-- Overlay -->
              <div class="overlay">
                <div class="position-bottom">
                  <div class="inn"><a href="#." data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a href="#.">Mid Rise Skinny Jeans </a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <!-- Price -->
            <span class="price"><small>$</small>299</span> </div>
        </div>
      </div>
  </section>
@endsection
