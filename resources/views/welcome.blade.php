<!doctype html>
<html>

<head>
    <title>Javascript 101</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="text"] {
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        .my_gen_number {
            list-style: none;
            margin: 0;
            padding: 5px 0;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    {{-- <h1>Before</h1> --}}
    {{-- <h1 id="myh1"> --}}
        {{-- <h1>Prepend</h1>Javascript<h1>Append</h1> --}}
    {{-- </h1> --}}
    {{-- <h1>After</h1> --}}
    {{-- <button onclick="alert('Hello World!')">Click Me!</button> --}}
    <input type="text" id="my_number" value="10">
    <button onclick="myFunction()">submit number</button>
    <br>
    <table id="myh1"></table>
    {{-- <button onclick="myFunction2()">submit my function2</button>
    <br>
    <table id="my_table">
        <thead>
            <tr>
                <td>#</td>
                <td>result</td>
            </tr>
        </thead> --}}
        <tbody id="my_tbody">

        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // console.log("Hello World - document.ready")
            // console.log($('#myh1').text())
            // console.log($('#my_number').val())
            // $('#myh1').text("Javascript 101")
            // $('#my_number').val(100)
            // setInterval(() => {
            //     $('#myh1').after(`<h1 class="my_gen_number">setInterval</h1>`)
            // }, 2000);
        });

        // function myFunction2() {
        //     // $($('#my_table').children()[1]).html("<tr><td>1</td><td>test</td></tr>")
        //     let my_number = parseInt($('#my_number').val())
        //     let my_code_tr = ``
        //     for (let i = 0; i < my_number; i++) {
        //         my_code_tr += `<tr><td>${i}</td><td>test</td></tr>`
        //     }
        //     $('#my_tbody').html(my_code_tr)
        // }

        function myFunction() {
            let my_number = parseInt($('#my_number').val());
            let result = ``;
            for (let i = 1; i <= 24; i++) {
                result += `<li class="my_gen_number">${my_number} x ${i} = ${my_number*i}</li>`;
            };
            $('#myh1').html(result);
            // console.log(document.getElementById('my_number').value);
            // console.log('Click submit number')

            // setTimeout(function() {
            //     $('.my_gen_number').each(function(index, val) {
            //         $(val).remove();
            //         //val.remove()
            //     })
            // }, 2000);

        }
        // console.log("Hello World!")
        // let myval;
        // console.log(typeof myval);
        // myval = '10';
        // myval2 = '2';
        // console.log(myval, myval2);
        // myval3 = parseInt(myval) + myval2;
        // console.log(myval3)
        // myval3 = myval - myval2;
        // console.log(myval3)
        // myval3 = myval * myval2;
        // console.log(myval3)
        // myval3 = myval / myval2;
        // console.log(myval3)
    </script>
    <script>
        // let myval4 = [1, 2, 3, 4];

        // myval4[5] = 5;
        // myval4[6] = [6, 5, 4, 5]
        // console.log(myval4)

        // for (i = 0; i < myval4.length; i++) {
        //     console.log("in for", myval4[i])
        // }
        // myval4.forEach(function(value, index) {
        //     console.log("in forEach", value, index)
        // });

        // console.log(document.getElementById('myh1').innerHTML)
    </script>
</body>

</html>
