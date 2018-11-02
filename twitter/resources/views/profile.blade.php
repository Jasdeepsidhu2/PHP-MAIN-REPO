@extends('layout')

@section('content')
<main class="full-page">
    
    <form action="/profile" id="regForm" method="post" >
    <h2>Fill Registration Form </h2>
    
    <?php echo csrf_field() ?> 
    <div class="form-group">

            
            <div class="regForm ">
                    <label for="handle">Handle*</label>
                    <input type="text"
                        id="handle" 
                        class="handle " 
                        name="handle"

                        value="<?php echo $profile->handle ?>" 
                        placeholder="handle">
                
            </div>
            <div class="regForm">
                    <label for="description">Description*</label>
                    <input type="text" 
                        id="description" 
                        class="description" 
                        name="description"
                        value="<?php echo $profile->handle ?>"
                        placeholder="description">
                
            </div>
            <div class="regForm">
                    <label for="website">Website*</label>
                    <input type="text"
                        id="website" 
                        class="website" 
                        name="website" 
                        value="<?php echo $profile->website?>" 
                        placeholder=" website">
                    
            </div>

            <div class="regForm">
                    <label for="image">Image-Link*</label>
                    <input 
                        type="text"
                        id="image" 
                        class="image" 
                        name="image"
                        value="<?php echo $profile->image ?>" 
                        placeholder="image-link">
                <!-- <p class="reqName"></p> -->
            </div>
            <div class="regForm btn btn-primary" >
                <input type="submit" id="subBtn"  value="Submit">
            </div>
    </div>
</main>




                <!-- <label for="fullname">Full Name*</label>
                <input type="text" id="fullname" class="fullname" value="" placeholder="Enter Your FullName">
                <p class="reqName"></p>
            </div>
            <div class="regForm">
                <label for="address">Your Address*</label>
                <input type="textarea" id="address" class="address" value="" placeholder="Enter Your Address">
                <p class="reqAddress"></p>
            </div>
            <div class="regForm">
                <label for="city">Your City*</label>
                <input type="text" id="city" class="city" value="" placeholder="Enter Your City">
                <p class="reqCity"></p>
            </div>
            <div class="regForm">
                <label for="province">Province*</label>
                <input type="text" id="province" class="province" value="" placeholder="Enter Your province">
                <p class="reqProvince"></p>
            </div>
            <div class="regForm">
                <label for="postalCode">Postal Code*</label>
                <input type="text" id="postalCode" class="postalCode" value="" placeholder="Enter Your postalCode">
                <p class="reqPostal"></p>
            </div>
            <div class="regForm">
                <label for="email">Your Email*</label>
                <input type="text" id="email" class="email" value="" placeholder="Enter Your Email">
                <p class="reqEmail"></p>
            </div>
            <div class="regForm">
                <label for="phoneNumber">Phone Number*</label>
                <input type="number" id="phoneNumber" class="phoneNumber" value="" placeholder="Enter Your phoneNumber">
                <p class="reqNumber"></p>
            </div>
            <div class="regForm subBtn" >
                <input type="button" id="subBtn"  value="Submit">
            </div>
        </form> -->
@endsection