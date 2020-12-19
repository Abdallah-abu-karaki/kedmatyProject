@extends('layouts.adminSide')


@section('content')

    <!-- statistics -->
    <div class="container mt-3">
        <div class="row">
            <h2 class=" col-12 text-capitalize custom-display-medium text-center text-dark-blue">our statistics</h2>
        </div>
        <div class="row p-4 mb-3 mt-2">
            <div class="col-xl-6 col-md-12 my-1">
                <div class="card overflow-hidden">
                    <div class="card-content">
                        <div class="media align-items-stretch">
                            <div class="bg-dark-blue p-2 media-middle">
                                <i class="fa fa-user text-white" style="font-size:24px"></i>
                            </div>
                            <div class="media-body p-2">
                                <h4> Vendors </h4>
                                <span class="text-muted">Total Vendors</span>
                            </div>
                            <div class="media-right p-2 media-middle">
                                <h1 class="primary">{{$number_vendors}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 my-1">
                <div class="card overflow-hidden">
                    <div class="card-content">
                        <div class="media align-items-stretch">
                            <div class="bg_pink p-2 media-middle">
                                <i class="far fa-clipboard text-white" style="font-size:24px"></i>
                            </div>
                            <div class="media-body p-2">
                                <h4>Advertising</h4>
                                <span  class="text-muted">Total Advertising</span>
                            </div>
                            <div class="media-right p-2 media-middle">
                                <h1 class="primary">{{$number_item}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 my-1">
                <div class="card overflow-hidden">
                    <div class="card-content">
                        <div class="media align-items-stretch">
                            <div class="bg_pink p-2 media-middle">
                               <i class="fas fa-shopping-bag text-white" style="font-size:24px"></i>
                            </div>
                            <div class="media-body p-2">
                                <h4>Items</h4>
                                <span  class="text-muted">Total Items</span>
                            </div>
                            <div class="media-right p-2 media-middle">
                                <h1 class="primary">{{$number_item}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 my-1">
                <div class="card overflow-hidden">
                    <div class="card-content">
                        <div class="media align-items-stretch">
                            <div class="bg-dark-blue p-2 media-middle">
                               <i class="fas fa-user-tie text-white" style="font-size:24px"></i>
                            </div>
                            <div class="media-body p-2">
                                <h4>Admains</h4>
                                <span  class="text-muted">Total admain</span>
                            </div>
                            <div class="media-right p-2 media-middle">
                                <h1 class="primary">{{$number_admain}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. statistics -->

    <!-- edit slider -->
<!--
    <div class="container-fluid bg-light">
        <div class="container  my-5 px-5 pb-3 rounded">
            <div class="row rounded-bottom ">
                <h2 class="col-12 text-capitalize text-center mt-4 text-dark-blue custom-display-medium mb-4">edit home slider</h2>
                <p class="col-12 text-center text-muted font-italic">Choose 3 photos and write caption for each photo to edit the slider :</p>
            </div>

            <form action="/home-admin.php">
                <div class="row">
                    <div class="col-md col-sm-12 bg-white  my-1 py-4 px-5">
                        <h5 class="custom-display-small text_pink">1st photo:</h5>
                        <div class="custom-file my-3">
                            <input type="file" id="photo1" name="filename" accept="image/png, image/jpeg" class="custom-file-input overflow-hidden">
                            <label class="custom-file-label overflow-hidden" for="photo1">Choose file</label>
                        </div>
                        <br>
                        <textarea id="caption1" for="photo1" name="first-cap" placeholder="write caption" class="p-1 w-100 overflow-auto"></textarea>
                    </div>
                    <div class="col-md col-sm-12 bg-white  my-1 py-4 px-5">
                        <h5 class="custom-display-small text_pink">2nd  photo:</h5>
                        <div class="custom-file my-3">
                            <input type="file" class="custom-file-input overflow-hidden" id="photo2" name="filename" accept="image/png, image/jpeg">
                            <label class="custom-file-label overflow-hidden" for="photo2">Choose file</label>
                        </div>
                        <br>
                        <textarea id="caption2" for="photo2" name="second-cap" placeholder="write caption" class="p-1 w-100 overflow-auto"></textarea>
                    </div>
                    <div class="col-md col-sm-12 bg-white  my-1 py-4 px-5">
                        <h5 class="custom-display-small text_pink">3rd photo:</h5>
                        <div class="custom-file my-3">
                            <input type="file" class="custom-file-input overflow-hidden" id="photo3" name="filename" accept="image/png, image/jpeg">
                            <label class="custom-file-label overflow-hidden" for="photo3">Choose file</label>
                        </div>
                        <br>
                        <textarea id="caption3" for="photo3" name="third-cap" placeholder="write caption" class="p-1 w-100 overflow-auto"></textarea>
                    </div>
                </div>
                <div class="row mt-3 justify-content-end">
                    <button type="reset" class="btn btn-primary bg-dark-blue border-secondary px-3 py-2 mx-2" ><i class="fa fa-times" style="font-size:18px"></i> cancel captions </button>
                    <button type="submit" class="btn btn-primary bg_pink border-secondary px-3 py-2 mx-2" id="save all"><i class="fa fa-check" style="font-size:18px"></i> Save </button>
                </div>
            </form>

            <script>
                // Add the following code if you want the name of the file appear on select (for input type file)
                $(".custom-file-input").on("change", function() {
                    var fileName = $(this).val().split("\\").pop();
                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                });
            </script>

        </div>
    </div>-->
    <!-- /. edit slider -->


    <div class="container-fluid my-3 p-3">
        <!-- resent admins -->
        <div class="row mb-2">
            <h3 class="col-12 text-capitalize text-center mt-4 text-dark-blue custom-display-medium">recent joined admins</h3>
        </div>
        <div class="row mb-3 justify-content-center p-4">
        @foreach($latest_admain_added as $admain)
            <div class="col-md-3 p-2 my-1 px-4">
                <div class="card mb-2 h-100">
                    <img class="card-img-top" style="height: 200px;" src="{{asset('images/admainSideImage/admainPhoto/'.$admain->image)}}" alt="admin 1">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">{{$admain->name}}</h5>
                        <p class="card-text">{{$admain->email}}</p>
                    </div>
                    <a href="#" class="stretched-link"></a>
                    <div class="card-footer">
                        <small class="text-muted">joined in {{$admain->created_at}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <div class="row col-12 mt-1 justify-content-end mb-2">
            <button class="btn bg_pink text-white  px-4 py-2 custom-display-small border-secondary" id="see-more"><a style="color:#fff" href="{{route('manage_admain')}}">See more</a></button>
        </div>
    </div>
    <!-- /. resent admins -->

    <!-- resent users -->
    <div class="container-fluid bg-light pb-5">
        <div class="row">
            <h3 class="col-12 text-capitalize text-center mt-4 text-dark-blue custom-display-medium">recent joined users</h3>
        </div>
        <div class="row mb-3 justify-content-center p-4 bg-light">
        @foreach($latest_vendors_register as $vendor)
        @if($vendor->profile)
            <div class="col-md-3 my-3 px-4">
                <div class="card h-100">

                    <img style="height: 200px;" src="{{asset('images/vendorImage/profileUserImage/'.$vendor->profile->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">{{$vendor->name}}</h5>
                        <p class="card-text">
                           {{$vendor->email}}<br>
                            {{$vendor->profile->number}}<br>
                            address({{$vendor->profile->location}})
                        </p>
                    </div>
                    <a href="#" class="stretched-link"></a>
                    <div class="card-footer">
                        <small class="text-muted">joined in {{$vendor->created_at}}</small>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
</div>
</div>


@endsection
