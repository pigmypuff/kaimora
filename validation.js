
function validation(){
       
       var firstname=document.forms["myForm"]["fname"].value;
       var lastname=document.forms["myForm"]["lname"].value;
       var dob=document.forms["myForm"]["dob"].value;
       var nic=document.forms["myForm"]["nic"].value;
       var contact=document.forms["myForm"]["contact"].value;
       var address=document.forms["myForm"]["address"].value;
       var email=document.forms["myForm"]["email"].value;
       var post=document.forms["myForm"]["post"].value;
       
       if(firstname==""){
               alert("First Name is required! ");
               return false;
       }else if(!isNaN(firstname)){
               alert(" A valid Name is required! ");
               return false;
       }
       
       
            
     if(lastname==""){
               alert("Last Name is required! ");
               return false;   
       }else if(!isNaN(lastname)){
               alert(" A valid Name is required! ");
               return false;
       }
       
       
       
       if(initname==""){
               alert("Name with Initial is required! ");
               return false;   
       }else if(!isNaN(initname)){
               alert(" A valid Name is required! ");
               return false;
       }
       
       
       
        if(dob==""){
               alert("Birth Date is Required! ");
               return false;
       }
       
       
       if(nic==""){
           alert(" NIC is required! ");
               return false; 
       }
       else if(!(nic=="")){
           
           if(nic.length<9){
                  alert("Invalid Nic Number! ");
              }else if(nic.length>12){
                  alert("Invalid Nic Number! NIC should not exeed 12 ");
              }
           
           return false;
       }

       
       
       if(contact==""){
            alert("Contact Number is required!");
               return false;
       }else{
           if(contact.length<10){
               alert(" A valid Contact Number is required !! "); 
           }if(contact.length>10){
               alert("A valid Contact Number is required.Maximum length should be 10 !!"); 
           }
           return false;
       }  
       
       
       if(address.length>200){
          
            alert("Maximum character limit is 200 !! ");
               return false;
          }
       
       if(email==""){
               alert("Email Address is required !! ");
               return false;
          }else{
            var regEmail=/^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/;
            if(!regEmail.text(email)){
                alert("A valid Email Address is required !! ");
               return false;
            }
          }
       
       
       if(post==""){
           alert("Choose the Post ! ");
               return false;
       }
     
       
   }
