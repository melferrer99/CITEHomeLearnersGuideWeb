    
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


  var filedelete;
//-------------------------------------------------------

    function uploadFile() {

      var learnSystem= document.getElementById("learningSystem").value;
      var subYear= document.getElementById("subjectYear").value;
      var subSection= document.getElementById("subjectSection").value;
      var subCode= document.getElementById("subjectCode").value;
      var subTitle= document.getElementById("subjectTitle").value;
      var subLink= document.getElementById("subjectLink").value;
      var modLink= document.getElementById("moduleslink").value;

      firebase.database().ref('GoogleClassroom/' + learnSystem + '/' + subYear + '/' + subSection + '/' + subTitle).set({

          learningSystem: learnSystem,
          subjectYear: subYear,
          subjectSection: subSection,
          subjectCode: subCode,
          subjectTitle: subTitle,
          subjectLink: subLink,
          moduleslink: modLink      
      });
      // alert("Added Successful!");
    }

//------------------------------------------------------------------------------------

     function getData(){

    var learnSystem = document.getElementById("learningSystem").value;
    var subYear = document.getElementById("subjectYear").value;
    var subSection = document.getElementById("subjectSection").value;

    //FIREBASE DATA RETRIEVAL FUNCTION
    //PATH OF YOUR DATA
    //.ONCE WILL GET ALL YOUR DATA IN ONE TIME

    firebase.database().ref('GoogleClassroom/'+ learnSystem +'/'+ subYear +'/'+ subSection + '/').once('value').then(function (snapshot){

      if (snapshot.exists()) {
        var PostObject= snapshot.val();
        console.log(PostObject);
        var keys = Object.keys(PostObject);
        for (var i = 0; i < keys.length; i++) {
            var currentObject = PostObject[keys[i]];

            $("#table_body").append("<tr><td>" + currentObject.subjectCode + "</td><td>" + currentObject.subjectTitle +
                                    "</td><td><a target='_blank' href="+currentObject.moduleslink+"><button>MODULES</button></a> " + 
                                    " <a target='_blank' href="+currentObject.subjectLink+"><button>GOOGLE CLASSROOM</button></a></td>" + 

                                    '<td><button class="delete btn-danger" >REMOVE</button>' +

                                    "<label id="+"delLearnSystem"+">"+currentObject.learningSystem+"</label>"+
                                    "<label id="+"delYear"+">"+currentObject.subjectYear+"</label>"+
                                    "<label id="+"delSection"+">"+currentObject.subjectSection+"</label>"+
                                    '<label id="delTitle" >'+currentObject.subjectTitle+'</label>'+
                                    "</td></tr>")

                }  

            }

      else {
              alert("No data available");
            }

      });

      }
//------------------------------------------------------------------------------------

       $("#table_body").on("click", ".delete", function(){

          filedelete = $(this);


          var delLearnSystem = document.getElementById("delLearnSystem").innerHTML;
          var delsubYear = document.getElementById("delYear").innerHTML;
          var delsubSection = document.getElementById("delSection").innerHTML;
          var delsubTitle = document.getElementById("delTitle").innerHTML; 

          firebase.database().ref('GoogleClassroom/' + delLearnSystem +"/"+ delsubYear +"/"+ delsubSection +"/"+ delsubTitle).remove();

          alert("Data Deleted");
      });



