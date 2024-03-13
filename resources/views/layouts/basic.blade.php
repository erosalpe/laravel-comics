<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite('resources/js/app.js')
    @yield('style')
    <style>
        #headerInfoBg{
            background-color: #0c7cec;
            a{
                color: white;
                text-decoration: none;
                font-size: 10px;
                padding-block: 5px;
            }
        }
        #headerBg{
            padding-block: 2rem;
            background-color: white;
            div{
                a{
                    img{
                        width: 77%;
                    }
                }
                div{
                    ul{
                        list-style-type: none;
                        a{
                            text-decoration: none;
                            font-weight: bold;
                            color: #1C1C1C;
                            font-size: 0.9rem;
                            &:hover{
                                border-bottom: 5px solid #0282f9;
                                padding-bottom: 4rem;
                            }
                        }
                        a.active{
                            color: #0282f9;
                            border-bottom: 3px solid #0282f9;
                            padding-bottom: 4rem;
                        }
                    
                    }
                }
            }
        }
        #footerListsBg{
        background-image: url({{ Vite::asset('resources/img/footer-bg.jpg') }});
        background-repeat: no-repeat;
        background-size: cover;
        div{
            position: relative;
            ul{
                .titleLi{
                    color: white;
                    font-weight: bold;
                    font-size: 1.2rem;
                    margin-block: 1rem;
                }

                list-style-type: none;
                a{
                    text-decoration: none;
                    color: white;
                    font-size: 0.8rem;
                    opacity: 0.7;
                }
                   
            }

            div{
                p{
                    padding-left: 32px;
                    color: white;
                    font-size: 0.7rem;
                    opacity: 0.7;
                    a{
                        text-decoration: none;
                        font-size: 0.8rem;
                    }
                }
            }

            #dcBgLogo{
                position: absolute;
                top: -50px;
                right: 0;

            }
            
        }
        }
        #footerSignUpBg{
        background-color: #303030;
        div{
            .bottoneCustom{
                padding: 0.7rem;
                background-color: #303030;
                border: 2px solid #0c7cec;
                color: white;
                font-weight: bold;
            }
        }
        }
    </style>
</head>

<body>
    <header>
        <div id="headerInfoBg">
            <div class="d-flex align-items-center justify-content-end gap-5 w-75 m-auto">
                <a href="#">DC POWER VISA</a>
                <a href="#">ADDITIONAL DC SITES</a>
            </div>
        </div>
        <div id="headerBg">
            <div class="d-flex align-items-center justify-content-between w-75 m-auto">
                <a href="/">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
                </a>
                <div>
                    <ul class="d-flex gap-4">
                        @foreach($navItems as $element)
                        <li>
                            <a href="/about" class="text-uppercase">{{$element['name']}}</a> 
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </header>
    
    <main>
        @yield('main')
    </main>

    <footer>
        <div id="footerListsBg">
            <div class="w-75 m-auto py-4 overflow-hidden">
                <div class="d-flex gap-3">
                    <div>
                        <ul>
                            <li class="titleLi text-uppercase">
                                <span>dc comics</span>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">characters</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">comics</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">movies</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">TV</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">games</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">videos</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">news</a>
                            </li>
                            <li class="titleLi text-uppercase">
                                <span>shop</span>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">shop DC</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">shop DC collectibles</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li class="titleLi text-uppercase">
                                <span>dc</span>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">terms of use</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">privacy policy (new)</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">ad choices</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">advertising</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">jobs</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">subscriptions</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">talent workshops</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">CPSC certificates</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">ratings</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">shop help</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li class="titleLi text-uppercase">
                                <span>sites</span>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">DC</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">MAD magazine</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">DC kids</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">DC universe</a>
                            </li>
                            <li class="text-capitalize">
                                <a href="#">DC visa</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <p>
                        All Site Content TM and 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved.<br><a href="#">Cookies Settings</a>.
                    </p>
                </div>

                <div id="dcBgLogo">
                    <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="dcLogo">
                </div>
            </div>
        </div>
        <div id="footerSignUpBg">
            <div class="w-75 m-auto d-flex justify-content-between align-items-center py-4">
                <button class="text-uppercase bottoneCustom">sign-up now!</button>
                <div class="d-flex gap-4 justify-content-center align-items-center">
                    <span class="text-uppercase text-primary fw-bold fs-5">follow us</span>
                    <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="facebook-icon">
                    <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twitter-icon">
                    <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="youtube-icon">
                    <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pinterest-icon">
                    <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="periscope-icon">
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
