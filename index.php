<!doctype html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP Bootcamp - Exercise Title</title>
        <meta name="description" content="PHP Exercise - Level X - Template">
        <meta name="author" content="Youwe Agency B.V.">

        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
        <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet" />
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap");

            html {
                font-family: "Poppins", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            }

            .gradient-bg {
                background-image: radial-gradient( circle 610px at 5.2% 51.6%,  rgba(5,8,114,1) 0%, rgba(7,3,53,1) 97.5% );
            }
        </style>
    </head>
    <body class="leading-normal tracking-normal text-indigo-400 m-6 bg-cover bg-fixed gradient-bg">
    <div class="h-full">
        <!--Nav-->
        <div class="w-full container mx-auto">
            <div class="w-full flex items-center justify-between">
                <a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                    Cat-<span class="bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-red-400">tastic</span>
                </a>
            </div>
        </div>

        <!--Main-->
        <div class="container pt-24 md:pt-36 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
                <h1 class="my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-left">
                    The
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-red-400">
              Coolest
            </span>
                    way to learn!
                </h1>
                <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left">
                    Drop your email address below to stay up to date.
                </p>

                <form class="bg-gray-900 opacity-75 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4" method="post" action="post.php">
                    <div class="mb-4">

                        <label class="block text-blue-300 py-2 font-bold mb-2" for="email">
                            We'll handle the posting of this form.

                        </label>
                        <input class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transition transition duration-300 ease-in-out"
                               name="email"
                               id="email"
                               type="text"
                               placeholder="you@somewhere.com"
                        />
                    </div>
                    <?php
                    /**
                     * @todo 1. Only show the signup if the use didn't sign up already
                     * @todo 2. If the user did signup, show a thank you message instead
                     */
                    if(isset($_COOKIE["Valid"])) {
                        echo '<span style="color:#b3ffaa;text-align:center;"> Thank you';

                    }

                    elseif (isset($_COOKIE["NotValid"])){
                        echo '<span style="font-weight: bold; color: red;">Error</span>';
                    }
                    setcookie('Valid', '', time() - 3600);

                    ?>
                    <div class="flex items-center justify-between pt-4">
                        <button class="bg-gray-700 hover:bg-purple-400 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                                type="submit">
                            Send
                        </button>
                    </div>
                </form>
            </div>

            <!--Right Col-->
            <div class="w-full xl:w-3/5 p-12 overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="888" height="342.09037" viewBox="0 0 888 342.09037" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="m560.17352,337.74451l-141.4902-4.01703s10.64948-63.71005-23.51938-81.39458c-23.29019-12.05804-43.96497-68.39325-38.08173-106.71785.07639-.5134.15955-1.01984.24985-1.51935,2.98312-17.1642,11.50281-30.45026,27.78589-34.0579,52.65829-11.6556,90.24051-2.61558,90.24051-2.61558,0,0,8.70007.11111,21.59064,2.53224.45786.08334.91583.17345,1.38062.27067,36.49292,7.15295,103.94257,32.61478,106.86353,123.01482,4.01685,124.20117-45.01971,104.50455-45.01971,104.50455Z" fill="#3f3d56"/><path d="m496.9491,109.95447c-.23596,6.48-1.70685,12.91833-4.39169,19.04449-5.56415,12.68933-15.70041,22.38147-28.54221,27.29333-38.45654,14.72224-83.34433.11806-106.04492-15.71413-.09027.4995-1.89392,9.98611-1.97031,10.4995,10.05292,6.87534,59.24219,13.51225,68.57355,13.51225,14.16702,0,27.80692-2.35185,39.94116-7.00017,13.18884-5.05077,23.59558-15.00645,29.31235-28.0359,2.72653-6.21627,4.23199-12.75166,4.50266-19.32872-.46478-.09722-.92279-.18734-1.38062-.27067,0,0,.00003,0,.00003,0Z" fill="#6c63ff"/><path d="m507.41196,118.20499l-22.55432-56.70799s27.06519-46.39745,5.79968-51.55272c-21.2655-5.15527-43.17542,22.55432-43.17542,22.55432,0,0-40.59778-14.177-56.0636-2.57764,0,0-25.77637-36.08691-41.24219-28.99841-15.46582,7.0885,5.49524,58.17995,5.49524,58.17995,0,0-31.91602,46.85873-7.42847,73.9239,24.48755,27.06519,116.63803,48.9751,159.16904-14.82141h.00003Z" fill="#3f3d56"/><path d="m1,336.07767h887v-2H1c-.55228,0-1,.44772-1,1h0c0,.55228.44771,1,1,1Z" fill="#3f3d56"/><path d="m555.78296,303.8031c7.67871,3.41595,15.70148,6.90176,24.09912,6.56833s17.23468-5.74146,18.54321-14.04318c.67554-4.28549-.66425-8.88318.97656-12.89932,2.2077-5.40366,9.3291-7.48755,14.86487-5.63577,5.53571,1.85178,9.60248,6.62695,12.51837,11.68372,5.45538,9.46094,7.64142,21.8782,1.79205,31.1008-5.07068,7.99496-14.68799,11.60773-23.63385,14.70645-11.91602,4.12753-25.21979,8.22409-36.7663,3.15405-11.61261-5.09906-17.93823-19.83136-13.63806-31.76288" fill="#3f3d56"/><path d="m428.73624,92.7071s-13.87567-5.55027-22.89487,1.38757l10.40677,15.95702s12.4881-17.34459,12.4881-17.3446Z" fill="#6c63ff"/><path d="m355.88895,165.5544l25.67001,136.6754s-38.8519,39.54565,11.10052,38.8519c49.95242-.69379,35.38297-26.36377,35.38297-26.36377l-15.95703-118.63701" fill="#3f3d56"/><path d="m391.39893,342.09037c-13.52734,0-21.70996-3.10107-24.32861-9.2251-4.77002-11.15576,10.75732-28.16797,13.41895-30.96631l-17.26074-102.18262,1.97168-.33301,17.42969,103.18262-.35742.36426c-.17969.18311-17.93994,18.44922-13.36279,29.1499,2.35059,5.49609,10.32129,8.19385,23.73633,8.00146,18.64697-.25879,30.67188-4.1665,34.77441-11.29932,3.69434-6.42383-.2085-13.50146-.24854-13.57227l-.09424-.16748-.02637-.19141-11.10059-82.56006,1.98242-.2666,11.07617,82.37842c.65674,1.24756,4.10889,8.45801.15576,15.35693-4.52832,7.90234-16.80566,12.04834-36.4917,12.32178-.42969.00586-.85449.00879-1.27441.00879Z" fill="#2f2e41"/><path d="m421.10464,165.5544l25.67001,136.6754s-38.8519,39.54565,11.10052,38.8519c49.95242-.69379,35.38297-26.36377,35.38297-26.36377l-15.95703-118.63701" fill="#3f3d56"/><path d="m456.61426,342.09037c-13.52734,0-21.70947-3.10107-24.32812-9.2251-4.76562-11.14453,10.72607-28.13477,13.41016-30.95801l-10.31152-54.99609,1.96582-.36816,10.50293,56.01514-.36572.37207c-.17969.18311-17.93994,18.44922-13.3623,29.1499,2.35107,5.49561,10.32617,8.2041,23.73584,8.00146,18.6626-.25928,30.69092-4.17236,34.78467-11.31641,3.69238-6.44434-.21729-13.4834-.25732-13.55371l-.0957-.16846-15.98291-118.82861,1.98242-.2666,15.93262,118.45508c.65674,1.24756,4.10889,8.45801.15576,15.35693-4.52832,7.90234-16.80615,12.04834-36.49219,12.32178-.42969.00586-.85449.00879-1.27441.00879Z" fill="#2f2e41"/></svg>
            </div>

            <!--Footer-->
            <div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">
                <a class="text-gray-500 no-underline hover:no-underline" href="#">&copy; Cat-tastic 2023</a>
                - Template by
                <a class="text-gray-500 no-underline hover:no-underline" href="https://www.tailwindtoolbox.com">TailwindToolbox.com</a>
            </div>
        </div>
    </div>
    </body>
</html>