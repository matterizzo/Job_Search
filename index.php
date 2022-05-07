<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Search Engine</title>

    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/bulma.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto">

    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    <script src="js/func.js"></script>
    <script type="text/javascript">
        function search(){
            location.href= 'http://localhost/dashboard/job_search/search.php?job='+ document.getElementById('dimm').value.replace(' ','-').replace(/\W+/g, '-') + '&orde=ORDER-BY-date-ASC&place='+ document.getElementById('dovm').value;
        }
    </script>
</head>
<body>

    <section class="hero is-fullheight">
        <div class="hero-body" >
            <div class="container">
                <div class="center_exp">
                    <div class="center_bottom"> Search your new Job</div>
                        <div class="column is-mobile" >
                            <div class="column is-12-desktop">
                                <div class="field has-addons">
                                    <div class="control is-expanded">
                                        <form action="#" onsubmit="search(); return false;" class="control is-grouped" id="start_form" >
                                            <input id="dimm" class="input is-medium is-expanded" name="jobs" type="text" placeholder="job" pattern=".{3,}" title="Please enter 3 or more chars" style=" font-family: Roboto" required >                                        
                                    </div>
                                    <div class="control is-expanded" >
                                            <input id="dovm" class="input is-medium is-expanded" name="place" type="text" placeholder="where" pattern=".{3,}" title="Please enter 3 or more chars" style=" font-family: Roboto" >
                                    </div>
                                    <div class="control">
                                        <button class="button is-medium is-dark" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                        </form>                                    
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </section>

    <script src="js/bulma.js"></script>
    
</body>
</html>