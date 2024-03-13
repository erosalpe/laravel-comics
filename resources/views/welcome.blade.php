@extends('layouts.basic')

@section('title', 'Benvenuto | Home')

@section('style')
    <style lang="scss">
        #headerBg{
            padding-block: 2rem;
            background-color: white;
            div{
                img{
                    width: 5%;
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
        .comicCard{
        display: flex;
        flex-direction: column;
        gap: 1rem;
        --gap: 2rem;
        --columns: 6;
        flex-basis: calc((100% / var(--columns)) - var(--gap) + (var(--gap) / var(--columns)));
        img{
            width: 100%;
            aspect-ratio: 1 / 1;
        }
        h5{
            color: white;
            opacity: 0.6;
        }
        }
        div#backgroundBody{
            height: 400px;
            overflow: hidden;
            img{
                width: 100%;
            }
        }
        #backgroundComics{
            background-color: #1c1c1c;
        }

        #comicsContainer{
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            position: relative;
        }

        #currentSeriesBanner{
            top: -35px;
            left: -30px;
        }

        #blueIconsBg{
        background-color: #0c7cec;
        div{
            ul{
                list-style-type: none;
                li{
                    a{
                        text-decoration: none;
                        color: white;
                        font-size: 0.8rem;
                        img{
                            width: 25%;
                        }
                    }
                    &:nth-child(4){
                        a{
                            img{
                                width: 15%;
                            }
                        }
                    }
                }
            }
        }
        }
    </style>
@endsection

@section('header')
    <div id="headerBg">
        <div class="d-flex align-items-center justify-content-between w-75 m-auto">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
            <div>
                <ul class="d-flex gap-4">
                    @foreach($navItems as $element)
                    <li>
                        <a href="#" class="text-uppercase">{{$element['name']}}</a> 
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('main')
    <div id="backgroundBody">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
    </div>
    <div id="backgroundComics">
        <div id="comicsContainer" class="w-75 m-auto py-5">
        @foreach($arrayComics as $element)
            <div class="comicCard">
                <img src="{{ $element['thumb'] }}" alt="titoloComic">
                <h5>{{ $element['title'] }}</h5>
            </div>
        @endforeach
            <button class="m-auto px-5 py-2 text-light bg-primary border-0 fw-bold">Load More</button>
            <h4 class="text-uppercase px-5 py-3 text-light bg-primary fw-bold position-absolute" id="currentSeriesBanner">current series</h4>
        </div>
    </div>

    <div id="blueIconsBg">
        <div class="w-75 m-auto py-5 container-fluid">
            <ul class="d-flex m-0 justify-content-between row">
                <li class="col-2">
                    <a href="#" class="d-flex align-items-center gap-2">
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="menuIcon">
                        <span class="text-uppercase">digital comics</span>
                    </a>
                </li>
                <li class="col-2">
                    <a href="#" class="d-flex align-items-center gap-2">
                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="menuIcon">
                        <span class="text-uppercase">dc merchandise</span>
                    </a>
                </li>
                <li class="col-2">
                    <a href="#" class="d-flex align-items-center gap-2">
                        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="menuIcon">
                        <span class="text-uppercase">subscription</span>
                    </a>
                </li>
                <li class="col-2">
                    <a href="#" class="d-flex align-items-center gap-2">
                        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="menuIcon">
                        <span class="text-uppercase">comic shop locator</span>
                    </a>
                </li>
                <li class="col-2">
                    <a href="#" class="d-flex gap-2 justify-content-center align-items-center p-2">
                        <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="menuIcon">
                        <span class="text-uppercase">dc power visa</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection
