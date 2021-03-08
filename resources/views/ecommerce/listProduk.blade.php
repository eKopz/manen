@extends('ecommerce.layout.index2')
@section('title', 'Manen.id')

@section('content')
  <!-- Popular Products -->
  <section class="shop-page padding-top-100 padding-bottom-100">
    <div class="container-full">
      <div class="item-fltr">
        <!-- short-by -->
        <div class="short-by"> Showing 1–10 of 20 results </div>
        <!-- List and Grid Style -->
        <div class="lst-grd"> <a href="#" id="list"><i class="flaticon-interface"></i></a> <a href="#" id="grid"><i class="icon-grid"></i></a>
          <!-- Select -->
          <select>
            <option>Short By: New</option>
            <option>Short By: New</option>
            <option>Short By: New</option>
            <option>Short By: New</option>
            <option>Short By: New</option>
          </select>
        </div>
      </div>

      <!-- Item -->
      <div id="products" class="arrival-block list-group">
        <div class="row">
          <!-- Item -->
          <div class="item">
            <div class="img-ser">
              <div class="on-sale"> Sale </div>

              <!-- Images -->
              <div class="thumb"> <img class="img-1" src="{{url('assets2/images/item-img-1-1.jpg')}}" alt=""><img class="img-2" src="{{url('assets2/images/item-img-1-1-1.jpg')}}" alt="">
                <!-- Overlay  -->
                <div class="overlay">
                  <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                </div>
              </div>

              <!-- Item Name -->
              <div class="item-name fr-grd"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
              <!-- Item Details -->
              <div class="cap-text">
                <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                  <!-- Stars -->
                  <div class="stras"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <a href="#." class="wsh-list"><i class="icon-heart"></i> ADD TO WISHLIST</a> </div>
                  <!-- Details -->
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>

                  <!-- List Style -->
                  <ul class="list-style">
                    <li> Best Shop Products </li>
                    <li> Color Option </li>
                    <li> All Sizes </li>
                    <li> Discounted Prices </li>
                    <li> Refund Poloicy </li>
                    <li> New Arrival </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <div class="img-ser">
              <!-- Images -->
              <div class="thumb"> <img class="img-1" src="{{url('assets2/images/item-img-1-2.jpg')}}" alt=""><img class="img-2" src="{{url('assets2/images/item-img-1-2-1.jpg')}}" alt="">
                <!-- Overlay  -->
                <div class="overlay">
                  <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                </div>
              </div>

              <!-- Item Name -->
              <div class="item-name fr-grd"> <a href="/produk" class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small>199.00</span> <a class="deta animated fadeInRight" href="/produk">View Detail</a> </div>
              <!-- Item Details -->
              <div class="cap-text">
                <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small>199.00</span>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu luctus non. Nulla lacinia, eros vel fermentum consectetur,</p>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <div class="img-ser">
              <!-- Images -->
              <div class="thumb"> <img class="img-1" src="{{url('assets2/images/item-img-1-3.jpg')}}" alt=""><img class="img-2" src="{{url('assets2/images/item-img-1-3-1.jpg')}}" alt="">
                <!-- Overlay  -->
                <div class="overlay">
                  <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                </div>
              </div>

              <!-- Item Name -->
              <div class="item-name fr-grd"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
              <!-- Item Details -->
              <div class="cap-text">
                <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small>199.00</span>
                  <!-- Stars -->
                  <span class="stras"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> </span>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu luctus non. Nulla lacinia, eros vel fermentum consectetur,</p>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <div class="img-ser">
              <!-- Images -->
              <div class="thumb"> <img class="img-1" src="{{url('assets2/images/item-img-1-4.jpg')}}" alt=""><img class="img-2" src="{{url('assets2/images/item-img-1-4-1.jpg')}}" alt="">
                <!-- Overlay  -->
                <div class="overlay">
                  <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                </div>
              </div>

              <!-- Item Name -->
              <div class="item-name fr-grd"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
              <!-- Item Details -->
              <div class="cap-text">
                <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                  <!-- Stars -->
                  <span class="stras"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> </span>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu luctus non. Nulla lacinia, eros vel fermentum consectetur,</p>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <div class="img-ser">
              <!-- Images -->
              <div class="thumb"> <img class="img-1" src="{{url('assets2/images/item-img-1-5.jpg')}}" alt=""><img class="img-2" src="{{url('assets2/images/item-img-1-5-1.jpg')}}" alt="">
                <!-- Overlay  -->
                <div class="overlay">
                  <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                </div>
              </div>

              <!-- Item Name -->
              <div class="item-name fr-grd"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
              <!-- Item Details -->
              <div class="cap-text">
                <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                  <!-- Stars -->
                  <span class="stras"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> </span>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu luctus non. Nulla lacinia, eros vel fermentum consectetur,</p>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <div class="img-ser">
              <!-- Images -->
              <div class="thumb"> <img class="img-1" src="{{url('assets2/images/item-img-1-6.jpg')}}" alt=""><img class="img-2" src="{{url('assets2/images/item-img-1-6-1.jpg')}}" alt="">
                <!-- Overlay  -->
                <div class="overlay">
                  <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                </div>
              </div>

              <!-- Item Name -->
              <div class="item-name fr-grd"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
              <!-- Item Details -->
              <div class="cap-text">
                <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small>199.00</span>
                  <!-- Stars -->
                  <span class="stras"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> </span>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu luctus non. Nulla lacinia, eros vel fermentum consectetur,</p>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <div class="img-ser">
              <!-- Images -->
              <div class="thumb"> <img class="img-1" src="{{url('assets2/images/item-img-1-7.jpg')}}" alt=""><img class="img-2" src="{{url('assets2/images/item-img-1-7-1.jpg')}}" alt="">
                <!-- Overlay  -->
                <div class="overlay">
                  <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                </div>
              </div>

              <!-- Item Name -->
              <div class="item-name fr-grd"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
              <!-- Item Details -->
              <div class="cap-text">
                <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small>199.00</span>
                  <!-- Stars -->
                  <span class="stras"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> </span>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu luctus non. Nulla lacinia, eros vel fermentum consectetur,</p>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <div class="img-ser">
              <!-- Images -->
              <div class="thumb"> <img class="img-1" src="{{url('assets2/images/item-img-1-8.jpg')}}" alt=""><img class="img-2" src="{{url('assets2/images/item-img-1-8-1.jpg')}}" alt="">
                <!-- Overlay  -->
                <div class="overlay">
                  <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                </div>
              </div>

              <!-- Item Name -->
              <div class="item-name fr-grd"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
              <!-- Item Details -->
              <div class="cap-text">
                <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                  <!-- Stars -->
                  <span class="stras"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> </span>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu luctus non. Nulla lacinia, eros vel fermentum consectetur,</p>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <div class="img-ser">
              <!-- Images -->
              <div class="thumb"> <img class="img-1" src="{{url('assets2/images/item-img-1-9.jpg')}}" alt=""><img class="img-2" src="{{url('assets2/images/item-img-1-9-1.jpg')}}" alt="">
                <!-- Overlay  -->
                <div class="overlay">
                  <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                </div>
              </div>

              <!-- Item Name -->
              <div class="item-name fr-grd"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
              <!-- Item Details -->
              <div class="cap-text">
                <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                  <!-- Stars -->
                  <span class="stras"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> </span>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu luctus non. Nulla lacinia, eros vel fermentum consectetur,</p>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <div class="img-ser">
              <!-- Images -->
              <div class="thumb"> <img class="img-1" src="{{url('assets2/images/item-img-1-10.jpg')}}" alt=""><img class="img-2" src="{{url('assets2/images/item-img-1-10-1.jpg')}}" alt="">
                <!-- Overlay  -->
                <div class="overlay">
                  <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                </div>
              </div>

              <!-- Item Name -->
              <div class="item-name fr-grd"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
              <!-- Item Details -->
              <div class="cap-text">
                <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small>199.00</span>
                  <!-- Stars -->
                  <span class="stras"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> </span>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu luctus non. Nulla lacinia, eros vel fermentum consectetur,</p>
                  <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Quick View -->
      <div id="qck-view-shop" class="zoom-anim-dialog qck-inside mfp-hide">
      <div class="row">
        <div class="col-md-6">

          <!-- Images Slider -->
          <div class="images-slider">
            <ul class="slides">
              <li data-thumb="{{url('assets2/images/item-img-1-1.jpg')}}"> <img src="{{url('assets2/images/item-img-1-1.jpg')}}" alt=""> </li>
              <li data-thumb="{{url('assets2/images/item-img-1-1-1.jpg')}}"> <img src="{{url('assets2/images/item-img-1-1-1.jpg')}}" alt=""> </li>
              <li data-thumb="{{url('assets2/images/item-img-1-1.jpg')}}"> <img src="{{url('assets2/images/item-img-1-1.jpg')}}" alt=""> </li>
            </ul>
          </div>
        </div>

        <!-- Content Info -->
        <div class="col-md-6">
          <div class="contnt-info">
            <h3>Mid Rise Skinny Jeans</h3>
            <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He who searches for meaning here will be sorely disappointed. <br>
              <br>
              These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. </p>

            <!-- Btn  -->
            <div class="add-info">
              <div class="quantity">
                <input type="number" min="1" max="100" step="1" value="1" class="form-control qty">
              </div>
              <a href="#." class="btn btn-inverse"><i class="icon-heart"></i></a> <a href="#." class="btn">ADD TO CART </a> </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  @endsection
