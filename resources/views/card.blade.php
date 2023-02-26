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
                <img src="{{ asset('img/card.jpg') }}" class="max-w-sm h-auto" alt="">
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
                    <img src="{{ asset('img/bismillah.png') }}" class="img-center" alt="" width="100" height="100">
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
                <h1 class="text-3xl text-center font-poppins pb-2 font-bold">RSVP</h1>
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSezqoesIoYIbtPnw-veXPf5ugujxS_U9CZvlqZyLtmBdZvOSg/viewform?embedded=true" width="385" height="820" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                <hr class="w-48 h-1 mx-auto my-2 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
            </div>
            <div class="bg-gray-100 w-96 h-96 text-center shadow-lg">
                <h1 class="text-3xl text-center font-poppins pb-3 font-bold">Contact Us</h1>
                <img src="{{ asset('img/logo.jpg') }}" class="img-center p-3" alt="" width="200" height="200">
                <div class="p-6">
                    <a href="http://www.wasap.my/60127814142/">
                        <i class="fa-brands fa-whatsapp fa-2xl"></i>
                    </a>
                    <a href="https://www.instagram.com/ztmdesign/">
                        <i class="fa-brands fa-instagram fa-2xl"></i>
                    </a>
                    <a href="https://shopee.com.my/zt306">
                        <img src="{{ asset('img/shopeeblacktransparent.png') }}" class="img-center pb-24" alt="shopee" width="32" height="32">
                    </a>
                    <hr class="w-48 h-1 mx-auto my-2 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
                </div>
            </div>
            <div class="w-full h-screen">
                <!-- <section id="bottom-navigation" class="md:hidden block fixed inset-x-0 bottom-0 z-10 bg-white shadow"> // if shown only tablet/mobile-->
                <section id="bottom-navigation" class="block fixed inset-x-0 bottom-0 z-10 bg-white shadow">

                    <div id="tabs" class="flex justify-between">

                        <button href="#myModal1" class="modal-button w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
                            <span class="material-symbols-outlined">
                                calendar_month
                            </span>
                            <span class="tab tab-home block text-xs">Calendar</span>
                        </button>

                        <button href="#myModal2" class="modal-button w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
                            <span class="material-symbols-outlined">
                                near_me
                            </span>
                            <span class="tab tab-kategori block text-xs">Direction</span>
                        </button>
                        <button href="#myModal3" class="modal-button w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
                            <span class="material-symbols-outlined">
                                explore
                            </span>
                            <span class="tab tab-explore block text-xs">Contact</span>
                        </button>
                        <button href="#myModal4" class="modal-button w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
                            <span class="material-symbols-outlined">
                                nest_clock_farsight_analog
                            </span>
                            <span class="tab tab-whishlist block text-xs">Programme</span>
                        </button>
                    </div>
                </section>

            </div>

        </div>
        <!-- The Modal -->
        <div id="myModal1" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close topright">&times;</span>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
            </div>

        </div>

        <!-- 2nd Modal -->
        <div id="myModal2" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close topright">&times;</span>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
            </div>

        </div>

        <!-- 3rd Modal -->
        <div id="myModal3" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close topright">&times;</span>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
            </div>

        </div>

        <!-- 4th Modal -->
        <div id="myModal4" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close topright">&times;</span>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
            </div>

        </div>
        <script>
            // Get the button that opens the modal
            var btn = document.querySelectorAll("button.modal-button");

            // All page modals
            var modals = document.querySelectorAll('.modal');

            // Get the <span> element that closes the modal
            var spans = document.getElementsByClassName("close");

            // When the user clicks the button, open the modal 
            for (var i = 0; i < btn.length; i++) {
                btn[i].onclick = function(e) {
                    e.preventDefault();
                    modal = document.querySelector(e.target.getAttribute("href"));
                    modal.style.display = "block";
                }
            }

            // When the user clicks on <span> (x), close the modal
            for (var i = 0; i < spans.length; i++) {
                spans[i].onclick = function() {
                    for (var index in modals) {
                        if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
                    }
                }
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target.classList.contains('modal')) {
                    for (var index in modals) {
                        if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
                    }
                }
            }
        </script>

        <script>
            var audio = document.getElementById("myaudio");
            audio.volume = 0.3;
        </script>

</body>



</html>