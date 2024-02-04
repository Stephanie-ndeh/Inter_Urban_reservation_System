<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    
    <title>Document</title>
</head>

<body class="bg-gray-300">
    <section class="header">
        <?php include 'nav.html' ?>
    </section>
    <section class="text-gray-600 body-font relative">
        <div class="container shadow-md   px-5 bg-white py-10  mx-auto   mt-10 mb-12 lg:w-2/3 ">
            <form>
                <div class="space-y-12">
                    <div class=" border-gray-900/10 pb-10 ">
                        <h1 class="text-2xl  text-center font-bold   text-gray-900">Confirm Your Payment</h1>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="col-span-full">
                                <label for="street-address"
                                    class="block text-sm font-medium leading-6 text-gray-900">Card Number</label>
                                <div class="mt-2">
                                    <input type="text" name="street-address" id="street-address"
                                        autocomplete="street-address"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:-start-2/3 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="street-address"
                                    class="block text-sm font-medium leading-6 text-gray-900">Card Holder</label>
                                <div class="mt-2">
                                    <input type="text" name="street-address" id="street-address"
                                        autocomplete="street-address"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Expiry
                                    MM</label>
                                <div class="mt-2">
                                    <select id="country" name="country" autocomplete="country-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option>January</option>
                                        <option>February</option>
                                        <option>March</option>
                                    </select>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Expiry
                                    year</label>
                                <div class="mt-2">
                                    <select id="country" name="country" autocomplete="country-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option>2002</option>
                                        <option>2003</option>
                                        <option>2004</option>
                                    </select>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="postal-code"
                                    class="block text-sm font-medium leading-6 text-gray-900">CVV</label>
                                <div class="mt-2">
                                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                        </div>
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="submit"
                                class="rounded-md w-full bg-[#1d818c] mb-5  px-3 py-2 text-xl font-semibold text-white shadow-sm hover:bg-teal-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600">Submit</button>
                        </div>
                    </div>


                </div>


            </form>


        </div>
    </section>

    <section >
        <?php include 'foot.html' ?>
    </section>
</body>

</html>