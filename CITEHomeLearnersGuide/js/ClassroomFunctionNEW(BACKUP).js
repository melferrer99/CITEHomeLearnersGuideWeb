      
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

        // Get Data ----------------------------------------------------------------------------------------------------------------

        var learnSystem = document.getElementById("learningSystem").value;
        var Username = document.getElementById("username").value;
        var subSection = document.getElementById("SORTsection").value;

        firebase.database().ref('Classroom/' + learnSystem +'/'+ Username + '/').on('value', function (snapshot) {
            
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function (index, value) {
                if (value) {
                    htmls.push('<tr>\
                    <td>' + value.subjectYear + '</td>\
                    <td>' + value.subjectSection + '</td>\
                    <td>' + value.subjectCode + '</td>\
                    <td>' + value.subjectTitle + '</td>\
                    <td>' + '<a target='+"_blank"+' href="'+value.gclassroomlink +'"><button class="btn btn-info">CLASSROOM</button></a>'  + '<a target='+"_blank"+' href="'+value.moduleslink+'"><button class="btn btn-info">MODULES</button></a>' + '<a target='+"_blank"+' href="'+value.facebooklink+'"><button class="btn btn-info">FACEBOOK</button></a>' + '</td>\
                    <td><button data-toggle="modal" data-target="#get-modal" class="btn btn-info studentData" data-id="' + index + '">Add Student</button>\
                    <button data-toggle="modal" data-target="#Joined-modal" class="btn btn-info studentJoinedData" data-id="' + index + '">Student Joined</button></td>\
                    <td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info updateData" data-id="' + index + '">Update</button>\
                    <button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' + index + '">Delete</button></td>\
                </tr>');
                }
                lastIndex = index;
            });
            $('#tbody').html(htmls);
            $("#submitUser").removeClass('desabled');

        });


        // SORT Data ----------------------------------------------------------------------------------------------------------------
        $('#getData').on('click', function () {

        var learnSystem = document.getElementById("learningSystem").value;
        var subYear = document.getElementById("SORTyear").value;
        var subSection = document.getElementById("SORTsection").value;

        firebase.database().ref('Classroom/' + learnSystem +'/'+ Username + '/').on('value', function (snapshot) {
            
            if (snapshot.exists()) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function (index, value) {
                if (value['subjectYear'] == subYear && value['subjectSection'] == subSection) {
                    htmls.push('<tr>\
                    <td>' + value.subjectYear + '</td>\
                    <td>' + value.subjectSection + '</td>\
                    <td>' + value.subjectCode + '</td>\
                    <td>' + value.subjectTitle + '</td>\
                    <td>' + '<a target='+"_blank"+' href="'+value.gclassroomlink +'"><button class="btn btn-info">CLASSROOM</button></a>'  + '<a target='+"_blank"+' href="'+value.moduleslink+'"> <button class="btn btn-info">MODULES</button></a>' + '<a target='+"_blank"+' href="'+value.facebooklink+'"><button class="btn btn-info">FACEBOOK</button></a>' + '</td>\
                    <td><button data-toggle="modal" data-target="#get-modal" class="btn btn-info studentData" data-id="' + index + '">Add Student</button>\
                    <button data-toggle="modal" data-target="#Joined-modal" class="btn btn-info studentJoinedData" data-id="' + index + '">Student Joined</button></td>\
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

        // Add Data new----------------------------------------------------------------------------------------------------------------
        $('#submitUser').on('click', function () {
            
              var learnSystem= document.getElementById("learningSystem").value;
              var subYear= document.getElementById("subjectYear").value;
              var subSection= document.getElementById("subjectSection").value;
              var subCode= document.getElementById("subjectCode").value;
              var subTitle= document.getElementById("subjectTitle").value;
              var classLink= document.getElementById("gclasstLink").value;
              var modLink= document.getElementById("moduleslink").value;
              var uname= document.getElementById("username").value;
              var fblink= document.getElementById("facebooklink").value;

              firebase.database().ref('Classroom/' + learnSystem + '/' + uname + '/' + subTitle).set({

                  learningSystem: learnSystem,
                  subjectYear: subYear,
                  subjectSection: subSection,
                  subjectCode: subCode,
                  subjectTitle: subTitle,
                  gclassroomlink: classLink,
                  moduleslink: modLink,
                  facebooklink: fblink,
                  username: uname
                  

              });

        });

        // Add Data new 2----------------------------------------------------------------------------------------------------------------
        $('#submitUser').on('click', function () {
            
              var learnSystem= document.getElementById("learningSystem").value;
              var subYear= document.getElementById("subjectYear").value;
              var subSection= document.getElementById("subjectSection").value;
              var subCode= document.getElementById("subjectCode").value;
              var subTitle= document.getElementById("subjectTitle").value;
              var classLink= document.getElementById("gclasstLink").value;
              var modLink= document.getElementById("moduleslink").value;
              var uname= document.getElementById("username").value;
              var fblink= document.getElementById("facebooklink").value;

              firebase.database().ref('GoogleClassroom/' + learnSystem + '/' + subYear + '/' + subSection + '/' + subTitle + '/').set({

                  learningSystem: learnSystem,
                  subjectYear: subYear,
                  subjectSection: subSection,
                  subjectCode: subCode,
                  subjectTitle: subTitle,
                  gclassroomLink: classLink,
                  moduleslink: modLink,
                  facebooklink: fblink,
                  username: uname

              });

            let inputs = document.querySelectorAll('input');

            inputs.forEach(input => subjectSection.value = '');
            inputs.forEach(input => subjectCode.value = '');
            inputs.forEach(input => subjectTitle.value = '');
            inputs.forEach(input => gclasstLink.value = '');
            inputs.forEach(input => moduleslink.value = '');
            inputs.forEach(input => facebooklink.value = '');
        });




        // Update Data ----------------------------------------------------------------------------------------------------------------
        var updateID = 0;
        $('body').on('click', '.updateData', function () {

        var learnSystem = document.getElementById("learningSystem").value;
        var Username = document.getElementById("username").value;

            updateID = $(this).attr('data-id');
            firebase.database().ref('Classroom/' + learnSystem +'/'+ Username + '/' + updateID).on('value', function (snapshot) {
                var values = snapshot.val();
                var updateData = '<div class="form-group">\
                 <div class="form-group">\
                    <label for="subCode" class="col-md-12 col-form-label">Sub. Code</label>\
                    <div class="col-md-12">\
                        <input id="subCode" type="text" class="form-control" name="subjectCode" value="' + values.subjectCode + '" required autofocus>\
                    </div>\
                </div>\
                <div class="form-group">\
                    <label for="subTitle" class="col-md-12 col-form-label">Sub. Title</label>\
                    <div class="col-md-12">\
                        <input id="subTitle" type="text" class="form-control" name="subjectTitle" value="' + values.subjectTitle + '" required autofocus>\
                    </div>\
                </div>\
                <div class="form-group">\
                    <label for="subLink" class="col-md-12 col-form-label">Classroom Link</label>\
                    <div class="col-md-12">\
                        <input id="subLink" type="text" class="form-control" name="subjectLink" value="' + values.gclassroomlink + '" required autofocus>\
                    </div>\
                </div>\
                <div class="form-group">\
                    <label for="modLink" class="col-md-12 col-form-label">Modules Link</label>\
                    <div class="col-md-12">\
                        <input id="modLink" type="text" class="form-control" name="moduleslink" value="' + values.moduleslink + '" required autofocus>\
                    </div>\
                </div>\
                 <div class="form-group">\
                        <input hidden id="learnSystem" type="text" class="form-control" name="learningSystem" value="' + values.learningSystem + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input hidden id="subYear" type="text" class="form-control" name="subjectYear" value="' + values.subjectYear + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input hidden id="subSection" type="text" class="form-control" name="subjectSection" value="' + values.subjectSection + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input hidden id="Uname" type="text" class="form-control" name="Uname" value="' + values.username + '" required autofocus>\
                </div>\
                <div class="form-group">\
                    <label for="facebooklink" class="col-md-12 col-form-label">Facebook Link</label>\
                    <div class="col-md-12">\
                        <input id="facebooklink" type="text" class="form-control" name="facebooklink" value="' + values.facebooklink + '" required autofocus>\
                    </div>\
                </div>';

                $('#updateBody').html(updateData);
            });
        });

        $('.updateUser').on('click', function () {

            var learnSystem= document.getElementById("learningSystem").value;
            var Username= document.getElementById("Uname").value;

            var values = $(".users-update-record-model").serializeArray();
            var postData = {

                facebooklink: values[8].value,
                gclassroomlink: values[2].value,
                learningSystem: values[4].value,
                moduleslink: values[3].value,
                subjectCode: values[0].value,
                subjectSection: values[6].value,
                subjectTitle: values[1].value,   
                subjectYear: values[5].value,
                username: values[7].value,
                

            };

            var updates = {};
            updates['Classroom/' + learnSystem +'/'+ Username + '/' + updateID] = postData;

            firebase.database().ref().update(updates);

            $("#update-modal").modal('hide');
        });

        $('.updateUser').on('click', function () {

            var learnSystem= document.getElementById("learningSystem").value;
            var subYear= document.getElementById("subYear").value;
            var subSection= document.getElementById("subSection").value;

            var values = $(".users-update-record-model").serializeArray();
            var postData = {

                facebooklink: values[8].value,
                gclassroomlink: values[2].value,
                learningSystem: values[4].value,
                moduleslink: values[3].value,
                subjectCode: values[0].value,
                subjectSection: values[6].value,
                subjectTitle: values[1].value,   
                subjectYear: values[5].value,
                username: values[7].value,
                

            };

            var updates = {};
            updates['GoogleClassroom/' + learnSystem +'/'+ subYear + '/' + subSection + '/' + updateID] = postData;

            firebase.database().ref().update(updates);

            $("#update-modal").modal('hide');
        });




    // REMOVE Data ----------------------------------------------------------------------------------------------------------------
        var updateID = 0;
        $('body').on('click', '.removeData', function () {

        var learnSystem = document.getElementById("learningSystem").value;
        var Username = document.getElementById("username").value;

            updateID = $(this).attr('data-id');
            firebase.database().ref('Classroom/' + learnSystem +'/'+ Username + '/' + updateID).on('value', function (snapshot) {
                var values = snapshot.val();
                var removeData = '<div class="form-group">\
                 <div class="form-group text-center">\
                        <h4>' + values.subjectTitle + '</h4>\
                </div>\
                <div class="form-group">\
                        <input hidden id="subTitle" type="text" class="form-control" name="subjectTitle" value="' + values.subjectTitle + '" required autofocus>\
                </div>\
                 <div class="form-group">\
                        <input hidden id="subCode" type="text" class="form-control" name="subjectCode" value="' + values.subjectCode + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input hidden id="subLink" type="text" class="form-control" name="subjectLink" value="' + values.gclassroomlink + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input hidden id="modLink" type="text" class="form-control" name="moduleslink" value="' + values.moduleslink + '" required autofocus>\
                </div>\
                 <div class="form-group">\
                        <input hidden id="learnSystem" type="text" class="form-control" name="learningSystem" value="' + values.learningSystem + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input hidden id="removesubYear" type="text" class="form-control" name="subjectYear" value="' + values.subjectYear + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input hidden id="removesubSection" type="text" class="form-control" name="subjectSection" value="' + values.subjectSection + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input hidden id="Uname" type="text" class="form-control" name="Uname" value="' + values.username + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input hidden id="facebooklink" type="text" class="form-control" name="facebooklink" value="' + values.facebooklink + '" required autofocus>\
                </div>';

                $('#removeBody').html(removeData);
            });
        });

        // Remove Data ----------------------------------------------------------------------------------------------------------------

        $('.deleteRecord').on('click', function () {

            var learnSystem= document.getElementById("learningSystem").value;
            var Username = document.getElementById("username").value;
            var subYear = document.getElementById("removesubYear").value;
            var subSection = document.getElementById("removesubSection").value;


            var values = $(".users-remove-record-model").serializeArray();
    
            firebase.database().ref('GoogleClassroom/' + learnSystem +'/'+ subYear + '/' + subSection + '/' + updateID).remove();
            $('body').find('.users-remove-record-model').find("input").remove();
            $("#remove-modal").modal('hide');
        });

        $('.deleteRecord').on('click', function () {

            var learnSystem= document.getElementById("learningSystem").value;
            var Username = document.getElementById("username").value;

            var values = $(".users-remove-record-model").serializeArray();

            firebase.database().ref('Classroom/' + learnSystem +'/'+ Username + '/' + updateID).remove();
            $('body').find('.users-remove-record-model').find("input").remove();
            $("#remove-modal").modal('hide');
        });


        $('.remove-data-from-delete-form').click(function () {
            $('body').find('.users-remove-record-model').find("input").remove();
        });



//================================================================================================================================================

    // Get STUDENTS Data ---------------------------------------------------------------------------------------------------------------
        var studentID = 0;

        studentID = $(this).attr('data-id');
        firebase.database().ref('users/').on('value', function (snapshot) {

            if (snapshot.exists()) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function (index, value) {

                var sortLS = document.getElementById("learningSystem").value;

                if (value['userType'] == "Student" && value['learningSystem'] == sortLS) {
                    htmls.push('<tr>\
                    <td>' + value.studentFullName + '</td>\
                    <td>' + value.userName + '</td>\
                    <td>' + value.year + '</td>\
                    <td>' + value.section + '</td>\
                    <td>' + value.learningSystem + '</td>\
                </tr>');
                }
                lastIndex = index;
            });
            $('#tbodySTUDENTS').html(htmls);
            $("#submitUser").removeClass('desabled');

            }
            else {
                  alert("No data available");
                 }

        });

        // Get STUDENTS Data ----------------------------------------------------------------------------------------------------------------
        var updateID = 0;
        $('body').on('click', '.studentData', function () {

        var learnSystem = document.getElementById("learningSystem").value;
        var Username = document.getElementById("username").value;

            updateID = $(this).attr('data-id');
            firebase.database().ref('Classroom/' + learnSystem +'/'+ Username + '/' + updateID).on('value', function (snapshot) {
                var values = snapshot.val();
                var studentData = '<div class="form-group">\
                <div class="form-group">\
                        <input  id="subTitle" type="text" class="form-control" name="subjectTitle" value="' + values.subjectTitle + '" required autofocus>\
                </div>\
                 <div class="form-group">\
                        <input  id="learnSystem" type="text" class="form-control" name="learningSystem" value="' + values.learningSystem + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input  id="subYear" type="text" class="form-control" name="subjectYear" value="' + values.subjectYear + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input  id="subSection" type="text" class="form-control" name="subjectSection" value="' + values.subjectSection + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input  id="code" type="text" class="form-control" name="specialCode" value="' + values.specialCode + '" required autofocus>\
                </div>\
                <div class="form-group">\
                   <label for="studNo" class="col-md-12 col-form-label">Student No.</label>\
                    <div class="col-md-12">\
                        <input id="studNo" type="text" class="form-control" name="studNo" required autofocus>\
                    </div>\
                </div> \
                <div class="form-group">\
                   <label for="studName" class="col-md-12 col-form-label">Student Name</label>\
                    <div class="col-md-12">\
                        <input id="studName" type="text" class="form-control" name="studName" required autofocus>\
                    </div>\
                </div>';

                $('#getBody').html(studentData);
            });
        });

        $('.ADDUser').on('click', function () {

            var studNo= document.getElementById("studNo").value;
            var uname= document.getElementById("username").value;
            var code = document.getElementById("code").value;

            var values = $(".users-add-record-model").serializeArray();

            firebase.database().ref('JoinClasses/' + studNo + '/' +'GClass/' + code).set({
                  
                  subjectTitle: values[0].value,
                  learningSystem: values[1].value,
                  subjectYear: values[2].value,
                  subjectSection: values[3].value,
                  specialCode: values[4].value,
                  userName: values[5].value,
                  studentFullName: values[6].value,
 
            });

            $("#get-modal").modal('hide');
        });

        $('.ADDUser').on('click', function () {

            var Lsystem= document.getElementById("learnSystem").value;
            var subYear= document.getElementById("subYear").value;
            var subSection= document.getElementById("subSection").value;
            var code = document.getElementById("code").value;
            var studNo= document.getElementById("studNo").value;

            var values = $(".users-add-record-model").serializeArray();

            firebase.database().ref('GoogleClassroom/' + Lsystem + '/' + subYear + '/' + subSection + '/' + code + '/' + 'StudentJoined/' + studNo).set({
                  
                  userName: values[5].value,
                  studentFullName: values[6].value,
 
            });

            $("#get-modal").modal('hide');
        });



        // Get STUDENTS Joined ----------------------------------------------------------------------------------------------------------------
        var updateID = 0;
        $('body').on('click', '.studentJoinedData', function () {

        var learnSystem = document.getElementById("learningSystem").value;
        var Username = document.getElementById("username").value;

            updateID = $(this).attr('data-id');
            firebase.database().ref('Classroom/' + learnSystem +'/'+ Username + '/' + updateID).on('value', function (snapshot) {
                var values = snapshot.val();
                var studentJoinedData = '<div class="form-group">\
                <div class="form-group">\
                        <input hidden id="subTitle" type="text" class="form-control" name="subjectTitle" value="' + values.subjectTitle + '" required autofocus>\
                </div>\
                 <div class="form-group">\
                        <input hidden id="learnSystem" type="text" class="form-control" name="learningSystem" value="' + values.learningSystem + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input hidden id="subYear" type="text" class="form-control" name="subjectYear" value="' + values.subjectYear + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input hidden id="subSection" type="text" class="form-control" name="subjectSection" value="' + values.subjectSection + '" required autofocus>\
                </div>\
                <div class="form-group">\
                        <input hidden id="code" type="text" class="form-control" name="specialCode" value="' + values.specialCode + '" required autofocus>\
                </div>';

                $('#STUDjoinedBody').html(studentJoinedData);
            });
        });


        // Display STUDENTS joned Data ---------------------------------------------------------------------------------------------------------------
        var studentID = 0;
        $('.DisplaystudentJoined').on('click', function () {

        var learnSystem = document.getElementById("learnSystem").value;
        var subYear = document.getElementById("subYear").value;
        var subSection = document.getElementById("subSection").value;
        var specialCode = document.getElementById("code").value;

        studentID = $(this).attr('data-id');
        firebase.database().ref('GoogleClassroom/' + learnSystem + '/' + subYear + '/' + subSection + '/' + specialCode + '/' + 'StudentJoined/').on('value', function (snapshot) {

            if (snapshot.exists()) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function (index, value) {

                if (value) {
                    htmls.push('<tr>\
                    <td>' + value.studentFullName + '</td>\
                    <td>' + value.userName + '</td>\
                    <td><button class="btn btn-danger removeStudentJoined" data-id="' + index + '">Delete</button></td>\
                </tr>');
                }
                lastIndex = index;
            });
            $('#tbodySTUDENTSjoined').html(htmls);
            $("#submitUser").removeClass('desabled');

            }
            else {
                  alert("No data available");
                 }

        });
    });


        // Remove Student Joined ----------------------------------------------------------------------------------------------------------------
        $("body").on('click', '.removeStudentJoined', function () {
            var id = $(this).attr('data-id');
            $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');

            var learnSystem = document.getElementById("learnSystem").value;
            var subYear = document.getElementById("subYear").value;
            var subSection = document.getElementById("subSection").value;
            var specialCode = document.getElementById("code").value;

            var values = $(".users-remove-record-model").serializeArray();
            var id = values[0].value;
            firebase.database().ref('GoogleClassroom/' + learnSystem + '/' + subYear + '/' + subSection + '/' + specialCode + '/' + 'StudentJoined/' + id).remove();
            $('body').find('.users-remove-record-model').find("input").remove();
            $("#remove-modal").modal('hide');
        });
        $('.remove-data-from-delete-form').click(function () {
            $('body').find('.users-remove-record-model').find("input").remove();
        });