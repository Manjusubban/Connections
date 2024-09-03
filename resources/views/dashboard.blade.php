<head>
     <meta name="csrf-token" content="{{ csrf_token() }}">
</head>




<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <form   id="search"  method="POST" style="margin-top:20px">
        <label for="gsearch">Search :</label>
        <input type="search" id="gsearch" name="gsearch">
        <input type="submit" >
    </form>


    <p id="error"> </p>
    
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                        {{-- <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file"/>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                                <h5>
                                  Name :  {{ auth()->user()->name }}
                                </h5>
                                <h6>
                                  User name {{ auth()->user()->user_name }}
                                </h6>
                                <p>
                                  DOB : {{ auth()->user()->date_of_birth }}
                                 </p>
                                 <p>
                                    Gender  : {{ auth()->user()->gender }}
                                   </p>
                        </ul>
                    </div>
                </div>



            </div>
            <div class="row">

                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                  <div class="row">
                                        <div class="col-md-6">
                                            <label> Marital Status  </label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{  auth()->user()->marital_status }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p> {{  auth()->user()->email}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Phone</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p> {{ auth()->user()->mobile_number}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Profession</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{  auth()->user()->occupation }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Monthly Salary   </label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{  auth()->user()->monthly_income }}</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label> Mother Tongue </label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{  auth()->user()->mother_tongue }}</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>  Religion </label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{  auth()->user()->religion }}</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>  Caste </label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{  auth()->user()->caste }}</p>
                                        </div>
                                    </div>


                        </div>

                    </div>
                </div>
            </div>


        </form>
    </div>
</x-app-layout>

<script src="{{ asset('js/app.js') }}">  </script>

