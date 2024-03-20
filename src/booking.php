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

        <div class="container px-5 bg-white py-10  mx-auto mt-30  mt-10 mb-12 lg:w-2/3 ">
            <form action="booking.php" method="post">
                <div class="space-y-12">
                    <div class=" border-gray-900/10 pb-12">
                        <h1 class="text-xl border-b text-[#1d818c] font-bold leading-7 ">Passenger Information</h1>
                        <?php
                        include 'db/db_connect.php';

                        if (isset($_POST['submit'])) {
                            $name = $_POST['fname'];
                            $card = $_POST['cardNo'];
                            $gender = $_POST['gender'];
                            $email = $_POST['email'];
                            $phone = $_POST['phoneNo'];

                            $errors = array();

                            if (empty($name) || empty($card) || empty($gender) || empty($email) || empty($phone)) {
                                array_push($errors, "All fields are required");
                            }
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                array_push($errors, "Email is not valid");
                            }
                            if (strlen($card) < 8) {
                                array_push($errors, "Card number must be at least 8 characters long");
                            }

                            // Check if email already exists
                            $sql = "SELECT * FROM passengers WHERE email = :email";
                            $stmt = $pdo->prepare($sql);
                            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                            $stmt->execute();
                            $rowCount = $stmt->rowCount();

                            if ($rowCount > 0) {
                                array_push($errors, "Email already exists");
                            }

                            if (count($errors) > 0) {
                                foreach ($errors as $error) {
                                    echo "<div class='flex justify-between text-green-200 shadow-inner p-3 bg-green-600'>
            $error
            <strong class='text-xl align-center cursor-pointer alert-del'>×</strong>
        </div>";
                                }
                            } else {
                                // Insert user data
                                $sql = "INSERT INTO passengers (fname, cardNo, Gender, email, phoneNo) VALUES (:name, :card, :gender, :email, :phone)";
                                $stmt = $pdo->prepare($sql);
                                $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                                $stmt->bindParam(':card', $card, PDO::PARAM_STR);
                                $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
                                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                                $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);

                                if ($stmt->execute()) {
                                    echo "<p>User registered successfully!</p>";
                                } else {
                                    die("Something went wrong");
                                }
                            }
                        }
                        ?>
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Passenger 1
                                </label>
                                <div class="mt-2">
                                    <input type="text" name="fname" id="city" autocomplete="address-level2" placeholder="Full Name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <!-- <div class="sm:col-span-2">
                                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Seat No
                                </label>
                                <div class="mt-2">
                                    <input type="text" name="region" id="region" autocomplete="address-level1" placeholder=" first Name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-500  focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6">
                                </div>
                            </div> -->

                            <!-- <div class="sm:col-span-2">
                                <label for="phoneNo" class="block text-sm font-medium leading-6 text-gray-900">
                                    Age</label>
                                <div class="mt-2">
                                    <input type="text" name="age" id="phoneNo" autocomplete="phoneNo" placeholder=" passenger age" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-500  focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6">
                                </div>
                            </div> -->
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