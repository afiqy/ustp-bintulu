<x-admin-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-admin_navbars.sidebar activePage="user-profile"></x-admin_navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-admin_navbars.navs.auth titlePage='User Profile'></x-admin_navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset('img/admin/bruce-mars.jpg') }}" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{ $user->name }}
                            </h5>
                            <p class="mb-0 font-weight-normal text-sm">
                                {{ $user->designation }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-3">{{ __('Data Profil') }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        @if (session('status'))
                        <div class="row">
                            <div class="alert alert-success alert-dismissible text-white" role="alert">
                                <span class="text-sm">{{ Session::get('status') }}</span>
                                <button type="button" class="btn-close text-lg py-3 opacity-10"
                                    data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif
                        @if (Session::has('demo'))
                                <div class="row">
                                    <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                        <span class="text-sm">{{ Session::get('demo') }}</span>
                                        <button type="button" class="btn-close text-lg py-3 opacity-10"
                                            data-bs-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                        @endif
                        <form method='POST' action='{{ route('user-profile') }}'>
                            @csrf
                            <div class="row">
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control border border-2 p-2" value='{{ old('email', $user->email) }}'>
                                    @error('email')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                                </div>
                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control border border-2 p-2" value='{{ old('username', $user->username) }}'>
                                    @error('username')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">First Name</label>
                                    <input type="text" name="first_name" class="form-control border border-2 p-2" value='{{ old('first_name', $user->first_name) }}'>
                                    @error('first_name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" name="last_name" class="form-control border border-2 p-2" value='{{ old('last_name', $user->last_name) }}'>
                                    @error('last_name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                               
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Phone</label>
                                    <input type="number" name="phone" class="form-control border border-2 p-2" value='{{ old('phone', $user->phone) }}'>
                                    @error('phone')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                               
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Designation</label>
                                    <input type="number" name="designation" class="form-control border border-2 p-2" value='{{ old('designation', $user->designation) }}'>
                                    @error('designation')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                               
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Access Level</label>
                                    <input type="number" name="access_level" class="form-control border border-2 p-2" value='{{ old('access_level', $user->access_level) }}'>
                                    @error('access_level')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                               
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Sector</label>
                                    <input type="number" name="sector" class="form-control border border-2 p-2" value='{{ old('sector', $user->sector) }}'>
                                    @error('sector')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                            </div>
                            <button type="submit" class="btn bg-gradient-dark">Update</button>
                        </form>

                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-primary successModal" data-toggle="modal" data-target="#successModal" style="border:none; color:transparent !important; background-color: transparent !important; display:none;"> 
            </button>
        </div>
        <x-admin_footers.auth></x-admin_footers.auth>
        {{-- Failed Payment Modal --}}
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white font-weight-bold" id="successModalLongTitle">Payment Failed!</h5>
                        <button type="button" class="close btn-transparent-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if(Session::has('success'))
                            {{ Session::get('success') }}
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary text-white" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-admin-plugins></x-admin-plugins>

    @section('page-scripts')
        <script>
            $(document).ready(function(){
                @if(Session::has('success'))
                    $('.successModal').click().trigger();
                @endif
            });
        </script>
    @endsection
</x-admin-layout>
