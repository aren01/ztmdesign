<!doctype html>

<head>
    <!-- ... --->

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:wght@100;400&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/638b68b310.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48
        }
    </style>

</head>

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

<!-- ... --->