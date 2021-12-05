      
       // Your web app's Firebase configuration
      // For Firebase JS SDK v7.20.0 and later, measurementId is optional
      var firebaseConfig = {
        apiKey: "AIzaSyDu1e-6PBfwYfS8mOOLFwpOZWz7oOGQ2BQ",
        authDomain: "cite-home-learner-s-guide.firebaseapp.com",
        databaseURL: "https://cite-home-learner-s-guide.firebaseio.com",
        projectId: "cite-home-learner-s-guide",
        storageBucket: "cite-home-learner-s-guide.appspot.com",
        messagingSenderId: "126055796910",
        appId: "1:126055796910:web:bc781665b2f78e2198dd3f",
        measurementId: "G-NJJLD09DC5"
      };
      // Initialize Firebase
      firebase.initializeApp(firebaseConfig);
      firebase.analytics();


        var database = firebase.database();

        var lastIndex = 0;

        // Get Data ---------------------------------------------------------------------------------------------------------------

        firebase.database().ref('users/').on('value', function (snapshot) {

            if (snapshot.exists()) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function (index, value) {

                var sortLS = document.getElementById("SORTlearningSystem").value;

                if (value['userType'] == "Student" && value['learningSystem'] == sortLS) {
                    htmls.push('<tr>\
                    <td>' + value.studentFullName + '</td>\
                    <td>' + value.userName + '</td>\
                    <td>' + value.year + '</td>\
                    <td>' + value.section + '</td>\
                    <td>' + value.learningSystem + '</td>\
                    <td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info addData" data-id="' + index + '">Add</button>\
                </tr>');
                }
                lastIndex = index;
            });
            $('#tbody1').html(htmls);
            $("#submitUser").removeClass('desabled');

            }
            else {
                  alert("No data available");
                 }

        });

        // SORT Data TABLE 1---------------------------------------------------------------------------------------------------------------
        $('#sortData').on('click', function () {

        var sortLS = document.getElementById("SORTlearningSystem").value;
        var sortYear = document.getElementById("SORTyear").value;
        var sortSection = document.getElementById("SORTsection").value;

        firebase.database().ref('users/').on('value', function (snapshot) {

            if (snapshot.exists()) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function (index, value) {
                if (value['userType'] == "Student" && value['learningSystem'] == sortLS  && value['year'] == sortYear  && value['section'] == sortSection) {
                    htmls.push('<tr>\
                    <td>' + value.studentFullName + '</td>\
                    <td>' + value.userName + '</td>\
                    <td>' + value.year + '</td>\
                    <td>' + value.section + '</td>\
                    <td>' + value.learningSystem + '</td>\
                    <td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info addData" data-id="' + index + '">Add</button>\
                </tr>');
                }
                lastIndex = index;
            });
            $('#tbody1').html(htmls);
            $("#submitUser").removeClass('desabled');

            }
            else {
                  alert("No data available");
                 }

        });

    });



        // ADD Data ----------------------------------------------------------------------------------------------------------------
        var addID = 0;
        $('body').on('click', '.addData', function () {

            addID = $(this).attr('data-id');
            firebase.database().ref('users/' + addID).on('value', function (snapshot) {
                var values = snapshot.val();
                var addData = '<div class="form-group">\
                <div class="form-group">\
                    <label for="fname" class="col-md-12 col-form-label">Full Name</label>\
                    <div class="col-md-12">\
                        <input id="fname" type="text" class="form-control" name="studentFullName" value="' + values.studentFullName + '" required autofocus>\
                    </div>\
                </div>\
                        <input id="email" type="hidden" class="form-control" name="email" value="' + values.email + '" required autofocus>\
                </div>\
                <div class="form-group">\
                    <label for="uname" class="col-md-12 col-form-label">Student No.</label>\
                    <div class="col-md-12">\
                        <input id="uname" type="text" class="form-control" name="userName" value="' + values.userName + '" required autofocus>\
                    </div>\
                </div>\
                <div class="form-group">\
                        <input id="pass" type="hidden" class="form-control" name="password" value="' + values.password + '" required autofocus>\
                </div>\
                <div class="form-group">\
                      <input id="year" type="hidden" class="form-control" name="year" value="' + values.year + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input id="section" type="hidden" class="form-control" name="section" value="' + values.section + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input hidden id="utype" type="hidden" class="form-control" name="userType" value="' + values.userType + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input hidden id="studLS" type="hidden" class="form-control" name="learningSystem" value="' + values.learningSystem + '" required autofocus>\
                </div>\
                <div class="form-group">\
                    <label for="Code" class="col-md-12 col-form-label">Code</label>\
                    <div class="col-md-12">\
                        <input id="Code" type="text" class="form-control" name="Code" required autofocus>\
                    </div>\
                </div>';

                $('#addBody').html(addData);
            });
        });

        $('.ADDUser').on('click', function () {

            var LSystem= document.getElementById("SORTlearningSystem").value;
            var year= document.getElementById("year").value;
            var section= document.getElementById("section").value;
            var uname= document.getElementById("username").value;
            var code = document.getElementById("Code").value;

            var values = $(".users-update-record-model").serializeArray();

            firebase.database().ref('FacebookGroups/' + LSystem + '/' + year + '/' + section + '/'+ code + '/' + 'StudentsJoined' + '/' + addID).set({

                  email: values[1].value,
                  learningSystem: values[7].value,
                  password: values[3].value,
                  section: values[5].value,
                  studentFullName: values[0].value,
                  userName: values[2].value,
                  userType: values[6].value,
                  year: values[4].value,
 
            });

            $("#update-modal").modal('hide');
        });

        $('.ADDUser').on('click', function () {

            var StudentNo = document.getElementById("uname").value;
            var uname= document.getElementById("username").value;
            var code = document.getElementById("Code").value;

            var values = $(".users-update-record-model").serializeArray();

            firebase.database().ref('JoinClasses/' + StudentNo + '/FB/' + code + '/').set({

                  email: values[1].value,
                  learningSystem: values[7].value,
                  password: values[3].value,
                  section: values[5].value,
                  studentFullName: values[0].value,
                  userName: values[2].value,
                  userType: values[6].value,
                  year: values[4].value,
                  specialCode: values[8].value,
 
            });

            $("#update-modal").modal('hide');
        });


   // Get Data ----------------------------------------------------------------------------------------------------------------
   $('#getData').on('click', function () {

            var StudentNo = document.getElementById("uname").value;
            var uname= document.getElementById("username").value;
            var code = document.getElementById("Code").value;

        firebase.database().ref('JoinClasses/' + StudentNo + '/' + code + '/' ).on('value', function (snapshot) {

            if (snapshot.exists()) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function (index, value) {
                if (value) {
                    htmls.push('<tr>\
                    <td>' + value.studentFullName + '</td>\
                    <td>' + value.userName + '</td>\
                    <td>' + value.year + '</td>\
                    <td>' + value.section + '</td>\
                    <td>' + value.learningSystem + '</td>\
                    <td><button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' + index + '">Delete</button></td>\
                </tr>');
                }
                lastIndex = index;
            });
            $('#tbody2').html(htmls);
            $("#submitUser").removeClass('desabled');

            }
            else {
                  alert("No data available");
                 }

        });

    });


           // Remove Data ----------------------------------------------------------------------------------------------------------------
        $("body").on('click', '.removeData', function () {
            var id = $(this).attr('data-id');
            $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
        });

        $('.deleteRecord').on('click', function () {

            var values = $(".users-remove-record-model").serializeArray();
            var id = values[0].value;

            var sortLS = document.getElementById("SORTlearningSystem").value;
            var uname= document.getElementById("username").value;
            var code = document.getElementById("specialCode").value;
        
            firebase.database().ref('Facebook/' + sortLS + '/' + uname + '/' + code + '/' + 'StudentsJoined/' + id).remove();
            $('body').find('.users-remove-record-model').find("input").remove();
            $("#remove-modal").modal('hide');
        });
        $('.remove-data-from-delete-form').click(function () {
            $('body').find('.users-remove-record-model').find("input").remove();
        });