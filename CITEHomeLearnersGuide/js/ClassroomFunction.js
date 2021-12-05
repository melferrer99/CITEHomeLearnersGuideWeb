      
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
        $('#getData').on('click', function () {

        var learnSystem = document.getElementById("learningSystem").value;
        var subYear = document.getElementById("SORTyear").value;
        var subSection = document.getElementById("SORTsection").value;

        firebase.database().ref('GoogleClassroom/' + learnSystem +'/'+ subYear +'/'+ subSection + '/').on('value', function (snapshot) {
            
            if (snapshot.exists()) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function (index, value) {
                if (value) {
                    htmls.push('<tr>\
                    <td>' + value.subjectCode + '</td>\
                    <td>' + value.subjectTitle + '</td>\
                    <td>' + '<a target='+"_blank"+' href="'+value.subjectLink+'"><button class="btn btn-info">CLASSROOM</button></a>'  + '<a target='+"_blank"+' href="'+value.moduleslink+'"> <button class="btn btn-info">MODULES</button></a>' + '</td>\
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
              var subLink= document.getElementById("subjectLink").value;
              var modLink= document.getElementById("moduleslink").value;
              var uname= document.getElementById("username").value;

              firebase.database().ref('Classroom/' + uname + '/' + learnSystem + '/' + subTitle).set({

                  learningSystem: learnSystem,
                  subjectYear: subYear,
                  subjectSection: subSection,
                  subjectCode: subCode,
                  subjectTitle: subTitle,
                  subjectLink: subLink,
                  moduleslink: modLink,
                  username: uname

              });

        });


        // Add Data ----------------------------------------------------------------------------------------------------------------
        $('#submitUser').on('click', function () {
            
              var learnSystem= document.getElementById("learningSystem").value;
              var subYear= document.getElementById("subjectYear").value;
              var subSection= document.getElementById("subjectSection").value;
              var subCode= document.getElementById("subjectCode").value;
              var subTitle= document.getElementById("subjectTitle").value;
              var subLink= document.getElementById("subjectLink").value;
              var modLink= document.getElementById("moduleslink").value;
              var uname= document.getElementById("username").value;

              firebase.database().ref('GoogleClassroom/' + learnSystem + '/' + subYear + '/' + subSection + '/' + subTitle).set({

                  learningSystem: learnSystem,
                  subjectYear: subYear,
                  subjectSection: subSection,
                  subjectCode: subCode,
                  subjectTitle: subTitle,
                  subjectLink: subLink,
                  moduleslink: modLink,
                  username: uname

              });

            let inputs = document.querySelectorAll('input');

            inputs.forEach(input => subjectSection.value = '');
            inputs.forEach(input => subjectCode.value = '');
            inputs.forEach(input => subjectTitle.value = '');
            inputs.forEach(input => subjectLink.value = '');
            inputs.forEach(input => moduleslink.value = '');


        });



        // Update Data ----------------------------------------------------------------------------------------------------------------
        var updateID = 0;
        $('body').on('click', '.updateData', function () {

            var learnSystem= document.getElementById("learningSystem").value;
            var subYear= document.getElementById("SORTyear").value;
            var subSection= document.getElementById("SORTsection").value;

            updateID = $(this).attr('data-id');
            firebase.database().ref('GoogleClassroom/' + learnSystem + '/' + subYear + '/' + subSection + '/' + updateID).on('value', function (snapshot) {
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
                        <input id="subLink" type="text" class="form-control" name="subjectLink" value="' + values.subjectLink + '" required autofocus>\
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
                </div>';

                $('#updateBody').html(updateData);
            });
        });

        $('.updateUser').on('click', function () {

            var learnSystem= document.getElementById("learningSystem").value;
            var subYear= document.getElementById("SORTyear").value;
            var subSection= document.getElementById("SORTsection").value;

            var values = $(".users-update-record-model").serializeArray();
            var postData = {
                learningSystem: values[4].value,
                moduleslink: values[3].value,
                subjectCode: values[0].value,
                subjectLink: values[2].value,
                subjectSection: values[6].value,
                subjectTitle: values[1].value,   
                subjectYear: values[5].value,
                username: values[7].value,

            };

            var updates = {};
            updates['/GoogleClassroom/' + learnSystem + '/' + subYear + '/' + subSection + '/' + updateID] = postData;

            firebase.database().ref().update(updates);

            $("#update-modal").modal('hide');
        });



        // Remove Data ----------------------------------------------------------------------------------------------------------------
        $("body").on('click', '.removeData', function () {
            var id = $(this).attr('data-id');
            $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
        });

        $('.deleteRecord').on('click', function () {

            var learnSystem= document.getElementById("learningSystem").value;
            var subYear= document.getElementById("SORTyear").value;
            var subSection= document.getElementById("SORTsection").value;

            var values = $(".users-remove-record-model").serializeArray();
            var id = values[0].value;
            firebase.database().ref('GoogleClassroom/' + learnSystem + '/' + subYear + '/' + subSection + '/' + id).remove();
            $('body').find('.users-remove-record-model').find("input").remove();
            $("#remove-modal").modal('hide');
        });
        $('.remove-data-from-delete-form').click(function () {
            $('body').find('.users-remove-record-model').find("input").remove();
        });