@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/br3.jpg" style='height:175px ' class='rounded-circle'>
        </div>
        <div class="col-9 p-5">
            <div class='d-flex'>
                <div class='col-3'><h3 >Zia Garner</h3></div>
                <div class='pl-5'><button class='btn btn-primary btn-sm'>Follow</button></div>
            </div>
            <div class='d-flex justify-content-between col-4'>
                <div class='.pr-5'><strong>152 </strong>posts</div>
                <div class='pr-5'><strong>15k </strong>followers</div>
                <div class='pr-5'><strong>231 </strong>following</div>
                
            </div>
            <div>
                <p class='m-0 mt-2'>ziagarner.org</p>
                <p class='m-0 mt-2'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum laboriosam natus ea officiis minus cum distinctio libero possimus ab, consequatur, odio, velit quibusdam earum? Vel cumque minus cupiditate atque quasi!</p>
            </div>
            <div>
                <a class='m-0 mt-2 text-primary cursor-pointer text-decoration-none' href='#'>ziagarner.org</a>
            </div>
        </div>
    </div>
    <div class="row pt-4 ">
        <div class="col-12 text-center my-3 pb-3">
            <a class='mx-3 cursor-pointer text-decoration-none text-dark text-bold' href='#'>POSTS</a>
            <a class='mx-3 cursor-pointer text-decoration-none text-dark' href="#">TAGGED</a>
        </div>
        <div class="col-4">
            <img src="https://img.freepik.com/free-vector/four-geometrical-label-templates_1045-735.jpg?w=740" class='w-100'>
        </div>
        <div class="col-4">
            <img src="https://img.freepik.com/free-psd/square-bi-fold-brochure-greeting-card-mockup-white-background_1318-303.jpg?w=740" class='w-100'>
        </div>
        <div class="col-4">
            <img src="https://img.freepik.com/free-vector/pack-four-colorful-options-infographics_1199-11.jpg?w=740" class='w-100'>
        </div>
        
        </div>
        
    </div>
</div>
@endsection
