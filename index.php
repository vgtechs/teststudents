<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>


    <title>СПИСОК СТУДЕНТОВ</title>


    <link rel="stylesheet" href="fontawesome/css/font-awesome.css" />

    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/toastr.min.css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/toastr.min.js"></script>


</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 class="text-center">Список студентов</h1>


                <table class="table table-responsive-sm">
                    <thead>

                        <tr>

                            <th>ID</th>
                            <th>Ф.И.О.</th>
                            <th>Курс</th>
                            <th>Действие</th>



                        </tr>
                    </thead>
                    <tbody id="tabmain">

                        <?php

                        $db = new SQLite3("students.db");

                        $res = $db->query("SELECT * FROM students");

                        while ($row = $res->fetchArray()) { ?>

                            <tr class="tru-<?php echo $row['id']; ?>">


                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['fio']; ?></td>
                                <td><?php echo $row['course']; ?></td>
                                <td>
                                    <button class="btn btn-danger del" data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash-o"></i></button>

                                </td>
                            </tr>
                        <?php } ?>






                    </tbody>
                </table>
            </div>
            <div class="col-md-12">


                <button class="btn btn-success" data-toggle="modal" data-target="#addmod"><i class="fa fa-plus"></i> Добавить студента</button>
            </div>
        </div>
    </div>





    <div class="modal fade" id="addmod" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">


        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title">Добавить студента</h4>

                </div>
                <div class="modal-body">
                    <label for="fio">Ф.И.О.</label><input type="text" class="form-control" id="fio">
                    <label for="course">Курс</label><input type="text" class="form-control" id="course">

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-success" id="save">Сохранить</button>

                </div>
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>

</html>