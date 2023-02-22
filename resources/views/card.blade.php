@include('app')
<!doctype html>
<html>

<!--This is a comment. Comments are not displayed in the browser-->

<!--head initializations-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!--start of the body-->
<!--background colour-->

<body class="bg-gray-300">
    <div class="audio-container">
        <audio class="audio-container" controls autoplay src="mp3/edsheeran-perfect.mp3" id="myaudio">
            <div style="border: 1px solid black ; padding: 8px ;">
                Sorry, your browser does not support the audio element.
            </div>
        </audio>
    </div>
    <div class="">

        <!--put everything in a flex container and center it-->
        <div class="flex flex-col mx-auto h-screen items-center">
            <!--shadow at background-->
            <div class="shadow-lg">
                <!--image for the starting/top-->
                <img src="{{ asset('img/test.jpg') }}" class="max-w-sm h-auto" alt="">
            </div>

            <!--2nd box-->
            <!--white background-->
            <div class=" bg-gray-100 shadow-lg">

                <!--assalamualaikum image-->
                <!--images are put in public/img folder, replace the filename with file desired-->
                <img src="{{ asset('img/assalam.png') }}" class="max-w-sm h-auto object-contain scale-75 py-6" alt="">

                <!--typography and their classes-->
                <h1 class="text-2xl text-center font-poppins">Bapa</h1>
                <h1 class="text-2xl text-center font-poppins">&</h1>
                <h1 class="text-2xl text-center font-poppins pb-6">Ibu</h1>


                <p class="text-base text-center tracking-normal font-poppins pb-6">
                    Kami dengan rasa penuh kesyukuran
                    <br>
                    & sukacita menjemput
                    <br>
                    Tan Sri/Puan Sri/Dato'/Datin/Tuan/Puan
                    <br>
                    ke walimatul urus puteri kami
                </p>

                <h1 class="text-4xl text-center font-dancing-script pb-3">Alina</h1>
                <p class="text-base text-center font-poppins">dengan pasangannya</p>
                <h1 class="text-4xl text-center font-dancing-script pt-3">Saeed</h1>
                <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
            </div>

            <div class="bg-gray-100 grow w-96 text-center shadow-lg">
                <div class="">
                    <span class="material-symbols-outlined scale-125">
                        calendar_today
                    </span>
                    <p class="text-base font-poppins py-6">
                        Pada (hari), (tarikh), bersamaan
                        <br>
                        (tarikh dalam kalendar hijrah)
                    </p>
                </div>
                <div class="">
                    <span class="material-symbols-outlined scale-150">
                        pin_drop
                    </span>
                    <p class="text-base font-poppins py-6">
                        Lokasi
                        <br>
                        Bla Bla
                        <br>
                        Bla Bla
                        <br>
                        bla bla
                    </p>
                </div>

                <div class="">
                    <span class="material-symbols-outlined scale-125 pb-6">
                        schedule
                    </span>
                    <p class="text-base font-poppins">
                        Aturcara majlis
                    </p>
                    <p class="text-base font-poppins font-bold">
                        (masa)
                    </p>
                </div>
                <div class="">
                    <span class="material-symbols-outlined py-6">
                        warning
                    </span>
                    <p class="text-base font-poppins font-bold">
                        MENGIKUT SOP YANG DITETAPKAN
                    </p>
                    <p class="text-base font-poppins font-bold">
                        RSVP SEBELUM (tarikh)
                    </p>
                </div>
                <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
                <div class="">
                    <h1 class="text-3xl text-center font-dancing-script pb-3">Menghitung hari</h1>
                    <div class="scale-75" x-data="beer()" x-init="start()">
                        <div class="text-6xl text-center flex items-center justify-center">
                            <div class="w-24 mx-1 bg-white rounded-lg">
                                <div class="font-mono leading-none" x-text="days">00</div>
                                <div class="font-mono uppercase text-sm leading-none">Days</div>
                            </div>
                            <div class="w-24 mx-1 bg-white rounded-lg">
                                <div class="font-mono leading-none" x-text="hours">00</div>
                                <div class="font-mono uppercase text-sm leading-none">Hours</div>
                            </div>
                            <div class="w-24 mx-1 bg-white rounded-lg">
                                <div class="font-mono leading-none" x-text="minutes">00</div>
                                <div class="font-mono uppercase text-sm leading-none">Minutes</div>
                            </div>
                            <div class="w-24 mx-1 bg-white rounded-lg">
                                <div class="font-mono leading-none" x-text="seconds">00</div>
                                <div class="font-mono uppercase text-sm leading-none">Seconds</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="bg-gray-100 w-96 text-center shadow-lg">
                <div class="p-6">
                    <img src="{{ asset('img/bismillah.png') }}" class="img-center" alt="">
                </div>
                <p class="text-xs font-poppins tracking-wide">
                    "Ya Allah Yang Maha Mencipta,
                    <br>
                    Jadikanlah majlis ini
                    <br>
                    majlis yang mendapat keberkatan dan keredhaanMu,
                    <br>
                    kekalkanlah ikatan perkahwinan mereka sepanjang hayat,
                    <br>
                    tetapkanlah kasih sayang antara mereka
                    <br>
                    selagi tidak
                    melebihi kasih padaMu.
                    <br>
                    Ya Allah, satukan hati kedua mempelai ini seperti
                    <br>
                    Engkau satukan hati Adam dan Hawa, Yusuf dan Zulaikha
                    <br>
                    dan seperti Engkau satukan hati Muhammad s.a.w dan
                    <br>
                    Siti Khadijah agar kekal hingga syurgaMu"
                    <br>
                    Aamin, Ya Rabbal A'lamin.
                </p>
            </div>
            <div class="bg-gray-100 w-96 text-center shadow-lg">
                <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
                <h1 class="text-3xl text-center font-poppins pb-3 font-bold">RSVP</h1>
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSezqoesIoYIbtPnw-veXPf5ugujxS_U9CZvlqZyLtmBdZvOSg/viewform?embedded=true" width="385" height="850" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            </div>
        </div>

</body>

<script>
    var audio = document.getElementById("myaudio");
    audio.volume = 0.3;
</script>

</html>