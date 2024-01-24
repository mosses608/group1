<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome || User Dashboard</title>
</head>
<body>
    <center>
        <header>
            <h1>WELCOME TO IRENE'S STOCK MANAGEMENT SYSTEM (ISMS) <button class="calculate">Calculate</button></h1>
        </center>
        </header>
        <div class="navbar">
            <a href="dashboard.html">Dashboard</a>
            <a href="dashboard.html">Dashboard</a>
            <a href="#" class="stock_management_button">Stock</a><br>
            <div class="stock_mgt">
                <a href="addStock.php">Add Stock</a>
                <a href="viewStock.php">View Stock</a><br>
            </div>
            <a href="#" class="view_report">Report</a><br>
            <div class="view_rpt">
                <a href="#">View Report</a><br>
            </div>
            <a href="index.html">Sign out</a><br><br>
        </div>
        <style>
            *{
                box-sizing: border-box;
                margin: 0%;
                padding: 0%;
            }
            header .calculate{
                float: inline-end;
                border: none;
                margin-inline-end: 2%;
                background-color: blue;
                text-transform: uppercase;
                cursor: pointer;
                color: #FFFFFF;
                padding: 10px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: 20px;
            }
            header h1{
                padding: 10px;
                position: fixed;
                background-color: rgb(121, 178, 121);
                font-size: 30px;
                inline-size: 100%;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight: 400;
            }
            .navbar a{
                text-align: center;
                display: block;
                padding-block-start: 24px;
                text-decoration: none;
                font-size: 20px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight: 100;
                color: yellow;
            }
            .navbar{
                inline-size: 15%;
                background-color: #222;
            }
            .stock_management_button{
                text-decoration: none;
            }
            .stock_mgt{
                display: none;
                background-color: #ddd;
            }
            .stock_mgt a{
                display: block;
                color: #000000;
                font-weight: 400;
                font-size: 16px;
            }
            .view_rpt{
                display: none;
                background-color: #ddd;
            }
            .view_rpt a{
                color: #000000;
                font-weight: 400;
                font-size: 16px;
            }
            .active{
                display: block;
            }
        </style>
        <script>
            var drop_down_button=document.querySelector('.stock_management_button');
            var dropdown_menu=document.querySelector('.stock_mgt');
            var report_button=document.querySelector('.view_report');
            var report=document.querySelector('.view_rpt');

            //button listeners
            drop_down_button.addEventListener('click', function(){
            dropdown_menu.classList.toggle('active');
            });

            report_button.addEventListener('click', function(){
                report.classList.toggle('active');
            });

        </script>
        <center>
            <div class="container"><br>
                <p>Add Daily Stock Sales</p>
                <div class="addStock_form">
                    <form action="Stock.php" method="post" class="addStock">
                        <label for="name">Stock Name <em>*</em></label><br>
                        <select name="stock_name" id="" class="select" required>
                            <option value="choose">Choose stock name</option>
                            <option value="Mchele">Mchele</option>
                            <option value="Maharage">Maharage</option>
                        </select>
                        <!--<input type="text" name="stock_name" id="" placeholder="Enter stock sales name" required><br><br>-->
                       <div class="mcheleClass" style="display: none;">
                        <label for="mchele_type" class="labelForMcheleClass">Mchele</label><br>
                        <select name="mchele" id="" required>
                            <option value="Null"></option>
                            <option value="3500">3500</option>
                            <option value="3000">3000</option>
                            <option value="2700">2700</option>
                            <option value="2500">2500</option>
                            <option value="2400">2400</option>
                            <option value="2300">2300</option>
                            <option value="2200">2200</option>
                            <option value="2100">2100</option>
                            <option value="2000">2000</option>
                            <option value="1900">1900</option>
                        </select></div><br><br>
                        <div class="maharageClass" style="display: none;">
                        <label for="maharage_type" class="labelForMaharageClass">Maharage</label><br>
                        <select name="maharage" id=""required>
                            <option value="Null"></option>
                            <option value="3500">3500</option>
                            <option value="3000">3200</option>
                            <option value="3000">3000</option>
                            <option value="2800">2800</option>
                            <option value="2700">2700</option>
                        </select></div><br><br>
                        <label for="Month">Month <em>*</em></label><br>
                        <input type="month" name="month" id="" required><br><br>
                        <label for="Week">Week <em>*</em></label><br>
                        <input type="week" name="week" id="" required><br><br>
                        <label for="Date">Date <em>*</em></label><br>
                        <input type="date" name="date" id="" required><br><br>
                        <label for="Quantity">Quantity <em>*</em></label><br>
                        <input type="text" name="quantity" id="" placeholder="Enter sales quantity eg 100Kg or 50Litres" required><br><br>
                        <button type="submit">Submit</button>
                    </form>
                    <div class="Calculator">
                        <center>
                            <input type="number" name="" id="" class="stock_amount" placeholder="Price">
                            <input type="number" name="" id="" class="quantity" placeholder="Quantity">
                            <input type="text" name="" id="" class="result"><br><br>
                            <button class="cal">Calculate</button>
                        </center>
                        <style>
                           .Calculator{
                                position: absolute;
                                inset-block-start: 8%;
                                inset-inline-end: 0%;
                                padding: 10px;
                                inline-size: 240px;
                                display: none;
                                background-color: #222;
                            }
                            .Calculator input{
                                padding: 12px;
                                inline-size: 220px;
                            }
                            .Calculator button{
                                padding: 5px;
                                inline-size: 80px;
                                background: greenyellow;
                                font-size: 16px;
                                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                            }
                            .active{
                                display: block;
                            }
                        </style>
                        <script>
                            const calButton=document.querySelector('.calculate');
                            const container=document.querySelector('.Calculator')
                            const inputValuePrice=document.querySelector('.stock_amount');
                            const inputValueQuantity=document.querySelector('.quantity');
                            const inputValueResult=document.querySelector('.result');
                            const calculateButton=document.querySelector('.cal');

                            calculateButton.addEventListener('click', function(){
                                const quantity_input=parseFloat(inputValueQuantity.value);
                                const price_input=parseFloat(inputValuePrice.value);

                                const result=quantity_input * price_input;
                                inputValueResult.value=result;

                                alert('Total Price is : ' + inputValueResult.value);
                            });

                            calButton.addEventListener('click', function(){
                                container.classList.toggle('active');
                            });
                        </script>
                    </div>
                    <script>
                        const StockSelect=document.querySelector('.select');
                        const StockTypeMchele=document.querySelector('.mcheleClass');
                        const StockTypeMaharage=document.querySelector('.maharageClass');

                        StockSelect.addEventListener('change', function(){
                            const SelectedValue=StockSelect.value;

                            StockTypeMchele.style.display='none';
                            StockTypeMaharage.style.display='none';

                            if(SelectedValue==='Mchele'){
                                StockTypeMchele.style.display='block';
                            }else if(SelectedValue==='Maharage'){
                                StockTypeMaharage.style.display='block';
                            }else{
                                StockTypeMchele.style.display='none';
                                StockTypeMaharage.style.display='none';
                            }
                        });
                    </script>
                </div>
            </div><br><br>
            <style>
                .addStock{
                    cursor: pointer;
                    background-color: #888;
                    margin-inline-start: 10%;
                    inline-size: 100%;
                    padding: 20px;
                }
                .addStock input,select{
                    padding: 20px;
                    inline-size: 700px;
                }
                .addStock label{
                    font-size: 18px;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }
                .addStock button{
                    padding: 12px;
                    inline-size: 120px;
                    color: #FFFFFF;
                    cursor: pointer;
                    font-size: 20px;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    background-color: green;
                    border: none;
                }
                .addStock em{
                    color: red;
                }
                .container{
                    position: absolute;
                    inset-block-start: 9%;
                    inset-inline-start: 10%;
                    inline-size: 75%;
                }
                .container p{
                    margin-inline-start: 10%;
                    inline-size: 100%;
                    padding: 10px;
                    font-size: 30px;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    font-weight: 400;
                    background-color: yellow;
                }
                footer{
                    display:none;
                }
            </style>
        </center>
        <center>
            <footer>
                <p>Developed by moe solutions, &copy; 2023</p>
            </footer><br>
            <style>
                footer p{
                    font-size: 20px;
                    text-align: center;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }
                footer{
                    padding: 14px;
                    background-color: #ddd;
                }
            </style>
        </center>
</body>
</html>