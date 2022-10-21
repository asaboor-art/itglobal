<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="icon" type="image/x-icon" href="{{ asset('images/fav-icon.png') }}">

</head>

<body>
    <header class="order-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="nv-od-main">

                        <div class="od-logo"> <a href="{{ route('home') }}" class="navbar-brand">
                                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                            </a></div>
                        <div class="for-order-nav">
                            <button class="deals-button"><span class="confirmed"><i class="fa fa-check"
                                        aria-hidden="true"></i></span>Deal Details<a
                                    href="javascript:void(0)" class="right-angle"><i class="fa fa-angle-right" aria-hidden="true"></i></a></button>
                            <button class="paid-button"><span class="pay">3</span>Confirm & Pay<a
                                    href="javascript:void(0)" class="right-angle"><i class="fa fa-angle-right" aria-hidden="true"></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="app">
        <router-view/>
    </div>
    <footer class="footer">
        @include('layouts.guest.footer')
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        $('.ok-modal-btn').click(function(e) {
            e.preventDefault();
            $('#selectmodal').css('display', 'none');

            //return false;
            $('#createdoffer').css('display', 'block');

            //alert('heree');
        });

        $(".close-btn").click(function() {
            $("#createdoffer").css('display', 'none');
            $('.modal-backdrop').css('visibility', 'hidden');


            /// $(".createdoffer").css('display', 'none');
        });
    </script>

    <script>
        $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
            $(e.target)
                .prev()
                .find("i:last-child")
                .toggleClass("fa-angle-up fa-angle-down");
        });
    </script>

    <script>
        var x, i, j, l, ll, selElmnt, a, b, c;
        /*look for any elements with the class "custom-select":*/
        x = document.getElementsByClassName("custom-select");
        l = x.length;
        for (i = 0; i < l; i++) {
            selElmnt = x[i].getElementsByTagName("select")[0];
            ll = selElmnt.length;
            /*for each element, create a new DIV that will act as the selected item:*/
            a = document.createElement("DIV");
            a.setAttribute("class", "select-selected");
            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
            x[i].appendChild(a);
            /*for each element, create a new DIV that will contain the option list:*/
            b = document.createElement("DIV");
            b.setAttribute("class", "select-items select-hide");
            for (j = 1; j < ll; j++) {
                /*for each option in the original select element,
                create a new DIV that will act as an option item:*/
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
                c.addEventListener("click", function(e) {

                    /*when an item is clicked, update the original select box,
                    and the selected item:*/
                    var y, i, k, s, h, sl, yl;
                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    sl = s.length;
                    h = this.parentNode.previousSibling;
                    for (i = 0; i < sl; i++) {
                        if (s.options[i].innerHTML == this.innerHTML) {
                            s.selectedIndex = i;
                            h.innerHTML = this.innerHTML;
                            y = this.parentNode.getElementsByClassName("same-as-selected");
                            yl = y.length;
                            for (k = 0; k < yl; k++) {
                                y[k].removeAttribute("class");
                            }
                            this.setAttribute("class", "same-as-selected");
                            break;
                        }
                    }
                    h.click();
                });
                b.appendChild(c);
            }
            x[i].appendChild(b);
            a.addEventListener("click", function(e) {
                /*when the select box is clicked, close any other select boxes,
                and open/close the current select box:*/
                e.stopPropagation();
                closeAllSelect(this);
                this.nextSibling.classList.toggle("select-hide");
                this.classList.toggle("select-arrow-active");

                var select_color = document.querySelector("#select_color .select-selected");
                if (this == select_color) {
                    select_color_fun()

                } else {
                    $(".mega-1").fadeOut().removeClass("show").addClass("none");
                }

            });
        }

        function closeAllSelect(elmnt) {

            /*a function that will close all select boxes in the document,
            except the current select box:*/
            var x, y, i, xl, yl, arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            xl = x.length;
            yl = y.length;
            for (i = 0; i < yl; i++) {
                if (elmnt == y[i]) {
                    arrNo.push(i)
                } else {
                    y[i].classList.remove("select-arrow-active");

                }
            }
            for (i = 0; i < xl; i++) {
                if (arrNo.indexOf(i)) {
                    x[i].classList.add("select-hide");
                    $(".mega-1").fadeOut().removeClass("show").addClass("none");

                }
            }
        }
        /*if the user clicks anywhere outside the select box,
        then close all select boxes:*/
        document.addEventListener("click", closeAllSelect);
    </script>

    <script>
        $('.innovator-slider').slick({
            dots: false,
            autoplay: true,
            arrows: true,
            speed: 800,
            slidesToShow: 4,

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
                    }, masterConfig.timeOut ? masterConfig.timeOut : 1000)
                }

            })

        }
        $(document).on('click', '.subs-btn', function() {
            subscribe();
        })
    </script>
</body>

</html>
