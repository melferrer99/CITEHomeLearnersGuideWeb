      
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
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function (index, value) {
                if (value['userType'] == "Teacher") {
                    htmls.push('<tr>\
                    <td>' + value.FullName + '</td>\
                    <td>' + value.email + '</td>\
                    <td>' + value.userName + '</td>\
                    <td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info updateData" data-id="' + index + '">Update</button>\
                    <button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' + index + '">Delete</button></td>\
                </tr>');
                }
                lastIndex = index;
            });
            $('#tbody').html(htmls);
            $("#submitUser").removeClass('desabled');
        });

        // Add Data TEACHERS----------------------------------------------------------------------------------------------------------------
        $('#submitUser').on('click', function () {
                
              var firstname= document.getElementById("fname").value;
              var lastname= document.getElementById("lname").value;
              var uname= document.getElementById("userName").value;
              var email= document.getElementById("email").value;
              var utype= document.getElementById("userType").value;
               var fullname= firstname.concat(' '+lastname);

              if (utype == "Teacher") {
              firebase.database().ref('teachers/' + uname ).set({

                  FullName: fullname,
                  email: email,
                  password: lastname,
                  userName: uname,
                  userType: utype
              });
            }
        });


        // Add Data ----------------------------------------------------------------------------------------------------------------
        $('#submitUser').on('click', function () {
            
              var firstname= document.getElementById("fname").value;
              var lastname= document.getElementById("lname").value;
              var uname= document.getElementById("userName").value;
              var email= document.getElementById("email").value;
              var utype= document.getElementById("userType").value;
              var fullname= firstname.concat(' '+lastname);

              firebase.database().ref('users/' + uname ).set({

                  FullName: fullname,
                  email: email,
                  password: lastname,
                  userName: uname,
                  userType: utype
              });

            let inputs = document.querySelectorAll('input');

            inputs.forEach(input => fname.value = '');
            inputs.forEach(input => userName.value = '');
            inputs.forEach(input => email.value = '');

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
                        <input id="fname" type="text" class="form-control" name="FullName" value="' + values.FullName + '" required autofocus>\
                    </div>\
                </div>\
                    <label for="email" class="col-md-12 col-form-label">Email</label>\
                    <div class="col-md-12">\
                        <input id="email" type="text" class="form-control" name="email" value="' + values.email + '" required autofocus>\
                    </div>\
                </div>\
                <div class="form-group">\
                    <label for="pass" class="col-md-12 col-form-label">Password</label>\
                    <div class="col-md-12">\
                        <input id="pass" type="text" class="form-control" name="password" value="' + values.password + '" required autofocus>\
                    </div>\
                </div>\
                <div class="form-group">\
                    <label for="uname" class="col-md-12 col-form-label">Employee No.</label>\
                    <div class="col-md-12">\
                        <input id="uname" type="text" class="form-control" name="userName" value="' + values.userName + '" required autofocus>\
                    </div>\
                </div>\
                <div class="form-group">\
                    <div class="col-md-12">\
                        <input hidden id="utype" type="text" class="form-control" name="userType" value="' + values.userType + '" required autofocus>\
                    </div>\
                </div>';

                $('#updateBody').html(updateData);
            });
        });

        $('.updateUser').on('click', function () {

            var values = $(".users-update-record-model").serializeArray();
            var postData = {
                FullName: values[0].value,
                email: values[1].value,
                password: values[2].value,
                userName: values[3].value,
                userType: values[4].value,
            };

            var updates = {};
            updates['/users/' + updateID] = postData;

            firebase.database().ref().update(updates);

            $("#update-modal").modal('hide');
        });

        $('.updateUser').on('click', function () {

            var values = $(".users-update-record-model").serializeArray();

            var postData = {
                FullName: values[0].value,
                email: values[1].value,
                password: values[2].value,
                userName: values[3].value,
                userType: values[4].value,
            };

            var updates = {};
            updates['/teachers/' + updateID] = postData;

            firebase.database().ref().update(updates);

            $("#update-modal").modal('hide');
        });


      // REMOVE Data ----------------------------------------------------------------------------------------------------------------
        var remID = 0;
        $('body').on('click', '.removeData', function () {

            remID = $(this).attr('data-id');
            firebase.database().ref('users/' + remID).on('value', function (snapshot) {
                var values = snapshot.val();
                var removeData = '<div class="form-group">\
                <div class="form-group">\
                        <input  id="FullName" type="text" class="form-control" name="FullName" value="' + values.FullName + '" required autofocus>\
                </div>\
                 <div class="form-group">\
                        <input  id="email" type="text" class="form-control" name="email" value="' + values.email + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input  id="password" type="text" class="form-control" name="password" value="' + values.password + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input  id="userName" type="text" class="form-control" name="userName" value="' + values.userName + '" required autofocus>\
                </div>\
                 <div class="form-group">\
                        <input  id="userType" type="text" class="form-control" name="userType" value="' + values.userType + '" required autofocus>\
                </div>';

                $('#removeBody').html(removeData);
            });
        });

        // Remove Data ---------------------------------------------------------------------------------------------------------------
        $('.deleteRecord').on('click', function () {

            var values = $(".users-remove-record-model").serializeArray();

            firebase.database().ref('teachers/' + remID).remove();
            $('body').find('.users-remove-record-model').find("input").remove();
            $("#remove-modal").modal('hide');
        });


        // Remove Data ---------------------------------------------------------------------------------------------------------------
        $('.deleteRecord').on('click', function () {

            var values = $(".users-remove-record-model").serializeArray();
            firebase.database().ref('users/' + remID).remove();
            $('body').find('.users-remove-record-model').find("input").remove();
            $("#remove-modal").modal('hide');
        });
        $('.remove-data-from-delete-form').click(function () {
            $('body').find('.users-remove-record-model').find("input").remove();
        });


        //----------------------------------------------------------------------------------


        function btnActivation(){

            var i = document.getElementById('email');      
      

            if(i.value=="")
                {
                document.getElementById("submitUser").disabled=true;
                }
            else
                document.getElementById("submitUser").disabled=false;
        }   