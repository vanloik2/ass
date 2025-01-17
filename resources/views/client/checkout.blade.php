@extends('client.layout.index')
@section('content')
    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Checkout</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page">Checkout</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Checkout Section:::... -->
    <div class="checkout-section">
        <div class="container">
            {{-- <div class="row">
                <!-- User Quick Action Form -->
                <div class="col-12">
                    <div class="user-actions accordion" data-aos="fade-up" data-aos-delay="0">
                        <h3>
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Returning customer?
                            <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_login"
                                aria-expanded="true">Click here to login</a>
                        </h3>
                        <div id="checkout_login" class="collapse" data-parent="#checkout_login">
                            <div class="checkout_info">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If you
                                    are a new customer please proceed to the Billing &amp; Shipping section.</p>
                                <form action="#">
                                    <div class="form_group default-form-box">
                                        <label>Username or email <span>*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="form_group default-form-box">
                                        <label>Password <span>*</span></label>
                                        <input type="password">
                                    </div>
                                    <div class="form_group group_3 default-form-box">
                                        <button class="btn btn-md btn-black-default-hover" type="submit">Login</button>
                                        <label class="checkbox-default">
                                            <input type="checkbox">
                                            <span>Remember me</span>
                                        </label>
                                    </div>
                                    <a href="#">Lost your password?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="user-actions accordion" data-aos="fade-up" data-aos-delay="200">
                        <h3>
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Returning customer?
                            <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_coupon"
                                aria-expanded="true">Click here to enter your code</a>

                        </h3>
                        <div id="checkout_coupon" class="collapse checkout_coupon" data-parent="#checkout_coupon">
                            <div class="checkout_info">
                                <form action="#">
                                    <input placeholder="Coupon code" type="text">
                                    <button class="btn btn-md btn-black-default-hover" type="submit">Apply coupon</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Quick Action Form -->
            </div> --}}
            <!-- Start User Details Checkout Form -->
            <div class="checkout_form" data-aos="fade-up" data-aos-delay="400">
                <form action="{{ route('checkoutAction') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <h3>Chi tiết thanh toán</h3>
                            <div class="row">
                                <div class="col-12">
                                    <div class="default-form-box">
                                        <label>Họ & Tên <span>*</span></label>
                                        <input type="text" name="name"
                                            value="{{ isset($user) ? $user->name : old('name') }}">
                                        @if ($errors->any())
                                            <p class="text-danger">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>
                                </div>
                                {{-- <div class="col-12">
                                        <div class="default-form-box">
                                            <label for="country">country <span>*</span></label>
                                            <select class="country_option nice-select wide" name="country" id="country">
                                                <option value="2">Bangladesh</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">Afghanistan</option>
                                                <option value="5">Ghana</option>
                                                <option value="6">Albania</option>
                                                <option value="7">Bahrain</option>
                                                <option value="8">Colombia</option>
                                                <option value="9">Dominican Republic</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                {{-- <div class="col-12">
                                        <div class="default-form-box">
                                            <label>Street address <span>*</span></label>
                                            <input placeholder="House number and street name" type="text">
                                        </div>
                                    </div> --}}
                                {{-- <div class="col-12">
                                        <div class="default-form-box">
                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                        </div>
                                    </div> --}}
                                <div class="col-12">
                                    <div class="default-form-box">
                                        <label>Địa chỉ <span>*</span></label>
                                        <input type="text" name="address"
                                            value="{{ isset($user) ? $user->address : old('address') }}">
                                        @if ($errors->any())
                                            <p class="text-danger">{{ $errors->first('address') }}</p>
                                        @endif
                                    </div>
                                </div>
                                {{-- <div class="col-12">
                                        <div class="default-form-box">
                                            <label>State / County <span>*</span></label>
                                            <input type="text">
                                        </div>
                                    </div> --}}
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label>Số điện thoại<span>*</span></label>
                                        <input type="text" name="phone_number"
                                            value="{{ isset($user) ? $user->phone_number : old('phone_number') }}">
                                        @if ($errors->any())
                                            <p class="text-danger">{{ $errors->first('phone_number') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label> Email Address <span>*</span></label>
                                        <input type="text" name="email"
                                            value="{{ isset($user) ? $user->email : old('email') }}">
                                        @if ($errors->has('email'))
                                            <p class="text-danger">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>
                                </div>
                                {{-- <div class="col-12">
                                        <label class="checkbox-default" for="newAccount" data-bs-toggle="collapse"
                                            data-bs-target="#newAccountPassword">
                                            <input type="checkbox" id="newAccount">
                                            <span>Create an account?</span>
                                        </label>
                                        <div id="newAccountPassword" class="collapse mt-3" data-parent="#newAccountPassword">
                                            <div class="card-body1 default-form-box">
                                                <label> Account password <span>*</span></label>
                                                <input placeholder="password" type="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="checkbox-default" for="newShipping" data-bs-toggle="collapse"
                                            data-bs-target="#anotherShipping">
                                            <input type="checkbox" id="newShipping">
                                            <span>Ship to a different address?</span>
                                        </label>
    
                                        <div id="anotherShipping" class="collapse mt-3" data-parent="#anotherShipping">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="default-form-box">
                                                        <label>First Name <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="default-form-box">
                                                        <label>Last Name <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="default-form-box">
                                                        <label>Company Name</label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="select_form_select default-form-box">
                                                        <label for="countru_name">country <span>*</span></label>
                                                        <select class="niceselect_option wide" name="cuntry"
                                                            id="countru_name">
                                                            <option value="2">Bangladesh</option>
                                                            <option value="3">Algeria</option>
                                                            <option value="4">Afghanistan</option>
                                                            <option value="5">Ghana</option>
                                                            <option value="6">Albania</option>
                                                            <option value="7">Bahrain</option>
                                                            <option value="8">Colombia</option>
                                                            <option value="9">Dominican Republic</option>
                                                        </select>
                                                    </div>
                                                </div>
    
                                                <div class="col-12">
                                                    <div class="default-form-box">
                                                        <label>Street address <span>*</span></label>
                                                        <input placeholder="House number and street name" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="default-form-box">
                                                        <input placeholder="Apartment, suite, unit etc. (optional)"
                                                            type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="default-form-box">
                                                        <label>Town / City <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="default-form-box">
                                                        <label>State / County <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="default-form-box">
                                                        <label>Phone<span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="default-form-box">
                                                        <label> Email Address <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                <div class="col-12 mt-3">
                                    <div class="order-notes">
                                        <label for="order_note">Ghi chú đơn hàng</label>
                                        <textarea name="note_order" id="order_note"
                                            placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: ghi chú đặc biệt để giao hàng."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <form action="#">
                                <h3>Đơn hàng của bạn</h3>
                                <div class="order_table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Sản phẩm</th>
                                                <th>Tổng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($carts as $cart)
                                                <tr>
                                                    <td> {{ $cart->name }} <strong> × {{ $cart->quant }}</strong></td>
                                                    <td> {{ number_format($cart->price * $cart->quant, 0, ',', '.') }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            {{-- <tr>
                                                <th>Cart Subtotal</th>
                                                <td>$215.00</td>
                                            </tr> --}}
                                            <tr>
                                                <th>Shipping</th>
                                                <td><strong>Free</strong></td>
                                            </tr>
                                            <tr class="order_total">
                                                <th>Tổng đơn</th>
                                                <td><strong>{{ $total }}</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment_method">
                                    {{-- <div class="panel-default">
                                        <label class="checkbox-default" for="currencyCod" data-bs-toggle="collapse"
                                            data-bs-target="#methodCod">
                                            <input type="checkbox" id="currencyCod">
                                            <span>Cash on Delivery</span>
                                        </label>
    
                                        <div id="methodCod" class="collapse" data-parent="#methodCod">
                                            <div class="card-body1">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State /
                                                    County, Store Postcode.</p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="panel-default">
                                        <label class="checkbox-default" for="currencyPaypal" data-bs-toggle="collapse"
                                            data-bs-target="#methodPaypal">
                                            <input type="checkbox" id="currencyPaypal">
                                            <span>PayPal</span>
                                        </label>
                                        <div id="methodPaypal" class="collapse " data-parent="#methodPaypal">
                                            <div class="card-body1">
                                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                                    account.</p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <label class="checkbox-default" for="currencyPaypal" data-bs-toggle="collapse"
                                        data-bs-target="#methodPaypal">
                                        <input type="checkbox" checked disabled id="currencyPaypal">
                                        <span>Thanh toán khi nhận hàng</span>
                                    </label>
                                    <div class="order_button pt-3">
                                        <button class="btn btn-md btn-black-default-hover">Đặt
                                            hàng</button>
                                    </div>
                                </div>
                        </div>
                </form>
            </div>
        </div> <!-- Start User Details Checkout Form -->
    </div>
    </div><!-- ...:::: End Checkout Section:::... -->
@endsection
