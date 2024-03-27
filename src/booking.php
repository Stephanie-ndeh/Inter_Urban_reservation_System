<?php
session_start(); 
$selectedSeats = $_SESSION['selectedSeats'];
$totalPrice = $_GET['totalPrice'];
$totalPrice = urldecode($totalPrice);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>BOOKING</title>
</head>

<body class="bg-gray-300">
    <section class="header">
        <?php include 'nav.html' ?>
    </section>
    <section class="text-gray-600 body-font relative">

        <div class="container px-5 bg-white py-10  mx-auto mt-30  mt-10 mb-12 lg:w-2/3 ">
            <form action="book.php" method="post">
                <div class="space-y-12">
                    <div class=" border-gray-900/10 pb-12">
                        <h1 class="text-xl border-b text-[#1d818c] font-bold leading-7 ">Passenger Information</h1>
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Passenger 1
                                </label>
                                <div class="mt-2">
                                    <input type="text" name="fname" id="city" autocomplete="address-level2" placeholder="Full Name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="phoneNo" class="block text-sm font-medium leading-6 text-gray-900">
                                    Price</label>
                                <div class="mt-2">
                                <input name="seat_price" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6"  id="totalPrice" value="<?php echo isset($_GET['totalPrice']) ? $_GET['totalPrice'] : ''; ?>" readonly>                                </div>
                            </div> 
                            <div class="sm:col-span-3">
                                <label for="cardNo" class="block text-sm font-medium leading-6 text-gray-900"> Id
                                    Card Number</label>
                                <div class="mt-2">
                                    <input type="text" name="cardNo" id="cardNo" autocomplete="given-name" placeholder=" ID number" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-500  focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Gender</label>
                                <div class="mt-2">
                                    <select id="gender" name="gender" autocomplete="gender-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option>Female</option>
                                        <option>male</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <h2 class="text-base mt-3 border-b font-semibold leading-7 text-gray-900">Contact Information
                        </h2>
                        <p>You will receive booking details in this mobile number and email address</p>
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                                <div class="mt-2">
                                    <input type="email" name="email" id="email" autocomplete="address-level1" placeholder=" enter your email address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-500  focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="phoneNo" class="block text-sm font-medium leading-6 text-gray-900">Phone
                                    Number</label>
                                <div class="mt-2">
                                    <input type="text" name="phoneNo" id="phoneNo" autocomplete="phoneNo" placeholder=" enter your phone number" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-500  focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>


                        <h2 class="text-base mt-4  border-b font-semibold leading-7 text-gray-900"></h2>
                        <div class="sm:col-span-2 ml-8">

                            <div class="mt-6 flex items-center justify-end gap-x-6">
                                <button type="submit" name="submit" class="rounded-md bg-[#1d818c] px-4 py-2 text-lg font-semibold text-white shadow-sm hover:bg-teal-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Proceed</button>
                            </div>
                        </div>
            </form>

        </div>
    </section>

    <section>
        <?php include 'foot.html' ?>
    </section>
    <script>
        var alert_del = document.querySelectorAll('.alert-del');

        alert_del.forEach((x) => {
            x.addEventListener('click', () => {
                x.parentElement.classList.add('hidden')
            });
        });
    </script>
</body>

</html>