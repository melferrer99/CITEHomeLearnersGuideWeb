    
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
//-------------------------------------------------------
    var selectedFile;
     
    $("#file").on("change", function(event){
      selectedFile = event.target.files[0];
    });

    function uploadFile() {

      var learnSystem= document.getElementById("learnSystem").value;
      var subYear= document.getElementById("subYear").value;
      var subSection= document.getElementById("subSection").value;
      var subTitle= document.getElementById("subTitle").value;


      // Create a root reference
      var filename = selectedFile.name;
      var storageRef = firebase.storage().ref('/Modules/' + filename);
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
        var postKey = firebase.database().ref('GoogleClassroom/').push().key;
        uploadTask.snapshot.ref.getDownloadURL().then((downloadURL) => {
          var updates = {};
          var postData = {
            name: $("#caption").val(),
            url: downloadURL
          };

          updates['/GoogleClassroom/' + learnSystem +'/'+ subYear +'/'+ subSection + '/' + subTitle + '/Modules/' + postKey] = postData;
          firebase.database().ref().update(updates);
          console.log('File available at', downloadURL);

         alert("Added Successful!"); location.href="Modules.php";
        });
      }
    );

    }


    function getData(){

    var learnSystem = document.getElementById("learnSystem").value;
    var subYear = document.getElementById("subYear").value;
    var subSection = document.getElementById("subSection").value;
    var subTitle = document.getElementById("subTitle").value;

    //FIREBASE DATA RETRIEVAL FUNCTION
    //PATH OF YOUR DATA
    //.ONCE WILL GET ALL YOUR DATA IN ONE TIME
    firebase.database().ref('GoogleClassroom/'+ learnSystem +'/'+ subYear +'/'+ subSection + '/' + subTitle + '/Modules/').once('value').then(function (snapshot){
        var PostObject= snapshot.val();
        console.log(PostObject);
        var keys = Object.keys(PostObject);
        for (var i = 0; i < keys.length; i++) {
            var currentObject = PostObject[keys[i]];  

            // if (i % 3 == 0) {
            //   currentRow = document.createElement("div");
            //   $(currentRow).addClass("row");
            //   $("#contentHolder").append(currentRow);
            // }
            // var col = document.createElement("div");
            // $(col).addClass("col-lg-4 container");
     

            // var p = document.createElement("p");
            // $(p).html(currentObject.name);
            // $(p).addClass("contentTitle");

            // var Url = document.createElement("Url");
            // $(Url).html(currentObject.url);
            // $(Url).addClass("contentUrl");

            // $(col).append(p);
            // $(col).append(Url);
            // $(currentRow).append(col);

            $("#table_body").append("<tr><td>" + currentObject.name + "</td><td>" + currentObject.url +
                                    "</td><td><button>OPEN</button> <button>REMOVE</button></td></tr>")

          }
            
});

}