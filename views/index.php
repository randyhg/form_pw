<?php 
    include '../php/connection.php';

    $query = "SELECT * FROM nilai";
    $sqlstr = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link href="../css/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="logo.svg" type="image/icon type">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body class="font-poppins">
    
    <div class="relative min-h-screen flex items-center justify-center bg-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-no-repeat bg-cover" style="background-image: url(https://images.unsplash.com/photo-1612274048333-1bb5e987146e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1580&q=80);">
    <div class="absolute bg-black opacity-70 inset-0 z-0"></div>

    <div class="flex justify-center items-center space-x-20">
        <!-- Form -->
        <div class="inline-grid gap-20">
            <div class="w-full max-w-md px-10 py-10 bg-white rounded-xl shadow-lg z-10">
                <div class="grid gap-8 grid-cols-1">
                    <div class="">
                        <div class="flex flex-col sm:flex-row items-center">
                            <h2 class="font-semibold text-lg mr-auto">Form Nilai</h2>
                            <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                        </div>
                        <div class="mt-5">
                            <form action="../php/create.php" method="post">
                                <div class="form">
                                    <div class="md:space-y-2 mb-3">
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Nama<abbr title="required"></abbr></label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="name" id="name">
                                            <p class="text-red text-xs hidden">Please fill out this field.</p>
                                        </div>
                                    </div>
                                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">  <!-- tugas 1 - tugas 3 -->
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Tugas 1 <abbr title="required"></abbr></label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="number" name="tugas1" id="tugas1" min="0" max="100">
                                            <p class="text-red text-xs hidden">Please fill out this field.</p>
                                        </div>
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Tugas 2 <abbr title="required"></abbr></label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="number" name="tugas2" id="tugas2" min="0" max="100">
                                            <p class="text-red text-xs hidden">Please fill out this field.</p>
                                        </div>
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Tugas 3 <abbr title="required"></abbr></label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="number" name="tugas3" id="tugas3" min="0" max="100">
                                            <p class="text-red text-xs hidden">Please fill out this field.</p>
                                        </div>
                                    </div>
                                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">  <!-- UTS & UAS -->
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">UTS <abbr title="required"></abbr></label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="number" name="uts" id="uts" min="0" max="100">
                                            <p class="text-red text-xs hidden">Please fill out this field.</p>
                                        </div>
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">UAS <abbr title="required"></abbr></label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="number" name="uas" id="uas" min="0" max="100">
                                            <p class="text-red text-xs hidden">Please fill out this field.</p>
                                        </div>
                                    </div>
                                    <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                        <button class="mb-2 md:mb-0 bg-slate-800 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-slate-700">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table -->
        <div class="rounded-md overflow-x-auto" style="max-height: 415px; min-height: 415px;">
            <div class="relative shadow-md sm:rounded-lg" style="max-height: 415px; min-height: 415px;">
                <table class="w-auto text-sm text-left table-fixed">
                    <thead class=" text-white bg-slate-800 sticky top-0 text-m">
                        <tr>
                            <th class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tugas 1
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tugas 2
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tugas 3
                            </th>
                            <th scope="col" class="px-6 py-3">
                                UTS
                            </th>
                            <th scope="col" class="px-6 py-3">
                                UAS
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Grade
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-m">
                        <?php
                            $i = 1;
                            while ($result = mysqli_fetch_assoc($sqlstr)){
                            ?>
                        <tr class="bg-white border-b hover:bg-gray-100 dark:hover:bg-gray-100">
                            <td class="px-6 py-4">
                                <?php echo $i++; ?>
                            </td>
                            <td scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                <?php echo $result['name'] ?>
                            </td>
                            <td class="px-6 py-4 italic">
                                <?php echo $result['tugas1'] ?>
                            </td>
                            <td class="px-6 py-4 italic">
                                <?php echo $result['tugas2'] ?>
                            </td>
                            <td class="px-6 py-4 italic">
                                <?php echo $result['tugas3'] ?>
                            </td>
                            <td class="px-6 py-4 italic">
                                <?php echo $result['uts'] ?>
                            </td>
                            <td class="px-6 py-4 italic">
                                <?php echo $result['uas'] ?>
                            </td>
                            <td class="px-6 py-4 font-semibold">
                                <?php $total = Total($result);
                                echo $total;
                                $grade = Grade($total); ?>
                            </td>
                            <td class="px-6 py-4 font-bold"  style=" <?php echo GradeColor($grade); ?> ;">
                                <?php echo $grade; ?>
                            </td>
                        </tr>
                        <?php
                            }
                            mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>
</html>