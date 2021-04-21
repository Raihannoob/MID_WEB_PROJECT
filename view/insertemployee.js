function employeeNameValidation()
{
    const name= document.getElementById('ename').value;
 
 
    if(name == ''){
        document.getElementById('h1').innerHTML = 'Please Enter Employye name field ';        
    }
    
    else if (name >= 'a' && name <= 'z' || name >= 'A' && name <= 'Z') {
        document.getElementById('h1').innerHTML = name;
    }
        
 else if(name.length <2){
        document.getElementById('h1').innerHTML = 'Name required at least two letters';   
    }
    
    else{
        document.getElementById('h1').innerHTML =   'Employye name is invalid';
    }
}

function EmployeePostValidation()
{
    const name= document.getElementById('ePost').value;
 
 
    if(name == ''){
        document.getElementById('h1').innerHTML = 'Please Fillup Employee Post field ';        
    }
    
    else if (name >= 'a' && name <= 'z' || name >= 'A' && name <= 'Z') {
        document.getElementById('h1').innerHTML = name;
     }
    
    else{
        document.getElementById('h1').innerHTML =   'Employeee Post  Name is invalid';
    }
}

function branchValidation()
{
    const name= document.getElementById('branch').value;
 
 
    if(name == ''){
        document.getElementById('h1').innerHTML = 'Please Enter Branch name field ';        
    }
    
    else if (name >= 'a' && name <= 'z' || name >= 'A' && name <= 'Z') {
        document.getElementById('h1').innerHTML = name;
     }
    
    else{
        document.getElementById('h1').innerHTML =   'Branch name is invalid';
    }
}


function validateform(){  
      
        const name= document.getElementById('ename').value;
        const ePost = document.getElementById('ePost').value;
        const branch= document.getElementById('branch').value;
        
      if (name==null || name==""){  
        alert("Name can't be blank");  
        return false;  
      }
      else if (ePost==null || ePost=="") {
        alert("Quantity name can not be blank");
        return false;
      }
     
     else if ( branch ==null ||  branch =="") {
        alert("Branch can not be blank");
       return false;
     }
      else {
          alert("Are You Sure You Want to Submit?");
          return true;
     }

     

    }