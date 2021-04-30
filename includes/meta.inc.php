    <!-- DataTable CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <!-- font awesome CSS icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <!-- Datatables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

    <style>
        .fa-plus, .fa-undo-alt{
            color: black;
        }
        .fa-eye{
            color:darkblue;
        }
        .fa-edit{
            color: orange;
        }
        .fa-trash{
            color: red;
        }
        th, h1{
            text-align: left;
            color: darkblue;
        }
        .infos{
            color: darkblue;
            font-weight: bold;
        }
        .iconCRUD{
            text-align:center;
        }
        .form label{
            display: inline-block;
            width: 40%;
            margin-bottom: 10px;
        }
        form{
            width: 50%;
            margin: 0 auto;
        }
        .form input{
            width: 59%;
        }
        .btn-grp{
            width: 100%;
            display: flex;
            justify-content: space-around;
        }
        .btn{
            width: 20%;
        }
        .error{
            width: 50%;
            margin: 0 auto;
            background-color: rgba(255, 0, 0, 0.8);
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 20px;
            color: whitesmoke;
        }
    </style>