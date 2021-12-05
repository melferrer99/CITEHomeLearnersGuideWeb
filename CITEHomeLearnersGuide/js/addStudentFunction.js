      
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
                if (value['userType'] == "Student") {
                    htmls.push('<tr>\
                    <td>' + value.studentFullName + '</td>\
                    <td>' + value.userName + '</td>\
                    <td>' + value.email + '</td>\
                    <td>' + value.year + '</td>\
                    <td>' + value.section + '</td>\
                    <td>' + value.learningSystem + '</td>\
                    <td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info updateData" data-id="' + index + '">Update</button>\
                    <button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' + index + '">Delete</button></td>\
                </tr>');
                }
                lastIndex = index;
            });
            $('#tbody').html(htmls);
            $("#submitUser").removeClass('desabled');

            }
            else {
                  alert("No data available");
                 }

        });


// SORT Data ---------------------------------------------------------------------------------------------------------------
        $('#getData').on('click', function () {

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
                    <td>' + value.email + '</td>\
                    <td>' + value.year + '</td>\
                    <td>' + value.section + '</td>\
                    <td>' + value.learningSystem + '</td>\
                    <td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info updateData" data-id="' + index + '">Update</button>\
                    <button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' + index + '">Delete</button></td>\
                </tr>');
                }
                lastIndex = index;
            });
            $('#tbody').html(htmls);
            $("#submitUser").removeClass('desabled');

            }
            else {
                  alert("No data available");
                 }

        });

    });


// SORT LEARNING SYSTEM ---------------------------------------------------------------------------------------------------------------
         function SelecLearningSystem(){

        var sortLS = document.getElementById("SORTlearningSystem").value;

        firebase.database().ref('users/').on('value', function (snapshot) {

            if (snapshot.exists()) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function (index, value) {
                if (value['userType'] == "Student" && value['learningSystem'] == sortLS) {
                    htmls.push('<tr>\
                    <td>' + value.studentFullName + '</td>\
                    <td>' + value.userName + '</td>\
                    <td>' + value.email + '</td>\
                    <td>' + value.year + '</td>\
                    <td>' + value.section + '</td>\
                    <td>' + value.learningSystem + '</td>\
                    <td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info updateData" data-id="' + index + '">Update</button>\
                    <button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' + index + '">Delete</button></td>\
                </tr>');
                }
                lastIndex = index;
            });
            $('#tbody').html(htmls);
            $("#submitUser").removeClass('desabled');

            }
            else {
                  alert("No data available");
                 }

        });

    }

    // SORT YEAR SYSTEM ---------------------------------------------------------------------------------------------------------------
         function OnSelectionChange(){

        var sortLS = document.getElementById("SORTlearningSystem").value;
        var subYear = document.getElementById("SORTyear").value;

        firebase.database().ref('users/').on('value', function (snapshot) {

            if (snapshot.exists()) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function (index, value) {
                if (value['userType'] == "Student" && value['learningSystem'] == sortLS && value['year'] == subYear) {
                    htmls.push('<tr>\
                    <td>' + value.studentFullName + '</td>\
                    <td>' + value.userName + '</td>\
                    <td>' + value.email + '</td>\
                    <td>' + value.year + '</td>\
                    <td>' + value.section + '</td>\
                    <td>' + value.learningSystem + '</td>\
                    <td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info updateData" data-id="' + index + '">Update</button>\
                    <button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' + index + '">Delete</button></td>\
                </tr>');
                }
                lastIndex = index;
            });
            $('#tbody').html(htmls);
            $("#submitUser").removeClass('desabled');

            }
            else {
                  alert("No data available");
                 }

        });

    }


        // Add Data ----------------------------------------------------------------------------------------------------------------
        $('#submitUser').on('click', function () {
            
              var firstname= document.getElementById("fname").value;
              var lastname= document.getElementById("lname").value;
              var studUsername= document.getElementById("userName").value;
              var studEmail= document.getElementById("email").value;
              var studPass= document.getElementById("userName").value;
              var studYear= document.getElementById("year").value;
              var studSection= document.getElementById("section").value;
              var studLS= document.getElementById("learningSystem").value;
              var StudUtype= document.getElementById("userType").value;
              var fullname= firstname.concat(' '+lastname);

              firebase.database().ref('users/' + studUsername ).set({

                  studentFullName: fullname,
                  userName: studUsername,
                  password: lastname,
                  email: studEmail,
                  year: studYear,
                  section: studSection,
                  learningSystem: studLS,
                  userType: StudUtype
              });

            let inputs = document.querySelectorAll('input');

            inputs.forEach(input => fname.value = '');
            inputs.forEach(input => lname.value = '');
            inputs.forEach(input => userName.value = '');
            inputs.forEach(input => email.value = '');
            inputs.forEach(input => section.value = '');

           document.getElementById("submitUser").disabled=true;
            alert("Created successful.");

        });



        // Update Data ----------------------------------------------------------------------------------------------------------------
        var updateID = 0;
        $('body').on('click', '.updateData', function () {

            updateID = $(this).attr('data-id');
            firebase.database().ref('users/' + updateID).on('value', function (snapshot) {
                var values = snapshot.val();
                var updateData = '<div class="form-group">\
                <div class="form-group">\
                    <label for="fname" class="col-md-12 col-form-label">Full Name</label>\
                    <div class="col-md-12">\
                        <input id="fname" type="text" class="form-control" name="studentFullName" value="' + values.studentFullName + '" required autofocus>\
                    </div>\
                </div>\
                    <label for="email" class="col-md-12 col-form-label">Email</label>\
                    <div class="col-md-12">\
                        <input id="email" type="text" class="form-control" name="email" value="' + values.email + '" required autofocus>\
                    </div>\
                </div>\
                <div class="form-group">\
                    <label for="uname" class="col-md-12 col-form-label">Student No.</label>\
                    <div class="col-md-12">\
                        <input id="uname" type="text" class="form-control" name="userName" value="' + values.userName + '" required autofocus>\
                    </div>\
                </div>\
                <div class="form-group">\
                    <label for="pass" class="col-md-12 col-form-label">Password</label>\
                    <div class="col-md-12">\
                        <input id="pass" type="text" class="form-control" name="password" value="' + values.password + '" required autofocus>\
                    </div>\
                </div>\
                <div class="form-group">\
                    <label for="year" class="col-md-12 col-form-label">Year</label>\
                    <div class="col-md-12">\
                        <select id="year" type="text" class="form-control" name="year" required="" autofocus="">\
                                <option selected="">' + values.year + '</option>\
                                <option>1st Year</option>\
                                <option>2nd Year</option>\
                                <option>3rd Year</option>\
                                <option>4th Year</option>\
                        </select>\
                    </div>\
                </div>\
                <div class="form-group">\
                    <label for="section" class="col-md-12 col-form-label">Section</label>\
                    <div class="col-md-12">\
                        <input id="section" type="text" class="form-control" name="section" value="' + values.section + '" required autofocus>\
                    </div>\
                </div>\
                <div class="form-group">\
                    <div class="col-md-12">\
                        <input hidden id="utype" type="text" class="form-control" name="userType" value="' + values.userType + '" required autofocus>\
                    </div>\
                </div>\
                <div class="form-group">\
                    <div class="col-md-12">\
                        <input hidden id="studLS" type="text" class="form-control" name="learningSystem" value="' + values.learningSystem + '" required autofocus>\
                    </div>\
                </div>';

                $('#updateBody').html(updateData);
            });
        });

        $('.updateUser').on('click', function () {

            var values = $(".users-update-record-model").serializeArray();
            var postData = {
                email: values[1].value,
                learningSystem: values[7].value,
                password: values[3].value,
                section: values[5].value,
                studentFullName: values[0].value,
                userName: values[2].value,
                userType: values[6].value,
                year: values[4].value,
            };

            var updates = {};
            updates['/users/' + updateID] = postData;

            firebase.database().ref().update(updates);

            $("#update-modal").modal('hide');
        });



        // Remove Data ----------------------------------------------------------------------------------------------------------------
        $("body").on('click', '.removeData', function () {
            var id = $(this).attr('data-id');
            $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
        });

        $('.deleteRecord').on('click', function () {

            var values = $(".users-remove-record-model").serializeArray();
            var id = values[0].value;
            firebase.database().ref('users/' + id).remove();
            $('body').find('.users-remove-record-model').find("input").remove();
            $("#remove-modal").modal('hide');
        });
        $('.remove-data-from-delete-form').click(function () {
            $('body').find('.users-remove-record-model').find("input").remove();
        });


        //----------------------------------------------------------------------------------


        function btnActivation(){

            var val =document.getElementById("section");     

            if(val.value=="")
                {
                document.getElementById("submitUser").disabled=true;
                }
            else
                document.getElementById("submitUser").disabled=false;
        }   


