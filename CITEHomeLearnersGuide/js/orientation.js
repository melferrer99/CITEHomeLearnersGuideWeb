    
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

  var selectedFile;

  $("#file").on("change", function(event){
    selectedFile = event.target.files[0];
  });

  function uploadFile() {
    // Create a root reference
    var filename = selectedFile.name;
    var storageRef = firebase.storage().ref('/Orientation/' + filename);
    var uploadTask = storageRef.put(selectedFile);

    // Register three observers:
    // 1. 'state_changed' observer, called any time the state changes
    // 2. Error observer, called on failure
    // 3. Completion observer, called on successful completion
    uploadTask.on('state_changed', 
      (snapshot) => {
        // Observe state change events such as progress, pause, and resume
        // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
        var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
        console.log('Upload is ' + progress + '% done');
        switch (snapshot.state) {
          case firebase.storage.TaskState.PAUSED: // or 'paused'
            console.log('Upload is paused');
            break;
          case firebase.storage.TaskState.RUNNING: // or 'running'
            console.log('Upload is running');
            break;
        }
      }, 
      (error) => {
        // Handle unsuccessful uploads
      }, 
      () => {
        // Handle successful uploads on complete
        // For instance, get the download URL: https://firebasestorage.googleapis.com/...
        var postKey = firebase.database().ref('PDFs/').push().key;
        uploadTask.snapshot.ref.getDownloadURL().then((downloadURL) => {
          var updates = {};
          var postData = {
            name: $("#caption").val(),
            url: downloadURL
          };

          updates['/PDFs/' + postKey] = postData;
          firebase.database().ref().update(updates);
          console.log('File available at', downloadURL);
        });

        document.getElementById("add").disabled=true;
        alert("Created successful.");
        location.reload();
      }
    );
  }

//============================================================================================
  var selectedFile;

  $("#VIDEOfile").on("change", function(event){
    selectedFile = event.target.files[0];
  });

 function uploadVideoFile() {
    // Create a root reference
    var filename = selectedFile.name;
    var storageRef = firebase.storage().ref('/Orientation/' + filename);
    var uploadTask = storageRef.put(selectedFile);

    // Register three observers:
    // 1. 'state_changed' observer, called any time the state changes
    // 2. Error observer, called on failure
    // 3. Completion observer, called on successful completion
    uploadTask.on('state_changed', 
      (snapshot) => {
        // Observe state change events such as progress, pause, and resume
        // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
        var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
        console.log('Upload is ' + progress + '% done');
        switch (snapshot.state) {
          case firebase.storage.TaskState.PAUSED: // or 'paused'
            console.log('Upload is paused');
            break;
          case firebase.storage.TaskState.RUNNING: // or 'running'
            console.log('Upload is running');
            break;
        }
      }, 
      (error) => {
        // Handle unsuccessful uploads
      }, 
      () => {
        // Handle successful uploads on complete
        // For instance, get the download URL: https://firebasestorage.googleapis.com/...
        var postKey = firebase.database().ref('PDFs/').push().key;
        uploadTask.snapshot.ref.getDownloadURL().then((downloadURL) => {
          var updates = {};
          var postData = {
            name: $("#VIDEOcaption").val(),
            url: downloadURL
          };

          updates['/Videos/' + postKey] = postData;
          firebase.database().ref().update(updates);
          console.log('File available at', downloadURL);
        });

        document.getElementById("addVIDEO").disabled=true;
        alert("Created successful.");
        location.reload();
      }
    );
  }



//=============================================================================================================================================


        var database = firebase.database();

        var lastIndex = 0;

        // Get Data ----------------------------------------------------------------------------------------------------------------

        firebase.database().ref('PDFs/').on('value', function (snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function (index, value) {
                if (value) {
                    htmls.push('<tr>\
                    <td>' + value.name + '</td>\
                    <td><a target='+"_blank"+' href="'+value.url+'"><button class="btn btn-info">Open</button></a>\
                    <button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' + index + '">Delete</button></td>\
                </tr>');
                }
                lastIndex = index;
            });
            $('#tbody').html(htmls);
            $("#submitUser").removeClass('desabled');
        });

        // Remove Data ----------------------------------------------------------------------------------------------------------------
        $("body").on('click', '.removeData', function () {
            var id = $(this).attr('data-id');
            $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
        });

        $('.deleteRecord').on('click', function () {

            var values = $(".users-remove-record-model").serializeArray();
            var id = values[0].value;
            firebase.database().ref('PDFs/' +  id).remove();
            $('body').find('.users-remove-record-model').find("input").remove();
            $("#remove-modal").modal('hide');

             location.reload();
        });
        $('.remove-data-from-delete-form').click(function () {
            $('body').find('.users-remove-record-model').find("input").remove();
        });


//=============================================================================================================================================


        var database = firebase.database();

        var lastIndex = 0;

        // Get Data ----------------------------------------------------------------------------------------------------------------

        firebase.database().ref('Videos/').on('value', function (snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function (index, value) {
                if (value) {
                    htmls.push('<tr>\
                    <td>' + value.name + '</td>\
                    <td><video width="350" height="240" controls>\
                      <source src="'+value.url+'" type="video/mp4">\
                    </video></td>\
                    <td><button data-toggle="modal" data-target="#removeVIDEO-modal" class="btn btn-danger removeDataVIDEO" data-id2="' + index + '">Delete</button></td>\
                </tr>');
                }
                lastIndex = index;
            });
            $('#Vidbody').html(htmls);
            $("#submitUser").removeClass('desabled');
        });

        // Remove Data ----------------------------------------------------------------------------------------------------------------
        $("body").on('click', '.removeDataVIDEO', function () {
            var id = $(this).attr('data-id2');
            $('body').find('.users-removeVIDEO-record-model').append('<input name="id" type="hidden" value="' + id + '">');
        });

        $('.deleteVIDEO').on('click', function () {

            var values = $(".users-removeVIDEO-record-model").serializeArray();
            var id = values[0].value;
            firebase.database().ref('Videos/' +  id).remove();
            $('body').find('.users-removeVIDEO-record-model').find("input").remove();
            $("#removeVIDEO-modal").modal('hide');

            location.reload();
        });

        

        $('.remove-data-from-delete-form').click(function () {
            $('body').find('.users-removeVIDEO-record-model').find("input").remove();

        });




 //----------------------------------------------------------------------------------

        function btnActivation(){

            var val =document.getElementById("caption");     

            if(val.value=="")
                {
                document.getElementById("add").disabled=true;
                }
            else
                document.getElementById("add").disabled=false;
        }   

 //----------------------------------------------------------------------------------

        function btnVIDEOActivation(){

            var val =document.getElementById("VIDEOcaption");     

            if(val.value=="")
                {
                document.getElementById("addVIDEO").disabled=true;
                }
            else
                document.getElementById("addVIDEO").disabled=false;
        }   