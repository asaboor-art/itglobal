<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/fav-icon.png') }}">
    {{ $title }}
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}"> --}}
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}"> -->

    <link rel="stylesheet" href="{{ asset('dist/css/jquery.fancybox.min.css') }}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ env('APP_NAME') }}" />
    <meta property="og:description" content="Some one has share the Idea" />
    <meta property="og:url" content="{{ env('APP_URL') }}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
    <meta name="og:image" content="{{ asset('images/nav-logo.png') }}" />
    <meta name="og:image:url" content="{{ asset('images/nav-logo.png') }}" />

    @auth

        <script>
            if (!localStorage.getItem('user') && !auth) {
                $.ajax({
                    url: "/get-user",
                    method: "GET",
                    success: async function(response) {

                        var user = response.user;
                        await localStorage.setItem('user', user);
                        location.reload();
                    },
                    error: function() {
                        console.log(e)
                    }
                })
            } else {
                var auth = "{{ auth()->user() }}";
                if (auth != "null") {
                    var id = "{{ auth()->user()->id }}";
                    var user = JSON.parse(localStorage.getItem('user'));
                    if (id != user.id) {
                        $.ajax({
                            url: "/get-user",
                            method: "GET",
                            success: async function(response) {

                                var user = response.user;
                                await localStorage.setItem('user', user);
                                location.reload();
                            },
                            error: function() {
                                console.log(e)
                            }
                        })
                    }

                }

            }
        </script>
    @endauth
</head>

<body>
    <div class="main-section">
        @include('layouts.guest.header')
        @if (in_array(\Route::currentRouteName(), config('constant.banner-pages')))
            <section class="banner-sec">
                @include('layouts.guest.banner')
            </section>
        @endif
    </div>
    <div id="app">
        <router-view />
    </div>

    <footer class="footer">
        @include('layouts.guest.footer')
    </footer>
    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js "
        integrity=" sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns " crossorigin=" anonymous ">
    </script>
    <script type="text/javascript " src="{{ asset('dist/js/slick.min.js') }} "></script>
    <script src="{{ asset('dist/js/jquery.fancybox.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js "></script>

    <script>
        AOS.init();
    </script>

    <script>
        $('.innovator-slider').slick({
            dots: false,
            autoplay: true,
            arrows: true,
            speed: 800,
            slidesToShow: 5,

            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false,
                        arrows: true,
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }, {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick "
                // instead of a settings object
            ]

        });
    </script>
    <script>
        $('.testimonial-slider').slick({
            dots: false,
            autoplay: true,
            arrows: true,
            speed: 800,
            slidesToShow: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true,
                        arrows: false,
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }, {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick "
                // instead of a settings object
            ]

        });

        function subscribe() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            $.ajax({
                url: "{{ route('newsletter.subscribe') }}",
                method: "POST",
                data: {
                    email: $('#news_letter').val(),
                },
                beforeSend: function() {
                    $('.loader').removeClass('deactive');
                },
                success: function(response) {
                    $('.message').addClass('alert alert-success')
                    $('.message').text(response.message)
                },
                error: function(error) {
                    var keys = Object.keys(error.responseJSON.errors)
                    $.each(keys, function(index, key) {
                        $.each(error.responseJSON.errors[key], function(i, value) {
                            $("#error-" + key).html(
                                "<li class='text-danger' style='list-style: none'>" +
                                value + "</li>");
                        })
                    })

                },
                complete: function() {
                    $('.loader').addClass('deactive');
                    setTimeout(function() {
                        $('.errors').html('');
                        $('.message').removeClass('alert alert-success')
                        $('.message').text('');
                    }, 1000)
                }

            })

        }
        $(document).on('click', '.subs-btn', function() {
            subscribe();
        })

        $(document).ready(function() {
            var down = false;
            $('#bell').click(function(e) {
                var color = $(this).text();
                if (down) {
                    $('#box').css('display', 'none');
                    $('#box').css('height', '0px');
                    $('#box').css('opacity', '0');
                    down = false;
                } else {
                    $('#box').css('display', 'block');
                    $('#box').css('height', 'auto');
                    $('#box').css('opacity', '1');
                    down = true;
                }
            });
        });
    </script>
</body>

</html>
