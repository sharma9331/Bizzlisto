@extends('layouts.app')

@section('content')
    <div class="cint">
        <div class="container mt-5" style="width: 1000px;height:1300px; ">
            <div class=" row">
                <div class="col-md-6 me-5">
                    <h2 class="fw-bold">Add Your Business</h2>
                    <p class="text-muted">Add information about your business below. Your business page will not appear in
                        search results until this information has been verified and approved by our moderators. Once it is
                        approved, you'll receive an email with instructions on how to claim your business page.</p>
                    <form>
                        <div class="mb-3">
                            <label for="country" class="form-label">Province</label>
                            <select class="form-select" id="country" oninput="getvalue()">
                                <option selected>Janakpur</option>
                                <option>Bagmati</option>
                                <option>Sudurpashchim</option>
                                <option>Lumbini</option>
                                <option>Koshi</option>
                                <option>Karnali</option>
                                <option>Gandaki</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="businessName" class="form-label">Business Name</label>
                            <input type="text" class="form-control" id="businessName" oninput="getvalue()"
                                placeholder="business name">
                        </div>
                        <div class="mb-3">
                            <label for="address1" class="form-label">Address 1</label>
                            <input type="text" class="form-control" oninput="getvalue()" id="address1">
                        </div>
                        <div class="mb-3">
                            <label for="address2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" oninput="getvalue()" id="address2"
                                placeholder="Optional">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" oninput="getvalue()" id="city"
                                    placeholder="Eg:kathmandu,Pokhara, Lalitpur, Bharatpur, and Biratnagar">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="postalCode" class="form-label">Postal Code</label>
                                <input type="text" class="form-control" oninput="getvalue()" id="postalCode"
                                    placeholder="Eg:47500">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" oninput="getvalue()" id="phone"
                                placeholder="Eg:124-1456780">
                        </div>
                        <div class="mb-3">
                            <label for="webAddress" class="form-label">Web Address</label>
                            <input type="url" class="form-control" oninput="getvalue()" id="webAddress"
                                placeholder="http://www.companyaddress.my,Option">
                        </div>
                        <div class="form-group mb-3">
                            <label for="category">Categories</label>
                            <div id="category-container">
                                <div class="d-flex align-items-center mb-2">
                                    <select class="form-control category-select" id="category" oninput="getvalue()">
                                        <option selected></option>
                                        <option>Food</option>
                                        <option>Retail</option>
                                        <option>Services</option>
                                    </select>
                                    <span class="remove-category" onclick="removeCategory(this)">Remove</span>
                                </div>
                            </div>
                            <a href="#" onclick="addCategory(event)">Add another category</a>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fs-2"> Your Email Address</label>
                            <p>We’ll send you an email to verify your address</p>
                            <input type="text" class="form-control" oninput="getvalues()" id="email"
                                placeholder="email">
                        </div>

                        <div class="mb-3">
                            <p>By continuing, you agree to Bizzlisto <span class="text-primary">Business Terms</span> and
                                acknowledge our <span class="text-primary">Privacy Policy.</span> We may email you about
                                Bizlisto products, services and local events. You can unsubscribe at any time</p>

                        </div>
                        <button class="btn btn-danger fw-bold">Add business</button>



                    </form>
                </div>
                <div class="col-md-4 mb-6">
                    <img src="https://s3-media0.fl.yelpcdn.com/assets/2/biz/img/cfd2f4c2e0b3/signup/new_biz.png"
                        alt="">
                </div>

            </div>
        </div>
    </div>
@endsection
