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
            <h1>WELCOME TO IRENE'S STOCK MANAGEMENT SYSTEM (ISMS)<button class="embedded_actions">Actions</button><button class="embed_actions"><a href="viewStock.php">Back</a></button></h1>
        </center>
        </header>
        <div class="navbar">
            <a href="dashboard.html">Dashboard</a>
            <a href="dashboard.html">Dashboard</a>
            <a href="#" class="stock_management_button">Stock</a><br>
            <div class="stock_mgt">
                <a href="addStock.html">Add Stock</a>
                <a href="viewStock.php">View Stock</a><br>
            </div>
            <a href="#" class="view_report">Report</a><br>
            <div class="view_rpt">
                <a href="#">View Report</a><br>
            </div>
            <a href="index.html">Sign out</a><br><br>
        </div>
        <style>
            .embedded_actions{
                font-size:18px;
                position:fixed;
                border:none;
                float: inline-end;
                cursor: pointer;
                inset-inline-end: 8%;
                background: #444;
                color:yellow;
                inset-block-start:2%;
                border:none;
                padding:7px;
            }
            *{
                box-sizing: border-box;
                margin: 0%;
                padding: 0%;
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
            <div class="container">
                <?php
               require 'view_by_date.php';
               ?>
            </div><br><br>
            <style>
                .container{
                    position: absolute;
                    inset-block-start: 9%;
                    inset-inline-start: 16%;
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
            </style>
        </center>
        <center>
            <footer>
                <p>Developed by moe solutions, &copy; 2023</p>
            </footer><br>
            <div class="actions_class">
            <a href="#" class="close">&times;</a>
            <a href="#" class="edit_class">Edit</a>
            <a href="#" class="erase_class">Delete</a><br>
        </div>
            <style>
                footer p{
                    font-size: 20px;
                    text-align: center;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }
                footer{
                    margin-block-end:1%;
                    display:none;
                    padding: 14px;
                    background-color: #ddd;
                }
                .actions_class{
                background: #000;
                inline-size:10%;
                display:none;
                position: absolute;
                inset-inline-end:0%;
                inset-block-start:8%;
            }
            .actions_class a{
                text-align:center;
                display:block;
                font-size:20px;
                color:#FFFFFF;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                text-decoration:none;
                padding:10px;
            }
            .edit_class{
                text-align:center;
            }
            .active{
                display:block;
            }
            </style>
            <script></script>
        </center>
        </div><br><br>
        <div class="update_delete">
            <form action="updateStock.php" method="post" class="updateForm">
                <label for="id">Stock Id</label><br>
                <input type="number" name="id" id="" placeholder="Enter id"><br><br>
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

            <script>
                var editButton=document.querySelector('.edit_class');
                var container=document.querySelector('.updateForm');
                const select=document.querySelector('.select');
                const mcheleClass=document.querySelector('.mcheleClass');
                const maharageClass=document.querySelector('.maharageClass');

                select.addEventListener('change', function(){
                    const selectedValue=select.value;

                    mcheleClass.style.display='none';
                    maharageClass.style.display='none';

                    if(selectedValue==='Mchele'){
                        mcheleClass.style.display='block';
                    }else if(selectedValue==='Maharage'){
                        maharageClass.style.display='block';
                    }else{
                        mcheleClass.style.display='none';
                        maharageClass.style.display='none';
                    }
                });

                editButton.addEventListener('click', function(){
                    container.classList.toggle('active');
                });
            </script>


            <form action="" method="post" class="deleteForm">
                <label for="id">Stock Id</label><br>
                <input type="number" name="id" id="" placeholder="Enter id to delete stock" required><button type="submit">Delete</button><br><br>
            </form>
        </div>
        <style>
             .erase_class{
                text-align:center;
            }
            .deleteForm{
                position: absolute;
                inset-block-start:32%;
                inset-inline-start:30%;
                cursor: pointer;
                display:none;
                background-color: #888;
                margin-inline-start: 10%;
                inline-size: 30%;
                padding: 20px;
            }
            .deleteForm input{
                padding:10px;
                inline-size:300px;
            }
            .deleteForm button{
                background: red;
                padding:10px;
                font-size:16px;
                border:none;
            }
            .deleteForm label{
                    font-size: 18px;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }
            .updateForm{
                    position: absolute;
                    inset-block-start:20%;
                    inset-inline-start:30%;
                    cursor: pointer;
                    display:none;
                    background-color: #888;
                    margin-inline-start: 10%;
                    inline-size: 30%;
                    padding: 20px;
                }
                .updateForm input,select{
                    padding: 10px;
                    inline-size: 400px;
                }
                .updateForm label{
                    font-size: 18px;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }
                .updateForm button{
                    padding: 12px;
                    inline-size: 120px;
                    color: #FFFFFF;
                    cursor: pointer;
                    font-size: 20px;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    background-color: green;
                    border: none;
                }
                .updateForm em{
                    color: red;
                }
            a{
                text-decoration:none;
                color:yellow;
            }
            .embed_actions{
                font-size:18px;
                position:fixed;
                inset-inline-end: 2%;
                float:inline-end;
                background: #444;
                color:yellow;
                inset-block-start:2%;
                border:none;
                padding:7px;
            }
            .actions_class{
                background: #000;
                inline-size:10%;
                display:none;
                position: absolute;
                inset-inline-end:5%;
                inset-block-start:8%;
            }
            .actions_class a{
                text-align:center;
                display:block;
                font-size:20px;
                color:#FFFFFF;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                text-decoration:none;
                padding:10px;
            }
            .active{
                display:block;
            }
        </style>
        <script>
            var eraseButton=document.querySelector('.erase_class');
            var deleteForm=document.querySelector('.deleteForm');
            //actions
            var actionButton=document.querySelector('.embedded_actions');
            var actionContents=document.querySelector('.actions_class');
            var closeButton=document.querySelector('.close');

            //filtering
            var filteringButton=document.querySelector('.filtering');
            var filteredContents=document.querySelector('.filtered_actions');
            var filterCloseButton=document.querySelector('.close_search');

            actionButton.addEventListener('click', function(){
                actionContents.classList.toggle('active');
                /*filteredContents.style.width='0px';
                filteredContents.style.height='0px';
                //filteredContents.style.bg='#FFFFFF';*/
            });
            closeButton.addEventListener('click', function(){
                actionContents.style.display='none';
            });

            filteringButton.addEventListener('click', function(){
                filteredContents.classList.toggle('active');
                /*actionContents.style.width='0px';
                actionContents.style.height='0px';*/
            });

            filterCloseButton.addEventListener('click', function(){
                filteredContents.style.display='none';
            });

            eraseButton.addEventListener('click', function(){
                deleteForm.classList.toggle('active');
            });
        </script>
</body>
</html>