// Get Data SELECT----------------------------------------------------------------------------------------------------------------

    //   function OnSelectionChange(){

    //     var sortLS = document.getElementById("SORTlearningSystem").value;
    //     var subYear = document.getElementById("SORTyear").value;

    //     firebase.database().ref('users/').on('value', function (snapshot) {
            
    //         var value = snapshot.val();
    //         var htmls = [];
    //         $.each(value, function (index, value) {

    //             const sec = [value.section];
    //             console.log(sec);

    //             if (value['year'] == subYear && value['userType'] == 'Student' && value['learningSystem'] == sortLS) {
    //                 htmls.push('<option>' + sec + '</option>');
    //             }
    //             lastIndex = index;
    //         });

    //         $('#SORTsection').html(htmls);
    //         $("#submitUser").removeClass('desabled');

    //     });
    // }


//=======================================================================================================
        var obj_csv = {
            size:0,
            dataFile:[]
        };

        function readImage(input) {

            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.readAsBinaryString(input.files[0]);
                reader.onload = function (e) {

                    obj_csv.size = e.total;
                    obj_csv.dataFile = e.target.result
                    console.log(obj_csv.dataFile)
                    parseData(obj_csv.dataFile)               
                }
            }
        }

        function parseData(data){
            let csvData = [];

            const table = data.split("\r\n").slice(1);
            table.forEach(row => {
                const columns = row.split(',');

                const email = columns[0];
                const learningSystem = columns[1];
                const password = columns[2];
                const section = columns[3];
                const studentFullName = columns[4];
                const userName = columns[5];
                const userType = columns[6];
                const year = columns[7];

                console.log(email, learningSystem, password, section, studentFullName, userName, userType, year);

                document.getElementById("submitSTUDENT").disabled=false;
// Add Data ------------------------------------------------------------------------------------------------------
                $('#submitSTUDENT').on('click', function () {

                     var user = userName;
                    
                     firebase.database().ref('users/' + user + '/').set({

                          studentFullName: studentFullName,
                          userName: userName,
                          password: password,
                          email: email,
                          year: year,
                          section: section,
                          learningSystem: learningSystem,
                          userType: userType

                        
                      });   

                let inputs = document.querySelectorAll('input');

                    inputs.forEach(input => uploadfile.value = '');

                document.getElementById("submitSTUDENT").disabled=true;
                });
//----------------------------------------------------------------------------------------------------------------                 
                
            });
           
        }

