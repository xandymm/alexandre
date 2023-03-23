<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,shrink-to-fit=no"
    />
    <title>Dashboard</title>

    <base href="./../">
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
      <?php include_once __DIR__.'/../template/sidebar.php' ?>

      <!-- #Main ============================ -->
      <div class="page-container">
        <!-- ### $Topbar ### -->
      <?php include_once __DIR__.'/../template/header.php' ?>
        

        <!-- ### $App Screen Content ### -->
        <main class="main-content bgc-grey-100">
          <div id="mainContent">
            
          <div class="container-fluid">
              <h4 class="c-grey-900 mT-10 mB-30">Edicao</h4>
            <div class="row masonry ">
            <div class="masonry-sizer "></div>
            <div class="masonry-item " style="position: absolute; left: 50%; top: 0px;">
                <div class="bgc-white p-20 bd">
                  <h6 class="c-grey-900">Complex Form Layout</h6>
                  <div class="mT-30">
                    <form>
                      <div class="row">
                        <div class="mb-3 col-md-6">
                          <label class="form-label" for="inputEmail4">Email</label>
                          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="mb-3 col-md-6">
                          <label class="form-label" for="inputPassword4">Password</label>
                          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="inputAddress2">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                      </div>
                      <div class="row">
                        <div class="mb-3 col-md-6">
                          <label class="form-label" for="inputCity">City</label>
                          <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="mb-3 col-md-4">
                          <label class="form-label" for="inputState">State</label>
                          <select id="inputState" class="form-control">
                            <option selected="selected">Choose...</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="mb-3 col-md-2">
                          <label class="form-label" for="inputZip">Zip</label>
                          <input type="text" class="form-control" id="inputZip">
                        </div>
                      </div>
                      <div class="row">
                        <div class="mb-3 col-md-6">
                          <label class="form-label fw-500">Birthdate</label>
                          <div class="timepicker-input input-icon mb-3">
                            <div class="input-group">
                              <div class="input-group-text bgc-white bd bdwR-0">
                                <i class="ti-calendar"></i>
                              </div>
                              <input type="text" class="form-control bdc-grey-200 start-date" placeholder="Datepicker" data-provide="datepicker">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                          <input type="checkbox" id="inputCall2" name="inputCheckboxesCall" class="peer">
                          <label for="inputCall2" class="form-label peers peer-greed js-sb ai-c">
                            <span class="peer peer-greed">Call John for Dinner</span>
                          </label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary btn-color">
                        Save
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div></div></div>
          </div>
        </main>
        <!-- ### $App Screen Footer ### -->
      <?php include_once __DIR__.'/../template/footer.php' ?>
       
      </div>
    </div>
  </body>
</html>
