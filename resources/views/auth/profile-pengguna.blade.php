@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">{{ __('Profil Pengguna') }}</h5>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                @if($user->email === 'adminuser@moe.gov.my')
                                    <img src="{{ asset('img/admin.png') }}" class="img-fluid border mb-3" alt="Profile Picture">

                                @elseif($user->email === 'samrisuhaili@moe.gov.my')
                                    <img src="{{ asset('img/team-1.png') }}" class="img-fluid border mb-3" alt="Another Profile Picture">

                                @elseif($user->email === 'yusup.harbi@moe.gov.my')
                                    <img src="{{ asset('img/team-2.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'nafisah.rosli@moe.gov.my')
                                    <img src="{{ asset('img/team-3.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'lawsionglee@moe.gov.my')
                                    <img src="{{ asset('img/team-4.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'awangku.aliudin@moe.gov.my')
                                    <img src="{{ asset('img/team-5.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'iesha.rina@moe.gov.my')
                                    <img src="{{ asset('img/team-8.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'lakhirba.zaidi@moe.gov.my')
                                    <img src="{{ asset('img/team-7.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'saufi@moe.gov.myy')
                                    <img src="{{ asset('img/team-6.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'sunita.zaidil@moe.gov.my')
                                    <img src="{{ asset('img/Sunita.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'evelyn.eba@moe.gov.my')
                                    <img src="{{ asset('img/Evelyn.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'sitinorfassehaharifin@moe.gov.my')
                                    <img src="{{ asset('img/Norfassehah.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'khadijahyahya@moe.gov.my')
                                    <img src="{{ asset('img/Khadijah.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'soonbee@moe.gov.my')
                                    <img src="{{ asset('img/Hi Soon Bee.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'erin.chawong@moe.gov.my')
                                    <img src="{{ asset('img/Erin.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'mahdi.lamit@moe.gov.my')
                                    <img src="{{ asset('img/Mahdi.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'zamilawati@moe.gov.my')
                                    <img src="{{ asset('img/Zamilawati.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'fatinizzati.wong@moe.gov.my')
                                    <img src="{{ asset('img/Fatin.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'dorothyjulai@moe.gov.my')
                                    <img src="{{ asset('img/Dorothy.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'anita.duyok@moe.gov.my')
                                    <img src="{{ asset('img/Anita.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'yieksoohuong@moe.gov.my')
                                    <img src="{{ asset('img/Yiek.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'callie.chen@moe.gov.my')
                                    <img src="{{ asset('img/Callie.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'norhayati.abdulrahim@moe.gov.my')
                                    <img src="{{ asset('img/Norhayati.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'phuaahsiew@moe.gov.my')
                                    <img src="{{ asset('img/Phua Ah Siew1.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'hamidah.mahmud@moe.gov.my')
                                    <img src="{{ asset('img/Dr Hamidah.png') }}" class="iimg-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'haliza.juki@moe.gov.my')
                                    <img src="{{ asset('img/Haliza.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'wong@moe.gov.my')
                                    <img src="{{ asset('img/Wong Lian Sin2.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'norsiah.abubakar@moe.gov.my')
                                    <img src="{{ asset('img/Norsiah.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'suzaimawati.sahari@moe.gov.my')
                                    <img src="{{ asset('img/Suzaima.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'sitihajarmahmud@moe.gov.my')
                                    <img src="{{ asset('img/siti hajar.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">
                                    
                                @elseif($user->email === 'adelina.miranjalong@moe.gov.my')
                                    <img src="{{ asset('img/Adelina.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'lailasuhana@moe.gov.my')
                                    <img src="{{ asset('img/Laila suhana.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'muhamad.farrid@moe.gov.my')
                                    <img src="{{ asset('img/Farid.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'mohdsaidi.suardi@moe.gov.my')
                                    <img src="{{ asset('img/Saidi.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'hadiah@moe.gov.my')
                                    <img src="{{ asset('img/Hadiah.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'hafizs@moe.gov.my')
                                    <img src="{{ asset('img/Hafiz.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'sharifah.aisyah@moe.gov.my')
                                    <img src="{{ asset('img/Sharipah.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'ayuk@moe.gov.my')
                                    <img src="{{ asset('img/Ayuk.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'maimunahmat@moe.gov.my')
                                    <img src="{{ asset('img/Maimunah.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'judah.undi@moe.gov.my')
                                    <img src="{{ asset('img/Judah1.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'christinabaking@moe.gov.my')
                                    <img src="{{ asset('img/Christina Baking.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'naimah.othman@moe.gov.my')
                                    <img src="{{ asset('img/Naimah.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'cordelia.tambong@gmail.com')
                                    <img src="{{ asset('img/Cordelia.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'mordiana@moe.gov.my')
                                    <img src="{{ asset('img/Mordiana.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'christina@moe.gov.my')
                                    <img src="{{ asset('img/christinamamat.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'megawati@moe.gov.my')
                                    <img src="{{ asset('img/Megawati.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'khafida.abdullah@moe.gov.my')
                                    <img src="{{ asset('img/Khafida.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'marrylin@moe.gov.my')
                                    <img src="{{ asset('img/Marylin.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'jessica.hanyawan@moe.gov.my')
                                    <img src="{{ asset('img/Jessica.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'hazura.taip@moe.gov.my')
                                    <img src="{{ asset('img/Hazura.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">
                                
                                @elseif($user->email === 'jennyyee@moe.gov.my')
                                    <img src="{{ asset('img/Jenny.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'dora@moe.gov.my')
                                    <img src="{{ asset('img/Dora.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">
                                    
                                @elseif($user->email === 'ismailhassan88@moe.gov.my')
                                    <img src="{{ asset('img/Ismail.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'mayini.mechang@moe.gov.my')
                                    <img src="{{ asset('img/Mayini.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'sebarina@moe.gov.my')
                                    <img src="{{ asset('img/Sebarina 2.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'marziah.wanseh@moe.gov.my')
                                    <img src="{{ asset('img/Marziah.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'alexandranedy@moe.gov.my')
                                    <img src="{{ asset('img/Alexandra3.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'saifulsaili@moe.gov.my')
                                    <img src="{{ asset('img/Saiful.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'noraswan@moe.gov.my')
                                    <img src="{{ asset('img/Mohamad Noraswan.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'zulfaqar.abdjalil@moe.gov.my')
                                    <img src="{{ asset('img/Zulfaqar.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'khaidzir.hamzah@moe.gov.my')
                                    <img src="{{ asset('img/mohamad khaidzir.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'ahmadshahmizam@moe.gov.my')
                                    <img src="{{ asset('img/Ahmad Shahmizam.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'afisza.nur@moe.gov.my')
                                    <img src="{{ asset('img/Nur Afisza.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'nurzalikha@moe.gov.my')
                                    <img src="{{ asset('img/Nurzalikha.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'madelina@moe.gov.my')
                                    <img src="{{ asset('img/Madelina.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">
                                
                                @elseif($user->email === 'junaidahibrahim@moe.gov.my')
                                    <img src="{{ asset('img/Junaidah1.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @elseif($user->email === 'lictsmkbintulu@moe.gov.my')
                                    <img src="{{ asset('img/Naim.png') }}" class="img-fluid border mb-3" alt="More Profile Picture">

                                @else
                                    <img src="{{ asset('img/admin.png') }}" class="img-fluid border mb-3" alt="Profile Picture">
                                @endif
                            </div>
                            <div class="col-md-8">
                                <p class="mb-2"><strong>Nama:</strong> {{ $user->name }}</p>
                                <p class="mb-2"><strong>E-Mel:</strong> {{ $user->email }}</p>
                                <p class="mb-2"><strong>Nombor Telefon:</strong> {{ $user->phone_number }}</p>
                                <p class="mb-2"><strong>Sektor:</strong> {{ $user->sektor }}</p>
                                <p class="mb-2"><strong>Jawatan:</strong> {{ $user->jawatan }}</p>
                                <hr>
                                <p class="mb-2"><strong>Daftar Pada:</strong> {{ $user->created_at->format('F j, Y') }}</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
