<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <!-- Button trigger modal -->
    

    <!-- Modal -->
    <div class="modal fade" id="studentViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="id_view"></h4>
                    <h4 class="fname_view"></h4>
                    <h4 class="lname_view"></h4>
                    <h4 class="email_view"></h4>
                    <h4 class="class_view"></h4>
                    <h4 class="section_view"></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add student</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="error-message">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">First Name</label>
                            <input type="text" class="form-control fname">
                        </div>
                        <div class="col-md-6">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control lname">
                        </div>

                        <div class="col-md-6">
                            <label for="">email</label>
                            <input type="text" class="form-control email">
                        </div>
                        <div class="col-md-6">
                            <label for="">Class</label>
                            <input type="text" class="form-control class">
                        </div>
                        <div class="col-md-6">
                            <label for="">Section</label>
                            <input type="text" class="form-control section">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary student_add_ajax">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Student </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" id="edit_id">
                        <div class="col-md-12">
                            <div class="error-message-update">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">First Name</label>
                            <input type="text" id="edit_fname" class="form-control ">
                        </div>
                        <div class="col-md-6">
                            <label for="">Last Name</label>
                            <input type="text" id="edit_lname" class="form-control ">
                        </div>

                        <div class="col-md-6">
                            <label for="">email</label>
                            <input type="text" id="edit_email" class="form-control ">
                        </div>
                        <div class="col-md-6">
                            <label for="">Class</label>
                            <input type="text" id="edit_class" class="form-control ">
                        </div>
                        <div class="col-md-6">
                            <label for="">Section</label>
                            <input type="text" id="edit_section" class="form-control ">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary student_update_ajax">update</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="studentDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add student</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" id="id_delete">
                        <div class="col-md-12">
                            <h1>Are you sure to delete ?</h1>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary student_delete_ajax">Delete</button>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h4>ajax jquery crud tutorial
                        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add
                        </button>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="message-show"></div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">email</th>
                                <th scope="col">class</th>
                                <th scope="col">section</th>
                                <th scope="col">option</th>
                            </tr>
                        </thead>
                        <tbody class="studentdata">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            getdata();

            $('.student_delete_ajax').click(function (e) {
                e.preventDefault;


                var student_id = $('#id_delete').val();

                //confirm and delete
                $.ajax({
                    type: "post",
                    url: "database/code.php",
                    data: {
                        'checking_delete': true,
                        'student_id': student_id,
                    },
                    success: function(response) {

                        $('#studentDelete').modal('hide');
                        $('.message-show').append('\
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                            <strong>Hey!</strong> '+response+'\
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                <span aria-hidden="true">&times;</span>\
                            </button>\
                        </div>\
                    ');
                    $('.studentdata').html("");
                    getdata();
                    }
                });
              })

            $(document).on("click", ".delete_btn", function() {
                var student_id = $(this).closest('tr').find('.stud_id').text(); //it will fetch data from getdata()function 
                // alert(student_id);

                $('#id_delete').val(student_id);
                $('#studentDelete').modal('show');

                //direct delete 
                // $.ajax({
                //     type: "post",
                //     url: "database/code.php",
                //     data: {
                //         'checking_delete': true,
                //         'student_id': student_id,
                //     },
                //     success: function(response) {
                //         $('.message-show').append('\
                //         <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                //             <strong>Hey!</strong> '+response+'\
                //             <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                //                 <span aria-hidden="true">&times;</span>\
                //             </button>\
                //         </div>\
                //     ');
                //     $('.studentdata').html("");
                //     getdata();
                //     }
                // });
            });

            
            $('.student_update_ajax').click(function(e) { //called from save button from modal
                e.preventDefault();

                var stu_id = $('#edit_id').val();
                var fname = $('#edit_fname').val();
                var lname = $('#edit_lname').val();
                var email = $('#edit_email').val();
                var st_class = $('#edit_class').val();
                var section = $('#edit_section').val();

                if (stu_id != '', email != '', fname != '' & lname != '' & st_class != '' & section != '') {
                    $.ajax({
                        type: 'POST',
                        url: "database/code.php",
                        data: {
                            'checking_update': true,
                            'student_id': stu_id,
                            'fname': fname,
                            'lname': lname,
                            'email': email,
                            'class': st_class,
                            'section': section
                        },
                        success: function(response) {
                            $('#studentEditModal').modal('hide');
                            $('.message-show').append('\
                                <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                    <strong>Hey!</strong> ' + response + '.\
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                        <span aria-hidden="true">&times;</span>\
                                    </button>\
                                </div>\
                            ');
                            $('.studentdata').html("");
                            getdata();
                        }
                    });
                } else {
                    // console.log("Please enter all fileds.");
                    $('.error-message-update').append('\
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                            <strong>Hey!</strong> Please enter all fileds.\
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                <span aria-hidden="true">&times;</span>\
                            </button>\
                        </div>\
                    ');
                }

            });

            $(document).on("click", ".edit_btn", function() {
                var student_id = $(this).closest('tr').find('.stud_id').text(); //it will fetch data from getdata()function 
                // alert(student_id);

                $.ajax({
                    type: "post",
                    url: "database/code.php",
                    data: {
                        'checking_edit': true,
                        'student_id': student_id,
                    },
                    success: function(response) {
                        $.each(response, function(key, student_edit) {
                            // console.log(student_view['fname']) //fname from the database row;
                            $('#edit_id').val(student_edit['id']),
                                $('#edit_fname').val(student_edit['fname']),
                                $('#edit_lname').val(student_edit['lname']),
                                $('#edit_email').val(student_edit['email']),
                                $('#edit_class').val(student_edit['class']),
                                $('#edit_section').val(student_edit['section'])
                        });

                        $('#studentEditModal').modal('show');
                    }
                });
            });

            //view btn 
            $(document).on("click", ".viewbtn", function() {
                var student_id = $(this).closest('tr').find('.stud_id').text();
                // alert(student_id);

                $.ajax({
                    type: "post",
                    url: "database/code.php",
                    data: {
                        'checking_view': true,
                        'student_id': student_id,
                    },
                    success: function(response) {
                        $.each(response, function(key, student_view) {
                            // console.log(student_view['fname']) //fname from the database row;
                            $('.id_view').text(student_view['id']),
                                $('.fname_view').text(student_view['fname']),
                                $('.lname_view').text(student_view['lname']),
                                $('.email_view').text(student_view['email']),
                                $('.class_view').text(student_view['class']),
                                $('.section_view').text(student_view['section'])
                        });

                        $('#studentViewModal').modal('show');
                    }
                });
            });

            $('.student_add_ajax').click(function(e) { //called from save button from modal
                e.preventDefault();

                var fname = $('.fname').val();
                var lname = $('.lname').val();
                var email = $('.email').val();
                var st_class = $('.class').val();
                var section = $('.section').val();

                if (fname != '' & lname != '' & st_class != '' & section != '') {
                    $.ajax({
                        type: 'POST',
                        url: "database/code.php",
                        data: {
                            'checking_add': true,
                            'fname': fname,
                            'lname': lname,
                            'email': email,
                            'class': st_class,
                            'section': section
                        },
                        success: function(response) {
                            $('#Student_AddModal').modal('hide');
                            $('.message-show').append('\
                                <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                    <strong>Hey!</strong> ' + response + '.\
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                        <span aria-hidden="true">&times;</span>\
                                    </button>\
                                </div>\
                            ');
                            $('.studentdata').html("");
                            getdata();
                            $('.fname').val("");
                            $('.lname').val("");
                            $('.email').val("");
                            $('.class').val("");
                            $('.section').val("");
                        }
                    });
                } else {
                    // console.log("Please enter all fileds.");
                    $('.error-message').append('\
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                            <strong>Hey!</strong> Please enter all fileds.\
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                <span aria-hidden="true">&times;</span>\
                            </button>\
                        </div>\
                    ');
                }

            });
        });

        //display the data in the table
        function getdata() {
            $.ajax({
                type: "post",
                url: "database/fetch.php",
                success: function(response) {
                    $.each(response, function(key, value) {
                        // console.log(value['fname']);
                        $('.studentdata').append('\
                        <tr>\
                                <th scope="row" class="stud_id">' + value['id'] + '</th>\
                                <td>' + value['fname'] + '</td>\
                                <td>' + value['lname'] + '</td>\
                                <td>' + value['email'] + '</td>\
                                <td>' + value['class'] + '</td>\
                                <td>' + value['section'] + '</td>\
                                <td>\
                                    <button type="button" class="btn btn-info viewbtn">view</button>\
                                    <button type="button" class="btn btn-primary edit_btn">edit</button>\
                                    <button type="button" class="btn btn-danger delete_btn">delete</button>\
                                </td>\
                        </tr>\
                        ')
                    })
                }
            });
        }
    </script>
</body>

</html>