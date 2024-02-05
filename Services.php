<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Ayush Varma" />
    <meta name="generator" content="Hugo 0.112.5" />
    <title>scratches.com | Services</title>

    <link rel="icon" href="utils/image/logo-color.png" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />



    <style>
        body {
            background-image: linear-gradient(180deg,
                    var(--bs-secondary-bg),
                    var(--bs-body-bg) 100px,
                    var(--bs-body-bg));
        }

        .container {
            max-width: 960px;
        }

        .pricing-header {
            max-width: 700px;
        }

        .active3 {
            font-weight: bold;
            opacity: 1;
        }
    </style>
</head>

<body>
    <!-- includ navbar  -->

    <header>
        <?php
        include 'components/Navbar.php';


        ?>
    </header>

    <div class="container py-5">

        <div class="py-5">
            <div class="pricing-header pb-md-4 mx-auto text-center">
                <h1 class="display-4 text-5 text-body-emphasis">

                    <img class="rounded-circle" src="utils/animation/coin.gif" alt="Generic placeholder image" width="140" height="140" />
                </h1>
                <h1 class="display-4 text-5 text-body-emphasis">Pricing</h1>
                <p class="fs-5 text-body-secondary">
                    Quickly build an effective pricing table for your potential
                    customers with this Bootstrap example. It’s built with default
                    Bootstrap components and utilities with little customization.
                </p>
            </div>
        </div>

        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Free</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">
                                $0<small class="text-body-secondary fw-light">/mo</small>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>10 users included</li>
                                <li>2 GB of storage</li>
                                <li>Email support</li>
                                <li>Help center access</li>
                            </ul>
                            <a href="components/login.php" class="w-100 btn btn-lg btn-outline-info">
                                Sign up for free
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Pro</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">
                                $15<small class="text-body-secondary fw-light">/mo</small>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>20 users included</li>
                                <li>10 GB of storage</li>
                                <li>Priority email support</li>
                                <li>Help center access</li>
                            </ul>
                            <a href="components/login.php" class="w-100 btn btn-lg btn-info">
                                Get started
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-info">
                        <div class="card-header py-3 text-bg-info border-info">
                            <h4 class="my-0 fw-normal">Enterprise</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">
                                $29<small class="text-body-secondary fw-light">/mo</small>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>30 users included</li>
                                <li>15 GB of storage</li>
                                <li>Phone and email support</li>
                                <li>Help center access</li>
                            </ul>
                            <a href="components/login.php" class="w-100 btn btn-lg btn-info">
                                Contact us
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="display-6 text-center mb-4">Compare plans</h2>

            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th style="width: 34%"></th>
                            <th style="width: 22%">Free</th>
                            <th style="width: 22%">Pro</th>
                            <th style="width: 22%">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-start">Public</th>
                            <td>
                                &#x2713;
                            </td>
                            <td>
                                &#x2713;
                            </td>
                            <td>
                                &#x2713;
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Private</th>
                            <td></td>
                            <td>
                                &#x2713;
                            </td>
                            <td>
                                &#x2713;
                            </td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <th scope="row" class="text-start">Permissions</th>
                            <td>
                                &#x2713;
                            </td>
                            <td>
                                &#x2713;
                            </td>
                            <td>
                                &#x2713;
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Sharing</th>
                            <td></td>
                            <td>
                                &#x2713;
                            </td>
                            <td>
                                &#x2713;
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Unlimited members</th>
                            <td></td>
                            <td>
                                &#x2713;
                            </td>
                            <td>
                                &#x2713;
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Extra security</th>
                            <td></td>
                            <td></td>
                            <td>
                                &#x2713;
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <footer class="container">
                <!-- includ footer  -->
                <?php
                include 'components/Footer.php';
                ?>
            </footer>
        </main>

    </div>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>