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


//----------------------------------------------------------------------------------


        function newPassActivation(){

            var currentPass =document.getElementById("currentPass");     
            var oldPass =document.getElementById("oldPass");

            if(oldPass.value==currentPass.value)
                {
                document.getElementById("newPass").disabled=false;
                
                }
            else
                document.getElementById("newPass").disabled=true;
                
        }   
//----------------------------------------------------------------------------------


        function ConfirmPassActivation(){

            var newPass =document.getElementById("newPass");     

            if(newPass.value=="")
                {
                document.getElementById("confirmPass").disabled=true;
                
                }
            else
                document.getElementById("confirmPass").disabled=false;
                
        } 

//----------------------------------------------------------------------------------


        function saveButtonActivation(){

            var confirmPass =document.getElementById("confirmPass").value;     

            if(confirmPass == "")
                {
                document.getElementById("updatePass").disabled=true;
                
                }
            else
                document.getElementById("updatePass").disabled=false;
                
        } 

//==================================================================================

            $('#updatePass').on('click', function () {

                var userName =document.getElementById("userName").value;

                var newPass =document.getElementById("newPass").value;     
                var confirmPass =document.getElementById("confirmPass").value;

                if (newPass != confirmPass) {

                    alert('Password not Matched');

                }
                else{

                    var userName =document.getElementById("userName").value;
                    var userType =document.getElementById("userType").value;
                    var FullName =document.getElementById("FullName").value;
                    var email =document.getElementById("email").value;
                    var confirmPass =document.getElementById("confirmPass").value;

                  firebase.database().ref('users/' + userName ).update({

                    FullName: FullName,
                    email: email,
                    password: confirmPass,
                    userName: userName,
                    userType: userType

              });
                  alert('Password Changed Successfully');

                  location.reload();
              }

            });


//==================================================================================

            $('#updateProfile').on('click', function () {

                    var PFuserName =document.getElementById("PFuserName").value;
                    var PFuserType =document.getElementById("PFuserType").value;
                    var PFFullName =document.getElementById("PFFullName").value;
                    var PFemail =document.getElementById("PFemail").value;
                    var PFpassword =document.getElementById("PFpassword").value;

                  firebase.database().ref('users/' + PFuserName ).update({

                    FullName: PFFullName,
                    email: PFemail,
                    password: PFpassword,
                    userName: PFuserName,
                    userType: PFuserType

              });
                  alert('Data Saved');

                  location.reload();
            });