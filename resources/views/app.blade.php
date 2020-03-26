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

              
            <header class="py-8 px-8 mb-8">
                <h1 class="md:flex items-center">
                    <img alt="Vue" src="/images/logo.svg">
                    <span class="text-2xl text-bold"> Vue.js <span class="sm:hidden md:inline">-</span> <br class ="md:hidden sm:inline" >Advanced Vue Component Design</span>
                </h1>
            </header>

            <div class="container pb-10">

                <main class="lg:flex">
                    <aside class="w-128 pt-8">
                        <section class="mb-10 px-8">
                            <h5 class="uppercase text-xl font-bold mb-5 text-base">The Components</h5>
                            
                            <ul>
                                <li class="text-lg mt-4 leading-loose"><router-link class="text-black" to="/" exact>Controlled Component</router-link></li>
                                <li class="text-lg mt-4 leading-loose"><router-link class="text-black" to="/render-function">Render Function</router-link></li>
                                <li class="text-lg mt-4 leading-loose"><router-link class="text-black" to="/data-provider">Data Provider Component</router-link></li>
                                <li class="text-lg mt-4 leading-loose"><router-link class="text-black" to="/renderless-components">Renderless Components</router-link></li>
                                <li class="text-lg mt-4 leading-loose"><router-link class="text-black" to="/compound-components">Compound Components</router-link></li>
                                <li class="text-lg mt-4 leading-loose"><router-link class="text-black" to="/search-select-component">Search Select Components</router-link></li>
                                
                            </ul>
                        </section>

                        <section class="mb-10 px-8">
                            <h5 class="uppercase text-xl font-bold mb-5 text-base">Tailwind UI</h5>
                            
                            <ul>
                                <li class="text-lg mt-4 leading-loose"><router-link class="text-black" to="/blog-section">Blog Section</router-link></li>
                                
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
