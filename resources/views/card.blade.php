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

<body class="bg-gray-300">

    <div class="">
        <!--put everything in a flex container and center it-->
        <div class="flex flex-col mx-auto h-screen items-center w-screen lg:w-96">
            <div class="shadow-lg">
                <!--image for the starting/top-->
                <img src="{{ asset('img/Amin-Fatin-01.png') }}" class="w-screen lg:w-96 h-full rounded-t-md" alt="">
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

/*
            <!--2nd box-->
            <!--white background-->
            <div class=" bg-gray-100 shadow-lg w-screen lg:w-96">
                <img src="{{ asset('img/Bismillh.png') }}" class="py-2 mx-auto scale-75 w-[600px] h-[105px]" alt="">
                <!--assalamualaikum image-->
                <p class="text-base text-center tracking-normal font-poppins">Assalamualaikum W.B.T. & Salam Sejahtera
                    <br>
                    Dengan segala hormatnya, kami
                <p class="italic text-center">With much gratitude and respect, we</p>
                </p>
                <!--images are put in public/img folder, replace the filename with file desired-->


                <!--typography and their classes-->
                <h1 class="text-3xl text-center font-playfair pt-10">Datuk Ahmad Daniel
                    <br>Bin Arief
                </h1>
                <h1 class="text-3xl text-center font-playfair p-6">&</h1>
                <h1 class="text-3xl text-center font-playfair pb-10">Datin Hannah Fatimah
                    <br>Binti Ibrahim
                </h1>


                <p class="text-base text-center tracking-normal font-poppins">

                <p class="text-base text-center tracking-normal font-poppins">
                    menjemput
                <p class="italic text-base text-center tracking-normal font-poppins">cordially invite</p>
                <p class="text-base text-center tracking-normal font-poppins">Tan Sri/Puan Sri/Dato'Sri/Datin Sri
                    <br>
                    Dato/Datin/Tuan/Puan/Cik
                    <br>
                    ke majlis perkahwinan anakanda kami
                </p>
                <p class="italic text-center pb-6">to the wedding ceremony of our daughter</p>
                </p>

                <h1 class="text-5xl text-center font-champagne pt-5 pb-5">Noor Alina
                    <br>Binti Ahmad Daniel
                </h1>
                <p class="text-4xl text-center font-champagne">dengan pasangannya</p>
                <h1 class="text-5xl text-center font-champagne pt-5 pb-5">Syed Saeed
                    <br>Bin Syed Ameer
                </h1>
                <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
            </div>

            <div class="bg-gray-100 grow w-96 text-center shadow-lg w-screen lg:w-96">
                <div class="">
                    <span class="material-symbols-outlined scale-125 py-6">
                        calendar_today
                    </span>
                    <p class="text-base font-poppins font-bold pb-6">
                        TARIKH / DATE
                    </p>
                    <p class="text-base font-poppins">
                        Pada Sabtu, 23 November 2023,
                        <br>
                        bersamaan
                        <br>
                        11 Jamadilawal 1445
                    </p>
                </div>
                <div class="">
                    <span class="material-symbols-outlined scale-150 py-6">
                        pin_drop
                    </span>
                    <p class="text-base font-poppins">
                    <p class="text-base font-poppins font-bold"> TEMPAT / VENUE</p>
                    <br>
                    The St. Regis Kuala Lumpur
                    <br>
                    6, Jalan Stesen Sentral 2
                    <br>
                    Kuala Lumpur Sentral, 50470 Kuala Lumpur
                    </p>
                </div>

                <div class="">
                    <span class="material-symbols-outlined scale-125 py-6">
                        schedule
                    </span>
                    <p class="text-base font-poppins font-bold pb-6">
                        ATURCARA MAJLIS / PROGRAMME
                    </p>
                    <p class="text-base font-poppins">
                        10:00 AM - 4:00 PM
                    </p>
                    <p class="text-base font-poppins">
                        Ketibaan Pengantin : 12:00 PM
                    </p>
                </div>
                <div class="">
                    <span class="material-symbols-outlined py-6">
                        warning
                    </span>
                    <p class="text-base font-poppins font-bold pb-6">
                        KOD PAKAIAN :
                    </p>
                    <p class="text-base font-poppins font-bold pb-6">
                        Formal / Batik / Baju Kebangsaan
                    </p>
                </div>
*/
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
            <div class="bg-gray-100 w-96 text-center shadow-lg w-screen lg:w-96">
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

            <div class="bg-gray-100 w-96 text-center shadow-lg w-screen lg:w-96">
                <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
                <h1 class="text-3xl text-center font-poppins pb-2 font-bold">RSVP</h1>
                <a href="https://forms.gle/BjbMLoeET2KR4vXZ8" class="bg-gray-500 hover:bg-gray-400 text-white font-bold py-2 px-4 border-b-4 border-gray-700 hover:border-gray-500 rounded">
                    Click Here!
                </a>
                <div class="pt-6">
                    <hr class="w-48 h-1 mx-auto my-2 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
                </div>
            </div>
            <div class="bg-gray-100 w-screen lg:w-96 text-center shadow-lg rounded-b-md ">
                <h1 class="text-4xl text-center font-edward pt-6 pb-3">Exclusively Created By</h1>
                <img src="{{ asset('img/logo.jpg') }}" class="img-center p-3" alt="" width="200" height="200">
                <div class="p-6 pb-64">
                    <a href="http://www.wasap.my/60127814142/">
                        <i class="p-2 fa-brands fa-whatsapp fa-2xl"></i>
                    </a>
                    <a href="https://www.instagram.com/ztmdesign/">
                        <i class="p-2 fa-brands fa-instagram fa-2xl"></i>
                    </a>
                    <div class="p-3">
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
                                <a target=" _blank" href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=M29hbDVvY3JjNWxnbjV1azQxNjNkdjRqN2YgaGFmaXptdXRhbGliMDFAbQ&tmsrc=hafizmutalib01%40gmail.com"><img class="img-center pb-4" src="https://www.google.com/calendar/images/ext/gc_button1_en.gif"></a>

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
                                        <p class="pb-2 font-poppins">NORIZAN</p>
                                        <a href="wa.me/6738877240">
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
                                        <p class="pb-2 font-poppins">FAUZAN</p>
       					<a href="wa.me/6737304335">
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
                                        <p class="pb-2 font-poppins">NABIL NASHRULLAH</p>
                                        <a href="wa.me/6738612813">
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
                beerTime: new Date('December 24, 2023 12:00:00').getTime(),
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
    <script>
        // player
        var music = document.querySelector('.music-element')
        var playBtn = document.querySelector('.play')
        var seekbar = document.querySelector('.seekbar')
        var currentTime = document.querySelector('.current-time')
        var duration = document.querySelector('.duration')

        function handlePlay() {
            if (music.paused) {
                music.play();
                playBtn.className = 'pause'
                playBtn.innerHTML = '<i class="material-icons">pause</i>'
            } else {
                music.pause();
                playBtn.className = 'play'
                playBtn.innerHTML = '<i class="material-icons">play_arrow</i>'
            }
            music.addEventListener('ended', function() {
                playBtn.className = 'play'
                playBtn.innerHTML = '<i class="material-icons">play_arrow</i>'
                music.currentTime = 0
            });
        }

        music.onloadeddata = function() {
            seekbar.max = music.duration
            var ds = parseInt(music.duration % 60)
            var dm = parseInt((music.duration / 60) % 60)
            duration.innerHTML = dm + ':' + ds
        }
        music.ontimeupdate = function() {
            seekbar.value = music.currentTime
        }
        handleSeekBar = function() {
            music.currentTime = seekbar.value
        }
        music.addEventListener('timeupdate', function() {
            var cs = parseInt(music.currentTime % 60)
            var cm = parseInt((music.currentTime / 60) % 60)
            currentTime.innerHTML = cm + ':' + cs
        }, false)


        // like
        var favIcon = document.querySelector('.favorite')

        function handleFavorite() {
            favIcon.classList.toggle('active');
        }


        // repeat
        var repIcon = document.querySelector('.repeat')

        function handleRepeat() {
            if (music.loop == true) {
                music.loop = false
                repIcon.classList.toggle('active')
            } else {
                music.loop = true
                repIcon.classList.toggle('active')
            }
        }

        // volume
        var volIcon = document.querySelector('.volume')
        var volBox = document.querySelector('.volume-box')
        var volumeRange = document.querySelector('.volume-range')
        var volumeDown = document.querySelector('.volume-down')
        var volumeUp = document.querySelector('.volume-up')

        function handleVolume() {
            volIcon.classList.toggle('active')
            volBox.classList.toggle('active')
        }

        volumeDown.addEventListener('click', handleVolumeDown);
        volumeUp.addEventListener('click', handleVolumeUp);

        function handleVolumeDown() {
            volumeRange.value = Number(volumeRange.value) - 20
            music.volume = volumeRange.value / 100
        }

        function handleVolumeUp() {
            volumeRange.value = Number(volumeRange.value) + 20
            music.volume = volumeRange.value / 100
        }
    </script>
</body>



</html>