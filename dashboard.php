<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,shrink-to-fit=no"
    />
    <title>Dashboard</title>

    <style>
      #loader {
        transition: all 0.3s ease-in-out;
        opacity: 1;
        visibility: visible;
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #fff;
        z-index: 90000;
      }

      #loader.fadeOut {
        opacity: 0;
        visibility: hidden;
      }

      .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1s infinite ease-in-out;
        animation: sk-scaleout 1s infinite ease-in-out;
      }

      @-webkit-keyframes sk-scaleout {
        0% {
          -webkit-transform: scale(0);
        }
        100% {
          -webkit-transform: scale(1);
          opacity: 0;
        }
      }

      @keyframes sk-scaleout {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        100% {
          -webkit-transform: scale(1);
          transform: scale(1);
          opacity: 0;
        }
      }
    </style>
    <script defer src="./assets/js/main.js"></script>
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>
  <body class="app">
    <div id="loader">
      <div class="spinner"></div>
    </div>

    <script>
      window.addEventListener("load", function load() {
        const loader = document.getElementById("loader");
        setTimeout(function () {
          loader.classList.add("fadeOut");
        }, 300);
      });
    </script>

    <div>
      <!-- #Left Sidebar ==================== -->
      <?php include_once __DIR__.'/template/sidebar.php' ?>

      <!-- #Main ============================ -->
      <div class="page-container">
        <!-- ### $Topbar ### -->
      <?php include_once __DIR__.'/template/header.php' ?>
        

        <!-- ### $App Screen Content ### -->
        <main class="main-content bgc-grey-100">
          <div id="mainContent">
            <div class="row gap-20 masonry pos-r">
              <div class="masonry-sizer col-md-6"></div>
              <div class="masonry-item w-100">
                <div class="row gap-20">
                  <!-- #Toatl Visits ==================== -->
                  <div class="col-md-3">
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Total Visits</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span id="sparklinedash"></span>
                          </div>
                          <div class="peer">
                            <span
                              class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500"
                              >+10%</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- #Total Page Views ==================== -->
                  <div class="col-md-3">
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Total Page Views</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span id="sparklinedash2"></span>
                          </div>
                          <div class="peer">
                            <span
                              class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500"
                              >-7%</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- #Unique Visitors ==================== -->
                  <div class="col-md-3">
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Unique Visitor</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span id="sparklinedash3"></span>
                          </div>
                          <div class="peer">
                            <span
                              class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500"
                              >~12%</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- #Bounce Rate ==================== -->
                  <div class="col-md-3">
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Bounce Rate</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span id="sparklinedash4"></span>
                          </div>
                          <div class="peer">
                            <span
                              class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500"
                              >33%</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </main>

        <!-- ### $App Screen Footer ### -->
      <?php include_once __DIR__.'/template/footer.php' ?>
       
      </div>
    </div>
  </body>
</html>
