<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        
    </head>
    <body class="font-sans bg-gray-100">


        <div id="app">

              
            <header class="py-8 px-8 mb-8" style="background:url('/images/splash1.svg')  0 15px no-repeat;">
                <h1 class="flex items-center">
                    <img alt="Vue" src="/images/logo.svg">
                    <span class="text-2xl text-bold"> Vue.js</span>
                </h1>
            </header>

            <div class="container pb-10">

                <main class="lg:flex">
                    <aside class="w-64 pt-8">
                        <section class="mb-10 px-8">
                            <h5 class="uppercase font-bold mb-5 text-base">The Brand</h5>
                            
                            <ul>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/home/controlled-component" exact>Controlled Component</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/home/render-function">Render Function</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/home/colors">Colors</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/home/typography">Typography</router-link></li>
                            </ul>
                        </section>
                        
                        <section class="mb-10 px-8">
                            <h5 class="uppercase font-bold mb-5 text-base">Doodle</h5>
                            

                            <ul>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/home/mascot">Mascot</router-link></li>
                                <li  class="text-sm leading-loose"><router-link class="text-black" to="/home/illustrations">Illustrations</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/home/loader-and-animation">Loaders and Aninmations</router-link></li>
                                <li  class="text-sm leading-loose"><router-link class="text-black" to="/home/wallpapers">Wallpapers</router-link></li>
                            </ul>
                        </section>
                        
                        <section class="mb-10 px-8">
                            <h5 class="uppercase font-bold mb-5 text-base">Stats</h5>


                            <ul>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/home/site-stats">Site Stats</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/home/achievements">Your Achievements</router-link></li>
                            </ul>
                        </section>

                        <section class="mb-10 px-8">
                            <h5 class="uppercase font-bold mb-5 text-base">Testing</h5>


                            <ul>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/home/projects/1">Projects</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/home/conditional-visibility/">Conditional Visibility</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/home/tabs/">Tabs</router-link></li>
                                
                            </ul>
                        </section>

                    </aside>
                
                
                <div class="primary flex-1 px-8">

                    <router-view></router-view>
                    <portal-target name="modals"></portal-target>
  
                </div>
                </main>                    
            </div>
        </div>
        
                
    </body>
    

    <script src=/js/app.js></script>
</html>
