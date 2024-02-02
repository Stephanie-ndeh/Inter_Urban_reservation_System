<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="bg-gray-100">
    <section class="text-gray-600 body-font">
        <?php include 'nav.html' ?>

            <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Payment Method</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Click on the below to select your payment secure payment method enter
                    you details and confirm the payment and wait patiently for verification and you will get your payment receipt in your gmail
                </p>
            </div>
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <label for="payment1" class="relative w-full cursor-pointer ">
                        <input class="peer hidden" type="radio" name="payment" id="payment1">
                        <div class="payment-content border-2 border-gray-200 px-4 py-6 rounded-lg">
                            <img class="payment-image" src="../assets/pics/logo_mastercard.svg" alt="master card">
                            <a href="#" class="payment-text">Pay with MastCard</a>

                        </div>
                        <div class="payment-checked">
                            <img src="../assets/pics/icon_check.svg" alt="">
                        </div>
                    </label>
                </div>

                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <label for="payment2" class="relative w-full cursor-pointer ">
                        <input class="peer hidden" type="radio" name="payment" id="payment2">
                        <div class="payment-content border-2 border-gray-200 px-4 py-6 rounded-lg">
                            <img class="payment-image" src="../assets/pics/logo_visa.svg" alt="master card">
                            <a href="#" class="payment-text">Pay with Visa</a>

                        </div>
                        <div class="payment-checked">
                            <img src="../assets/pics/icon_check.svg" alt="">
                        </div>
                    </label>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <label for="payment3" class="relative w-full cursor-pointer ">
                        <input class="peer hidden" type="radio" name="payment" id="payment3">
                        <div class="payment-content border-2 border-gray-200 px-4 py-6 rounded-lg">
                            <img class="payment-image" src="../assets/pics/orange4.png" alt="master card">
                            <a href="#" class="payment-text">Pay with Orange</a>
                        </div>
                        <div class="payment-checked">
                            <img src="../assets/pics/icon_check.svg" alt="">
                        </div>
                    </label>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <label for="payment4" class="relative w-full cursor-pointer ">
                        <input class="peer hidden" type="radio" name="payment" id="payment4">
                        <div class="payment-content border-2 border-gray-200 px-4 py-6 rounded-lg">
                            <img class="payment-image" src="../assets/pics/mtn.png" alt="master card">
                            <a href="#" class="payment-text">Pay with MTN</a>

                        </div>
                        <div class="payment-checked">
                            <img src="../assets/pics/icon_check.svg" alt="">
                        </div>
                    </label>
                </div>
            </div>
        </div>

        <?php include 'foot.html' ?>

    </section>

</body>

</html>