      
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
        var subYear = document.getElementById("subjectYear").value;
        var subSection = document.getElementById("subjectSection").value;

        firebase.database().ref('FacebookGroups/' + learnSystem +'/'+ subYear +'/'+ subSection + '/').on('value', function (snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function (index, value) {
                if (value) {
                    htmls.push('<tr>\
                    <td>' + value.subjectCode + '</td>\
                    <td>' + value.subjectTitle + '</td>\
                    <td>' + '<a target='+"_blank"+' href="'+value.subjectLink+'"><button class="btn btn-info">FACEBOOK GROUP</button></a>' + '</td>\
                    <td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info updateData" data-id="' + index + '">Update</button>\
                    <button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' + index + '">Delete</button></td>\
                </tr>');
                }
                lastIndex = index;
            });
            $('#tbody').html(htmls);
            $("#submitUser").removeClass('desabled');
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
    

              firebase.database().ref('FacebookGroups/' + learnSystem + '/' + subYear + '/' + subSection + '/' + subTitle).set({

                  learningSystem: learnSystem,
                  subjectYear: subYear,
                  subjectSection: subSection,
                  subjectCode: subCode,
                  subjectTitle: subTitle,
                  subjectLink: subLink,
                 
              });

        });



        // Update Data ----------------------------------------------------------------------------------------------------------------
        var updateID = 0;
        $('body').on('click', '.updateData', function () {

            var learnSystem= document.getElementById("learningSystem").value;
            var subYear= document.getElementById("subjectYear").value;
            var subSection= document.getElementById("subjectSection").value;

            updateID = $(this).attr('data-id');
            firebase.database().ref('FacebookGroups/' + learnSystem + '/' + subYear + '/' + subSection + '/' + updateID).on('value', function (snapshot) {
                var values = snapshot.val();
                var updateData = '<div class="form-group">\
                <div class="form-group">\
                    <div class="col-md-12">\
                        <input hidden id="learnSystem" type="text" class="form-control" name="learningSystem" value="' + values.learningSystem + '" required autofocus>\
                    </div>\
                </div>\
                <div class="form-group">\
                    <div class="col-md-12">\
                        <input hidden id="subYear" type="text" class="form-control" name="subjectYear" value="' + values.subjectYear + '" required autofocus>\
                    </div>\
                </div>\
                <div class="form-group">\
                    <div class="col-md-12">\
                        <input hidden id="subSection" type="text" class="form-control" name="subjectSection" value="' + values.subjectSection + '" required autofocus>\
                    </div>\
                </div>\
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
                </div>';

                $('#updateBody').html(updateData);
            });
        });

        $('.updateUser').on('click', function () {

            var learnSystem= document.getElementById("learningSystem").value;
            var subYear= document.getElementById("subjectYear").value;
            var subSection= document.getElementById("subjectSection").value;

            var values = $(".users-update-record-model").serializeArray();
            var postData = {
                learningSystem: values[0].value,
                subjectCode: values[3].value,
                subjectLink: values[5].value,
                subjectSection: values[2].value,
                subjectTitle: values[4].value,   
                subjectYear: values[1].value,

            };

            var updates = {};
            updates['/FacebookGroups/' + learnSystem + '/' + subYear + '/' + subSection + '/' + updateID] = postData;

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
            var subYear= document.getElementById("subjectYear").value;
            var subSection= document.getElementById("subjectSection").value;

            var values = $(".users-remove-record-model").serializeArray();
            var id = values[0].value;
            firebase.database().ref('FacebookGroups/' + learnSystem + '/' + subYear + '/' + subSection + '/' + id).remove();
            $('body').find('.users-remove-record-model').find("input").remove();
            $("#remove-modal").modal('hide');
        });
        $('.remove-data-from-delete-form').click(function () {
            $('body').find('.users-remove-record-model').find("input").remove();
        });