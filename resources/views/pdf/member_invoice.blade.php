<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Source Sans Pro', sans-serif;
        }

        .container {
            display: block;
            width: 100%;
            background: #fff;
            max-width: 350px;
            padding: 25px;
            margin: 50px auto 0;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        }

        .receipt_header {
            padding-bottom: 40px;
            border-bottom: 1px dashed #000;
            text-align: center;
        }

        .receipt_header h1 {
            font-size: 20px;
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .receipt_header h1 span {
            display: block;
            font-size: 25px;
        }

        .receipt_header h2 {
            font-size: 14px;
            color: #727070;
            font-weight: 300;
        }

        .receipt_header h2 span {
            display: block;
        }

        .receipt_body {
            margin-top: 25px;
        }

        table {
            width: 100%;
        }

        thead,
        tfoot {
            position: relative;
        }

        thead th:not(:last-child) {
            text-align: left;
        }

        thead th:last-child {
            text-align: right;
        }

        thead::after {
            content: '';
            width: 100%;
            border-bottom: 1px dashed #000;
            display: block;
            position: absolute;
        }

        tbody td:not(:last-child),
        tfoot td:not(:last-child) {
            text-align: left;
        }

        tbody td:last-child,
        tfoot td:last-child {
            text-align: right;
        }

        tbody tr:first-child td {
            padding-top: 15px;
        }

        tbody tr:last-child td {
            padding-bottom: 15px;
        }

        tfoot tr:first-child td {
            padding-top: 15px;
        }

        tfoot::before {
            content: '';
            width: 100%;
            border-top: 1px dashed #000;
            display: block;
            position: absolute;
        }

        tfoot tr:first-child td:first-child,
        tfoot tr:first-child td:last-child {
            font-weight: bold;
            font-size: 20px;
        }

        .date_time_con {
            display: flex;
            justify-content: center;
            column-gap: 25px;
        }

        .invoice {
            text-align: right;
        }

        .items {
            margin-top: -25px;
        }

        h3 {
            border-top: 1px dashed #000;
            padding-top: 10px;
            margin-top: 25px;
            text-align: center;
            text-transform: uppercase;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="receipt_header">
            <h1>Member of <span>Young Star Club</span></h1>
            <h2>Address: Chalkbeltoil,Nandina,Jamalpur <span>youngstarclub26.05.2016@gmail.com</span></h2>
        </div>

        <div class="receipt_body">
            @foreach ($members as $member)
                <div class="date_time_con">
                    <div class="invoice">Member ID #{{ $member->id }}</div>
                </div>

                <div class="items">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <br>
                                    <h4>Name:</h4>
                                </td>
                                <td>
                                    <br>
                                    <h4>{{ $member->name }}</h4>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Father's Name:</h4>
                                </td>
                                <td>
                                    <br>
                                    <h4>{{ $member->father_name }}</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Mother's Name:</h4>
                                </td>
                                <td>
                                    <h4>{{ $member->mother_name }}</h4>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Phone Number:</h4>
                                </td>
                                <td>
                                    <h4>{{ $member->phone_number }}</h4>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Email:</h4>
                                </td>
                                <td>
                                    <h4>{{ $member->email }}</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Date of Birth:</h4>
                                </td>
                                <td>
                                    <h4>{{ $member->date_of_birth }}</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <br>
                                    <h4>Present Address:</h4>
                                </td>
                                <td>
                                    <br>
                                    <h4>{{ $member->present_address }}</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <br>
                                    <h4>Permanent Address:</h4>
                                </td>
                                <td>
                                    <br>
                                    <h4>{{ $member->permanent_address }}</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <br>
                                    <h4>Birth Registration / Voter ID No:</h4>
                                </td>
                                <td>
                                    <h4>{{ $member->id_no }}</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Nationality:</h4>
                                </td>
                                <td>
                                    <h4>{{ $member->nationality }}</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Religion:</h4>
                                </td>
                                <td>
                                    <h4>{{ $member->religion }}</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Profession:</h4>
                                </td>
                                <td>
                                    <h4>{{ $member->profession }}</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Blood Group:</h4>
                                </td>
                                <td>
                                    <h4>{{ $member->blood_group }}</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Education:</h4>
                                </td>
                                <td>
                                    <h4>{{ $member->education }}</h4>
                                </td>
                            </tr>
                        </tbody>

                        {{-- <tfoot>
                        <tr>
                        <tr>
                            <td>
                                <mark>
                                    <h4>Amount</h4>
                                </mark>
                            </td> --}}
                        {{-- <td>
                                <mark>
                                    <h4>{{ $donation->donation_amount }} taka</h4>
                                </mark>
                            </td> --}}
                        {{-- </tr>
                        </tr>
                    </tfoot> --}}

                    </table>
                </div>
            @endforeach
        </div>


        <h3>Thank You!</h3>
        <br><br>
        <p style="text-align: right;">Developed by Asad</p>
    </div>

</body>

</html>
