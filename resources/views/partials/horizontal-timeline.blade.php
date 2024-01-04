<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page</title>

    <style>
      * {
        font-family: "Rubik", sans-serif;
        text-decoration: none !important;
      }

      .wrapper{
        height: 100vh; 
        padding-top: 9rem; 
        max-width: 1375px !important; 
        margin: auto !important
      }

      #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        padding: 0;
        color: lightgrey;
      }

      #progressbar .active {
        color: black;
      }

      #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 20%;
        float: left;
        position: relative;
        font-weight: 400;
      }

      #progressbar #step:before {
        content: attr(data-content);
      }

      #progressbar #step.finish:before {
        content: "✔";
      }

      #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        border: solid 3px #3959a5;
        color: #3959a5;
        background: white;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px;
      }

      #progressbar li:after {
        content: "";
        width: 100%;
        height: 2px;
        background: #3959a5;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1;
      }

      #progressbar li.active:before,
      #progressbar li.active:after {
        background: #182bcf;
        color: white;
      }

      #progressbar li.finish:before,
      #progressbar li.finish:after {
        background: #2f8d46;
        color: white;
      }

      @media (max-width: 650px) {
        #progressbar li:before {
          width: 35px;
          height: 35px;
          line-height: 30px;
          font-size: 14px;
          padding: 0px;
        }
        #progressbar li:after {
          height: 2px;
          background: #3959a5;
          position: absolute;
          left: 0;
          top: 18px;
          z-index: -1;
        }
        strong {
          font-size: 10px;
        }
      }
    </style>

    <!-- Link Bootstraps -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous" />
  </head>
  <body>
    <!-- Content Start -->
    <div class="content-container container wrapper">
      <div>
        <div class="row justify-content-center">
          <div class="col-9 col-md-10 text-center p-0 mb-2">
            <div class="px-0 pt-4 mt-3 mb-3">
              <ul id="progressbar">
                <!-- finish (background green), active (background blue) -->
                <li class="finish" id="step" data-content="1">
                  <strong>Pilih Pengalaman Psikologi</strong>
                </li>
                <li class="active" id="step" data-content="2"><strong>Pilih Paket</strong></li>
                <li id="step" data-content="3"><strong>Pilih Psikologi</strong></li>
                <li id="step" data-content="4"><strong>Data Diri</strong></li>
                <li id="step" data-content="5"><strong>Pembayaran</strong></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Content End -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
  </body>
</html>
