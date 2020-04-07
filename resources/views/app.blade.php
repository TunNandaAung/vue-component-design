<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Advanced Vue Component Design</title>
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        
    </head>
    <body class="font-sans bg-gray-100">


        <div id="app">

              
            <header class="py-8 px-8 mb-8 hidden md:block">
                <h1 class="md:flex items-center">
                    <img alt="Vue" src="/images/logo.svg">
                    <span class="text-2xl text-bold"> Vue.js <span class="sm:hidden md:inline">-</span> <br class ="md:hidden sm:inline" >Advanced Vue Component Design</span>
                </h1>
            </header>

            <div class="container pb-10">

                <main class="lg:flex">
                   
                    <nav-drawer></nav-drawer>
                    
                    <div class="primary flex-1 px-8">

                        <page-transition>
                            <router-view></router-view>
                        </page-transition>
                        
                        <portal-target name="modals"></portal-target>
      
                    </div>
      
                </main>                    
            </div>
        </div>
        
                
    </body>
    

    <script src=/js/app.js></script>
</html>
