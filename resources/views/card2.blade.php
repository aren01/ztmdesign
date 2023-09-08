@include('app')
<!doctype html>
<html>

<!--This is a comment. Comments are not displayed in the browser-->

<!--head initializations-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<!--start of the body-->
<!--background colour-->

<body class="bg-[#F3EFE5]">

    <div class="">
        <!--put everything in a flex container and center it-->
        <div class="flex flex-col mx-auto h-screen items-center w-screen lg:w-96">
            <div class="shadow-lg">
                <!--image for the starting/top-->
                <img src="{{ asset('img/Amin_Fatin_Front.png') }}" class="w-screen lg:w-96 h-full rounded-t-md" alt="">
            </div>
            <div class="mx-auto">
                <audio controls>
                    <source src="{{ asset('mp3/bg-music-fatin-aiman.mp3') }}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
            <div class="shadow-lg">
                <!--image for the second-->
                <img src="{{ asset('img/Amin-Fatin-02.png') }}" class="w-screen lg:w-96 h-full rounded-t-md" alt="">
            </div>
            <!--shadow at background-->
            <!--2nd box-->
            <!--white background-->
            <!--paste body back here-->
            <div class="bg-[#E3DAD5] w-96 text-center shadow-lg w-screen lg:w-96 ">
                <h1 class="text-3xl text-center font-dancing-script pt-3 pb-3">Menghitung hari</h1>
                <div class="scale-75" x-data="beer()" x-init="start()">
                    <div class="text-4xl text-center flex items-center justify-center p-6">
                        <div class="w-24 mx-1 bg-[#F3EFE5] rounded-lg">
                            <div class="font-mono leading-none" x-text="days">000</div>
                            <div class="font-mono uppercase text-sm leading-none">Days</div>
                        </div>
                        <div class="w-24 mx-1 bg-[#F3EFE5] rounded-lg">
                            <div class="font-mono leading-none" x-text="hours">00</div>
                            <div class="font-mono uppercase text-sm leading-none">Hours</div>
                        </div>
                        <div class="w-24 mx-1 bg-[#F3EFE5] rounded-lg">
                            <div class="font-mono leading-none" x-text="minutes">00</div>
                            <div class="font-mono uppercase text-sm leading-none">Minutes</div>
                        </div>
                        <div class="w-24 mx-1 bg-[#F3EFE5] rounded-lg">
                            <div class="font-mono leading-none" x-text="seconds">00</div>
                            <div class="font-mono uppercase text-sm leading-none">Seconds</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-[#E3DAD5] w-96 text-center shadow-lg w-screen lg:w-96">
                <p class="text-4xl font-champagne text-centre pt-6">
                    Doa Untuk Pengantin
                </p>
                <p class="text-xs font-playfair text-centre pb-6">
                    YA ALLAH, KAU BERKATILAH MAJLIS PERKAHWINAN INI,
                    <br>
                    LIMPAHKANLAH BARAQAH & RAHMAT KEPADA DUA
                    <br>
                    MEMPELAI INI,
                    <br>
                    KURNIAKANLAH MEREKA ZURIAT YANG SOLEH DAN
                    <br>
                    SOLEHAH. KEKALKAN JODOH MEREKA HINGGA KE AKHIR
                    <br>
                    HAYAT, SIHAT WALAFIAT, DIMURAHKAN REZEKI DAN
                    <br>
                    DILANJUTKAN USIA DENGAN MENDAPAT SYAFAAT
                    <br>
                    DARIPADA JUNJUNGAN BESAR NABI MUHAMMAD SAW
                    <br>
                    <br>
                    ~AMIN YA RABBAL ALAMIN~
                </p>
            </div>

            <div class="bg-[#E3DAD5] w-96 text-center shadow-lg w-screen lg:w-96">
                <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
                <h1 class="text-3xl text-center font-poppins pb-2 font-bold">RSVP</h1>
                <a href="https://forms.gle/KfAEfqFHTqFjDCfK6" class="bg-gray-500 hover:bg-gray-400 text-white font-bold py-2 px-4 border-b-4 border-gray-700 hover:border-gray-500 rounded">
                    Click Here!
                </a>
                <div class="pt-6">
                    <hr class="w-48 h-1 mx-auto my-2 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
                </div>
            </div>
            <div class="bg-[#E3DAD5] w-screen lg:w-96 text-center shadow-lg rounded-b-md ">
                <h1 class="text-4xl text-center font-edward pt-6 pb-3">Exclusively Created By</h1>
                <img src="{{ asset('img/logo.jpg') }}" class="img-center p-3" alt="" width="200" height="200">
                <div class="p-6 pb-64">
                    <a href="http://www.wasap.my/60127814142/">
                        <i class="px-1 fa-brands fa-whatsapp fa-2xl"></i>
                    </a>
                    <a href="https://www.instagram.com/ztmdesign/">
                        <i class="px-1 fa-brands fa-instagram fa-2xl"></i>
                    </a>
                    <div class="py-1">
                        <a href="https://shopee.com.my/zt306">
                            <img src="{{ asset('img/shopeeblacktransparent.png') }}" class="img-center" alt="shopee" width="32" height="32">
                        </a>
                    </div>
                    <div class="pt-6">
                        <hr class="w-48 h-1 mx-auto my-2 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
                    </div>
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
                                <a target=" _blank" href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=NXNsYXE1bWMzZTNpbm5jdjMybW5kMG9qNG4gMzIxMTMxYTFhMjA1YTk2YWU3MjY2YTE3YWM5ZTRlM2RiOGFhOTFjZjAzZDcwMjg1OGI4OTA0ZDY3ODZlMDA2Y0Bn&tmsrc=321131a1a205a96ae7266a17ac9e4e3db8aa91cf03d702858b8904d6786e006c%40group.calendar.google.com"><img class="img-center pb-4" src="https://www.google.com/calendar/images/ext/gc_button1_en.gif"></a>

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
                                    <a href="https://goo.gl/maps/26fZ87AP35JpSWHt6">
                                        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                            Click here
                                        </button>
                                    </a>
                                </div>
                                <img width="70" height="70" src="{{ asset('img/waze.png') }}" class="img-center p-3 rounded-full" alt="">
                                <p class="pb-4">Waze : </p>
                                <div class="pb-4">
                                    <a href="https://www.waze.com/live-map/directions/badiah-hotel-jalan-laksamana-abdul-razak-bandar-seri-begawan?to=place.w.75300913.753205737.2616341&from=place.w.75300913.753205737.2616341&utm_medium=lm_share_directions&utm_campaign=default&utm_source=waze_website">
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
                                        <p class="pb-2 font-poppins">ALIFF (Abang)</p>
                                        <a href="https://wa.me/6737202261">
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
                                        <p class="pb-2 font-poppins">NIZAM (Abang)</p>
                                        <a href="https://wa.me/6738870351">
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
                                        <p class="pb-2 font-poppins">AIN (Kakak)</p>
                                        <a href="https://wa.me/6737124024">
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
                                <p class="font-poppins">Menerima Jemputan&emsp;:
                                    <br>12:00 P.M - 12:45 P.M
                                </p><br>
                                <p class="font-poppins pb-4">Majlis Bersanding&emsp;:
                                    <br>13:00 P.M
                                </p>
                            </div>
                        </div>

                    </div>
                </section>

            </div>

        </div>

    </div>

    <script>
        function beer() {

            return {
                seconds: '00',
                minutes: '00',
                hours: '00',
                days: '000',
                distance: 0,
                countdown: null,
                beerTime: new Date(Date.UTC(2023, 11, 24, 11, 0, 0)),
                now: new Date().getTime(),
                start: function() {
                    this.countdown = setInterval(() => {
                        // Calculate time
                        this.now = new Date().getTime();
                        this.distance = this.beerTime - this.now;
                        // Set Times
                        this.days = this.padNum(Math.floor(this.distance / (1000 * 60 * 60 * 24)), 3);
                        this.hours = this.padNum(Math.floor((this.distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
                        this.minutes = this.padNum(Math.floor((this.distance % (1000 * 60 * 60)) / (1000 * 60)));
                        this.seconds = this.padNum(Math.floor((this.distance % (1000 * 60)) / 1000));
                        // Stop
                        if (this.distance < 0) {
                            clearInterval(this.countdown);
                            console.log("Countdown stopped. Target time reached.");
                            this.days = '00';
                            this.hours = '00';
                            this.minutes = '00';
                            this.seconds = '00';
                        }
                    }, 100);
                },
                padNum: function(num, digits = 2) {
                    var zero = '';
                    for (var i = 0; i < digits; i++) {
                        zero += '0';
                    }
                    return (zero + num).slice(-digits);
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