@extends('layout')
@section('content')

<style>
        .form-box {
	background-color: rgba(0, 0, 0, 0.5);
    /* margin: auto auto; */
    margin-top: 100px;
	padding: 40px;
	border-radius: 5px;
	box-shadow: 0 0 10px #000;
	width: 500px;
	height: 430px;
}
.form-box:before {
	background-image: url("/images/formbg.jpg");
	width: 100%;
	height: 100%;
	background-size: cover;
	content: "";
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: -1;
	display: block;
	filter: blur(.8px);
}
@media (max-width: 575px) {
    .form-box:before {
        background-size: contain;
    }
    .form-box .send {
        margin: 0 auto;
    }
}
.form .content .bodytext {
    background-color: rgb(198,40,40, 0.95);
    color: white;
}
.form .content .bodytext h3 {
    font-size: 20px;
    color: white;
    margin: auto auto;
}
.form .content .bodytext h2 {
    font-size: 23px;
    color: white;
    
}
</style>

<div class="container form">
    <div class="row">
        <div class="col-md-7 col-12 content">
            <div class="bodytext col-md-12">
                <h3 class="offset-2">Together, we can inspire a horde of FUTURE leaders in our world</h3>
                <span class="offset-1"></span>

                
                <ul>
                    <li><h3>Donate for:</h3></li>
                    <li>⦁	Donation in Support of an Event.</li>
                    <li>⦁	Coronavirus Relief.</li>
                    <li>⦁	In Memorial Donation</li>
                </ul>
            </div>
            <div class="col-md-12 bodytext">
                <h2 class="offset-3">MATERIAL DONATION:</h2>
                <span class="offset-1"></span>
                <p>⦁	We appreciate your material donation and support However, furnitures, mattresses, basic household items, 
                    small electrical appliances, bulky household electrical appliances (refrigerators, washers, dryers, etc.), televisions and computers are not accepted.</p>
                <p>⦁	Youth For Purpose Canada also accepts donations of clothing, non-perishable food. 
                    These donations may be dropped at 100, Penn Dr, Unit 6, North York, ON, M9L 2A9. Youth For Purpose also organizes food drives at important holidays of the year.</p>
            </div>
        </div>
        <div class="col-md-5 col-12">
            <form class="form-box col-12" action="/donates" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-12">
                        <input class="contactus" placeholder="First Name" type="text" name="first_name" required>
                    </div>
                    <div class="col-sm-12">
                        <input class="contactus" placeholder="Last Name" type="text" name="last_name" required>
                    </div>
                    <div class="col-sm-12">
                        <input class="contactus" placeholder="Phone" type="tel" name="phone">
                    </div>
                    <div class="col-sm-12">
                        <input class="contactus" placeholder="Email" type="email" name="email" required>
                    </div>
                    <input type="hidden" name="type" value="Donor">
                    <div class="col-sm-12 mb-3">
                        <button class="send offset-4">Donate</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop