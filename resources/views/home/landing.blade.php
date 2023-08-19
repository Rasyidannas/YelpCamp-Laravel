<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>YelpCamp</title>
</head>
<body>
    <div class="container">
        <div class=" flex flex-col lg:flex-row">
            <div class=" flex flex-col gap-16">
                <nav class="pt-2">
                    <figure class=" inline-block">
                        <a href="/">
                            <img src={{ Vite::asset('resources/assets/Logo.svg') }} alt="Yelp Camp">
                        </a>
                    </figure>
                </nav>
                <figure class=" relative w-full block lg:hidden">
                    <img src={{ Vite::asset('resources/assets/HeroImageTab.jpg') }} alt="Yelp Camp">
                </figure>
                <div class="flex flex-col gap-2">
                    <div class=" w-4/5 flex flex-col gap-[1.5rem]">
                        <h1 class=" text-neutral-900">Explore the best camps on Earth.</h1>
                        <p>YelpCamp is a curated list of the best camping spots on Earth. Unfiltered and unbiased reviews.</p>
                        <ul class="flex flex-col gap-1/2">
                            <li class=" flex gap-1/2">
                                <img src={{ Vite::asset('resources/assets/Checkmark.svg') }} alt="check list">
                                <p>Add your own camp suggestions.</p>
                            </li>
                            <li class=" flex gap-1/2">
                                <img src={{ Vite::asset('resources/assets/Checkmark.svg') }} alt="check list">
                                <p>Leave revies and experiences.</p>
                            </li>
                            <li class=" flex gap-1/2">
                                <img src={{ Vite::asset('resources/assets/Checkmark.svg') }} alt="check list">
                                <p>See locations for all camps.</p>
                            </li>
                        </ul>
                        <a href="{{ route('camps.index') }}" class="btn btn--medium bg-black text-white self-start">View Campgrounds</a>
                    </div>
                    
                    <div class="flex flex-col gap-1">
                        <p>Partenered with:</p>
                        <ul class="flex">
                            <li>
                                <img src={{ Vite::asset('resources/assets/Airbnb.svg') }} alt="Air Bnb">
                            </li>
                            <li>
                                <img src={{ Vite::asset('resources/assets/Booking.svg') }} alt="Booking">
                            </li>
                            <li>
                                <img src={{ Vite::asset('resources/assets/PlumGuide.svg') }} alt="Booking">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    
            <figure class=" relative -right-20 w-2/4 hidden lg:block">
                <img src={{ Vite::asset('resources/assets/HeroImage.jpg') }} alt="Yelp Camp" class=" h-full">
            </figure>
        </div>
    </div>
</body>
</html>