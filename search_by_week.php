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
            <h1>WELCOME TO IRENE'S STOCK MANAGEMENT SYSTEM (ISMS)</h1>
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
               require 'view_by_week.php';
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
            </style>
        </center>
        <!--<button class="filtering">Search By</button>
        <div class="filtered_actions">
            <a href="#" class="close_search">&times;</a>
            <a href="#">By Id</a>
            <a href="#">By Name</a>
            <a href="#">By Date</a>
            <a href="#">By Week</a>
            <a href="#">By Month</a>
        </div>-->
        <button class="embed_actions"><a href="viewStock.php">Back</a></button>
        <!--<div class="actions_class">
            <a href="#" class="close">&times;</a>
            <a href="#" class="edit_class">Edit</a>
            <a href="#" class="erase_class">Delete</a>
        </div>
        <div class="my_forms">
            <form action="search_by_month.php" method="get" class="by_month_form">
                <input type="month" name="month" id=""><button type="submit">Search</button>
            </form>
            <form action="" method="get" class="by_week_form">
                <input type="week" name="week" id=""><button type="submit">Search</button>
            </form>
            <form action="" method="get" class="by_month_form">
                <input type="month" name="month" id=""><button type="submit">Search</button>
            </form>
            <form action="" method="get" class="by_month_form">
                <input type="month" name="month" id=""><button type="submit">Search</button>
            </form>
            <form action="" method="get" class="by_month_form">
                <input type="month" name="month" id=""><button type="submit">Search</button>
            </form>-->
        </div>
        <style>
            /*.by_month_form{
                position: absolute;
                inset-inline-end: 40%;
                inset-block-start:40%;
            }
            .by_month_form input{
                padding:8px;
                inline-size:200px;
            }
            .by_month_form button{
                padding:8px;
                inline-size:70px;
            }
            .close{
                float:inline-end;
            }
            .filtered_actions{
                background: #000;
                inline-size:10%;
                position: absolute;
                inset-inline-end:8%;
                display:none;
                padding:10px;
                inset-block-start:8%;
            }
            .filtered_actions a{
                text-align:center;
                color:#FFFFFF;
                padding:10px;
                font-size:20px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                text-decoration:none;
                display:block;
            }
            .close_search{
                float:inline-end;
            }
            .filtering{
                font-size:18px;
                position:fixed;
                inset-inline-end: 10%;
                background: #444;
                color:yellow;
                inset-block-start:2%;
                border:none;
                padding:7px;
            }*/
            a{
                text-decoration:none;
                color:yellow;
            }
            .embed_actions{
                font-size:18px;
                position:fixed;
                inset-inline-end: 2%;
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
            .active{
                display:block;
            }
        </style>
        <!--<script>
            //actions
            var actionButton=document.querySelector('.embed_actions');
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
        </script>/-->
</body>
</html>