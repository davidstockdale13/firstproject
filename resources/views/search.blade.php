<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <img src="https://i2.wp.com/davidstockdalescrapcode.co.uk/wp-content/uploads/2020/09/logo-2.gif" 
					 alt="" style="width: 100%;" class="feature-logo"/>
                </div>
                <!-- after logo -->



                <?php 
                    $user = $_GET['name'];
                ?>



                <h1 style="color: white">
                    Test 1 (user)
                </h1>

                
                <?php

                    $curl = curl_init();

                    curl_setopt_array($curl,[
                        CURLOPT_RETURNTRANSFER => 1,
                        CURLOPT_URL => 'https://api.github.com/search/users?q=' . $user,
                        CURLOPT_USERAGENT => 'Github API in CURL'
                    ]);

                    $response1 = curl_exec($curl);
                    $response_array1 = ((array) json_decode($response1, true));
                    //print_r($response_array);
                    $key = 'items';
                    $value1 = $response_array1[$key][0];
                    // print_r($value);
                    $key2 ='login';
                    $name = $value1[$key2];
                    //print_r($name);

                    $key3 ='url';
                    $url = $value1[$key3];

                    $key4 ='avatar_url';
                    $img_url = $value1[$key4];

                    $key5 ='score';
                    $score = $value1[$key5];
                    

                    ?>

                        <img src= <?php echo $img_url ?> 
                        alt="" style="width: 150px;" class="feature-logo"/>

                        <p style="color: white">
                        <?php 
                            print_r("Score: " .$score);
                            echo  nl2br ("\n");
                        ?>
                        </p>


                    <a href="
                    <?php
                        print_r($url);
                    ?>
                    " class="test" style="color: white">
                    <?php
                        print_r($name);
                    ?>

                </a>
                    <?php
                    curl_close($curl);
                ?>

               <h2 style="color: white">
                    Repositories Recently Starred By User (In order of most recent to oldest):
                </h2> 

                <p style="color: white; overflow-wrap: break-word;">
                    <?php

                    try {
                        $curl1 = curl_init();
    
                        curl_setopt_array($curl1,[
                            CURLOPT_RETURNTRANSFER => 1,
                            CURLOPT_URL => 'https://api.github.com/users/' . $user . '/starred?page=1&per_page=5',
                            CURLOPT_USERAGENT => 'Github API in CURL'
                        ]);
                        $response2 = curl_exec($curl1);

                        $response_array2 = ((array) json_decode($response2, true));

                        $num_of_items1 = count($response_array2);

                        for ($i=0; $i < $num_of_items1; $i++) { 

                            $response_item1 = $response_array2[$i];

                            $key = 'name';
                            $value2 = $response_item1[$key];

                            echo $value2;
                            if($i < ($num_of_items1-1)) {
                                echo  nl2br ("\n");
                            }
                        }

                        curl_close($curl1);
                    } catch (Exception $e) {
                        echo 'Caught exception: ',  $e->getMessage(), "\n";
                    }

                    ?>
                    </p>

                    <h2 style="color: white">
                        User's Top 5 Repositories (In order of most to least starred):
                    </h2>

                    <p style="color: white; overflow-wrap: break-word;">
                        <?php

                    try {
                        $curl2 = curl_init();
        
                            curl_setopt_array($curl2,[
                                CURLOPT_RETURNTRANSFER => 1,
                                CURLOPT_URL => 'https://api.github.com/users/' . $user . '/repos',
                                CURLOPT_USERAGENT => 'Github API in CURL'
                            ]);
                            $response = curl_exec($curl2);
    
                            $response_array3 = ((array) json_decode($response, true));

                            $sorted = array_column($response_array3, 'stargazers_count');
                            array_multisort($sorted, SORT_DESC, $response_array3, SORT_DESC);

                            $num_of_items = count($response_array3);
                            $size_limit = 5;

                            for ($i=0; $i < $num_of_items && $i < $size_limit; $i++) { 

                                $response_item = $response_array3[$i];

                                $key = 'name';
                                $value3 = $response_item[$key];
                                echo $value3;

                                $key2 = 'stargazers_count';
                                $value4 = $response_item[$key2];
                                echo " (Stars: ".$value4.")";
                                if($i < ($num_of_items-1)) {
                                    echo  nl2br ("\n");
                                }
                            }
                            curl_close($curl2);
                    } catch (Exception $e) {
                        echo 'Caught exception: ',  $e->getMessage(), "\n";
                    }
                     
                        ?>
                        </p>



                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
