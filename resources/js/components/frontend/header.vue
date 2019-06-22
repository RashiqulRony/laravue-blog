<template>
   <header class="header-area">
      <div class="container">
         <div class="header-wrap">
            <div class="header-top d-flex justify-content-between align-items-lg-center navbar-expand-lg">
               <div class="col menu-left">
                  <a class="" ><router-link   to = "/">Home</router-link></a>
                  <a><router-link   to = "/category">Category</router-link></a>
                  <a href="archive.html">Archive</a>
               </div>
               <div class="col-5 text-lg-center mt-2 mt-lg-0">
              <span class="logo-outer">
                <span class="logo-inner">
                  <a href="index.html"
                  ><img class="mx-auto" src="frontend/img/logo.png" alt=""
                  /></a>
                </span>
              </span>
               </div>
               <nav class="col navbar navbar-expand-lg justify-content-end">
                  <!-- Toggler/collapsibe Button -->
                  <button
                          class="navbar-toggler"
                          type="button"
                          data-toggle="collapse"
                          data-target="#collapsibleNavbar"
                  >
                     <span class="lnr lnr-menu"></span>
                  </button>

                  <!-- Navbar links -->
                  <div
                          class="collapse navbar-collapse menu-right"
                          id="collapsibleNavbar"
                  >
                     <ul class="navbar-nav justify-content-center w-100">
                        <li class="nav-item hide-lg">
                           <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item hide-lg">
                           <a class="nav-link" href="category.html">Category</a>
                        </li>
                        <!-- Dropdown -->
                        <!-- <li class="nav-item dropdown">
                          <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbardrop"
                            data-toggle="dropdown"
                          >
                            Pages
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="elements.html">Elements</a>
                          </div>
                        </li> -->
                        <li class="nav-item">
                           <a class="nav-link" href="elements.html">Elements</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="blog-single.html">Blog Detail</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link"><router-link style="color: black" to = "/contact">Contact</router-link></a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </header>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')

        }
    }
</script>
