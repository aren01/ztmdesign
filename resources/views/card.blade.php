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
                <img src="{{ asset('img/card.jpg') }}" class="max-w-sm h-auto rounded-t-md" alt="">
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
            <div class="bg-gray-100 w-96 h-96 text-center shadow-lg rounded-b-md ">
                <h1 class="text-3xl text-center font-poppins pb-3 font-bold">Contact Us</h1>
                <img src="{{ asset('img/logo.jpg') }}" class="img-center p-3" alt="" width="200" height="200">
                <div class="p-6 pb-72">
                    <a href="http://www.wasap.my/60127814142/">
                        <i class="fa-brands fa-whatsapp fa-2xl"></i>
                    </a>
                    <a href="https://www.instagram.com/ztmdesign/">
                        <i class="fa-brands fa-instagram fa-2xl"></i>
                    </a>
                    <a href="https://shopee.com.my/zt306">
                        <img src="{{ asset('img/shopeeblacktransparent.png') }}" class="img-center" alt="shopee" width="32" height="32">
                    </a>
                    <hr class="w-48 h-1 mx-auto my-2 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
                </div>
            </div>
            <div class="w-full h-screen">
                <!-- <section id="bottom-navigation" class="md:hidden block fixed inset-x-0 bottom-0 z-10 bg-white shadow"> // if shown only tablet/mobile-->
                <section id="bottom-navigation" class="block fixed inset-x-0 bottom-0 z-10 bg-white shadow">

                    <div id="tabs" class="flex justify-between">

                        <button class="myBtn w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
                            <span class="material-symbols-outlined">
                                calendar_month
                            </span>
                            <span class="tab tab-home block text-xs font-poppins">Calendar</span>
                        </button>

                        <!-- The Modal -->
                        <div id="myModal1" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content rounded-md">
                                <span class="close topright">&times;</span>
                                <img src="{{ asset('img/calendar.png') }}" class="img-center p-3" alt="">
                                <p class="pb-4 font-poppins">Set event reminder : </p>
                                <a target=" _blank" href="https://calendar.google.com/calendar/event?action=TEMPLATE&amp;tmeid=MG5lZ2I4ZW9sb3BvZHU5NDVqZnVubG1nNHEgaGFmaXptdXRhbGliMDFAbQ&amp;tmsrc=hafizmutalib01%40gmail.com"><img class="img-center pb-4" src="https://www.google.com/calendar/images/ext/gc_button1_en.gif"></a>

                            </div>
                        </div>

                        <button class="myBtn w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
                            <span class="material-symbols-outlined">
                                near_me
                            </span>
                            <span class="tab tab-kategori block text-xs font-poppins">Direction</span>
                        </button>

                        <!-- 2nd Modal -->
                        <div id="myModal2" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content rounded-md">
                                <span class="close topright">&times;</span>
                                <img width="64" height="64" src="{{ asset('img/maps.png') }}" class="img-center p-3" alt="">
                                <p class="pb-4 font-poppins">Google Maps : </p>
                                <div class="pb-4">
                                    <a href="https://goo.gl/maps/FSLw249n2hCMMDZm9">
                                        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                            Click here
                                        </button>
                                    </a>
                                </div>
                                <img width="70" height="70" src="{{ asset('img/waze.png') }}" class="img-center p-3 rounded-full" alt="">
                                <p class="pb-4">Waze : </p>
                                <div class="pb-4">
                                    <a href="https://ul.waze.com/ul?place=ChIJJY7Mqih62jER2Y3nqwN7_pc&ll=1.65713860%2C103.64212830&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location">
                                        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                            Click here
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <button class="myBtn w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
                            <span class="material-symbols-outlined">
                                explore
                            </span>
                            <span class="tab tab-explore block text-xs font-poppins">Contact</span>
                        </button>

                        <!-- 3rd Modal -->
                        <div id="myModal3" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content rounded-md">
                                <span class="close topright">&times;</span>

                                <div class="flex space-x-4 box">
                                    <div class="py-6">
                                        <p class="pb-2 font-poppins">Ali (Ayah)</p>
                                        <a href="https://www.google.com/">
                                            <button class="flex space-x-2 items-center px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md drop-shadow-md">
                                                <!-- use SVG, PNG, or an Icon here -->
                                                <img src="{{ asset('img/whatsapp.png') }}" class="" alt="" width="30" height="30">
                                                <span class="font-poppins">
                                                    WhatsApp
                                                </span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex space-x-4 box">
                                    <div class="py-6">
                                        <p class="pb-2 font-poppins">Ali (Ayah)</p>
                                        <a href="https://www.google.com/">
                                            <button class="flex space-x-2 items-center px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md drop-shadow-md">
                                                <!-- use SVG, PNG, or an Icon here -->
                                                <img src="{{ asset('img/whatsapp.png') }}" class="" alt="" width="30" height="30">
                                                <span class="font-poppins">
                                                    WhatsApp
                                                </span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex space-x-4 box">
                                    <div class="py-6">
                                        <p class="pb-2 font-poppins">Ali (Ayah)</p>
                                        <a href="https://www.google.com/">
                                            <button class="flex space-x-2 items-center px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md drop-shadow-md">
                                                <!-- use SVG, PNG, or an Icon here -->
                                                <img src="{{ asset('img/whatsapp.png') }}" class="" alt="" width="30" height="30">
                                                <span class="font-poppins">
                                                    WhatsApp
                                                </span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="myBtn w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
                            <span class="material-symbols-outlined">
                                nest_clock_farsight_analog
                            </span>
                            <span class="tab tab-whishlist block text-xs font-poppins">Programme</span>
                        </button>

                        <!-- 4th Modal -->
                        <div id="myModal4" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content rounded-md p-6">
                                <span class="close topright">&times;</span>
                                <h1 class="font-bold p-4 font-poppins">TENTATIVE</h1>
                                <p class="font-poppins">Event starts&emsp;:&emsp;12:00 P.M</p>
                                <p class="font-poppins">Arrival of bride&emsp;:&emsp;1:00 P.M</p>
                                <p class="pb-4 font-poppins">Event ends&emsp;:&emsp;4:00 P.M</p>

                            </div>

                        </div>

                    </div>
                </section>

            </div>

        </div>

    </div>






    <script>
        var audio = document.getElementById("myaudio");
        audio.volume = 0.3;
    </script>

    <script>
        function beer() {
            return {
                seconds: '00',
                minutes: '00',
                hours: '00',
                days: '00',
                distance: 0,
                countdown: null,
                beerTime: new Date('February 29, 2023 00:00:00').getTime(),
                now: new Date().getTime(),
                start: function() {
                    this.countdown = setInterval(() => {
                        // Calculate time
                        this.now = new Date().getTime();
                        this.distance = this.beerTime - this.now;
                        // Set Times
                        this.days = this.padNum(Math.floor(this.distance / (1000 * 60 * 60 * 24)));
                        this.hours = this.padNum(Math.floor((this.distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
                        this.minutes = this.padNum(Math.floor((this.distance % (1000 * 60 * 60)) / (1000 * 60)));
                        this.seconds = this.padNum(Math.floor((this.distance % (1000 * 60)) / 1000));
                        // Stop
                        if (this.distance < 0) {
                            clearInterval(this.countdown);
                            this.days = '00';
                            this.hours = '00';
                            this.minutes = '00';
                            this.seconds = '00';
                        }
                    }, 100);
                },
                padNum: function(num) {
                    var zero = '';
                    for (var i = 0; i < 2; i++) {
                        zero += '0';
                    }
                    return (zero + num).slice(-2);
                }
            }
        }
    </script>

    <script>
        // Get the modal
        var modal = document.getElementsByClassName('modal');

        // Get the button that opens the modal
        var btn = document.getElementsByClassName("myBtn");


        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close");

        // When the user clicks the button, open the modal 
        btn[0].onclick = function() {
            modal[0].style.display = "block";
        }

        btn[1].onclick = function() {
            modal[1].style.display = "block";
        }

        btn[2].onclick = function() {
            modal[2].style.display = "block";
        }

        btn[3].onclick = function() {
            modal[3].style.display = "block";
        }
        // When the user clicks on <span> (x), close the modal
        span[0].onclick = function() {
            modal[0].style.display = "none";
        }

        span[1].onclick = function() {
            modal[1].style.display = "none";
        }

        span[2].onclick = function() {
            modal[2].style.display = "none";
        }

        span[3].onclick = function() {
            modal[3].style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal[0]) {
                modal[0].style.display = "none";
            }
            if (event.target == modal[1]) {
                modal[1].style.display = "none";
            }
            if (event.target == modal[2]) {
                modal[2].style.display = "none";
            }
            if (event.target == modal[3]) {
                modal[3].style.display = "none";
            }
        }
    </script>
</body>



</html>