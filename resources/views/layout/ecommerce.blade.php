<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommere Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        h1 {
            background-color: rgb(143, 180, 215);
            box-shadow: 4px 4px 4px;

            text-shadow: 2px 2px white;
            box-shadow: 2px 2px 2px 2px;
        }
        .text{
            color: blue;
        }

        h4 {
            text-shadow: 2px 2px 2px rgb(216, 195, 195);

        }

        form {

            height: 50px;
            width: 50px;
        }

        .p {

            height: 570px;
            box-shadow: 8px 8px 8px;
            width: 440px;
        }


        .bt {
            border-radius: 50px;
            border-color: rgb(6, 75, 135);
            box-shadow: 2px 2px 2px 2px;
            margin-right: 20px;
            border-radius: 20px;


        }

        .form-control {
            background-color: burlywood;
            text-shadow: 2px 2px white;
            box-shadow: 2px 2px 2px 2px;

        }
    </style>
</head>

<body>

    <script>
        function getInfo() {
            fetch('http://mrghazipur.in/api/sendfilefind')
                .then(response => {
                    if (response.ok) {
                        return response.json();
                    } else {
                        throw new Error('Network response was not ok.');
                    }
                })
                .then(data => {
                    console.log(data);
                    const Div = document.getElementById('info');
                    Div.innerHTML = `
                        
                        <ul> 
                            
                            <li><img class="p" src="${data[1].url}" alt="Image" >
                            <br><br>
                            <p>Easy 10 days return and exchange. Return Policies may vary based on products and promotions. For full details on our Returns Policies, please <a href="">click here․</a></p>

                            </li>
                        </ul>
                    `;
                    console.log(data.taskname);
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        }

        // Call getInfo() function immediately when the script loads
    </script>
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1>Royal Store</h1>
                </center>
            </div>
        </div>

        <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid" style="background-color: rgb(151, 159, 209);">
                        <a class="navbar-brand" href="ecommerce">Home</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Mens</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Women</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Kids</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Beauty</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Home And Kitchen</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="ecommercesign">RegisterNow</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
            <div class="col-md-3"></div>

        </div>
        <br>
        <div class="row" style=" background-color:#E0FFFF;">
            <div class="col-md-6" id="info">
               
                <!-- <p>Easy 10 days return and exchange. Return Policies may vary based on products and promotions. For full details on our Returns Policies, please <a href="">click here․</a></p> -->

            </div>
            <div class="col-md-6">
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <h4>COTTON LINEN SHIRT SLIM CASUAL</h4>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <h6>Best Sellers 2023 | Promotional Price Only ₹899</h6>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col"><button class=" text-bg-danger " style="border-radius: 20px;  border-color: aliceblue;
                        ">Save ₹1,767</button></div>
                    <div class="col">
                        <h5 class="text-danger">Rs. 899.00</h5>
                    </div>
                    <div class="col">
                        <span class="notranslate">
                            <del>
                                <h5 class="text-secondary ">Rs. 2,666.00</h5>
                            </del>
                        </span>
                    </div>
                </div>
                <br><br>
                <div class="row">

                    <div class="col">
                        <button class="bt" type="radio">S</button>
                        <button class="bt" type="radio">M</button>
                        <button class="bt" type="radio">L</button>
                        <button class="bt" type="radio">XL</button>
                        <button class="bt" type="radio">XXL</button>

                    </div>

                </div>
                <br>
                <!-- <div class="row">
                    <div class="col-md-12">1</div>
                </div> -->
                <br><br>
                <div class="row">
                    <div class="col-md-12 text">Free worldwide shipping</div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-12 text">Free returns</div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-12 text">Carbon neutral</div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-12 text">Secure payments</div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-12">
                        <button class="form-control">
                            <h4>Add To Cart</h4>
                        </button>

                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-12">

                        <button class="form-control">
                            <h4>Buy Now</h4>
                        </button>

                    </div>
                </div>

            </div>
        </div>
        <br><br>
        <!-- footer -->


        <div class="container">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                <div class="col mb-3">
                    <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                        <svg class="bi me-2" width="40" height="32">
                            <use xlink:href="#bootstrap" />
                        </svg>
                    </a>
                    <p class="text-body-secondary">&copy; 2024</p>
                </div>

                <div class="col mb-3">

                </div>

                <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>
            </footer>
        </div>





        <script>
            getInfo();
        </script>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>