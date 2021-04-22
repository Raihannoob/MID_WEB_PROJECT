function productNameValidation()
{
    const name= document.getElementById('pname').value;
    if(name == ""){
        document.getElementById('spname').innerHTML = 'Please Fill up Product name field ';        
    }
    else if(name.length <2){
        document.getElementById('spname').innerHTML = 'Product Name required at least two letters';   
    }
    else if (name >= 'a' && name <= 'z' || name >= 'A' && name <= 'Z') {
        document.getElementById('spname').innerHTML = "you can use This Name";
     }
    
    else{
        document.getElementById('spname').innerHTML =   'Product Name is invalid';
    }
}


function QuantityValidate() {
    const Quantity = document.getElementById('Quantity').value;
    
    if (Quantity == '') {
        document.getElementById('spquantity').innerHTML = 'Please Fillup Quantity field ';
    }  
    else {
        document.getElementById('spquantity').innerHTML =  Quantity;
    }
}

function BuypriceValidate() {
    const bprice = document.getElementById('bprice').value;
    
    if (bprice == '') {
        document.getElementById('spbprice').innerHTML = 'Please Fillup Buy price field ';
    }  
    else {
        document.getElementById('spbprice').innerHTML =  bprice;
    }
}


function SellpriceValidate() {
    const sprice = document.getElementById('sprice').value;
    
    if (sprice == '') {
        document.getElementById('spsellprice').innerHTML = 'Please Fillup Sell price field ';
    }  
    else {
        document.getElementById('spsellprice').innerHTML = sprice;
    }
}

 function validateform(){  
      const name= document.getElementById('pname').value;
      const sprice = document.getElementById('sprice').value; 
      const bprice = document.getElementById('bprice').value;
      const Quantity = document.getElementById('Quantity').value;
      
        
      if (name==null || name==""){  
        alert("Name can't be blank");  
        return false;  
      }
      else if (Quantity==null || Quantity=="") {
        alert("Quantity name can not be blank");
        return false;
      }
     
     else if (bprice==null || bprice=="") {
        alert("Buyprice can not be blank");
       return false;
     }
     
      else if (sprice==null || sprice=="") {
        alert("Sell price can not be blank");
        return false;
     }
      else {
          alert("Are You Sure You Want to Submit?");
          return true;
     }
          
      
     

    }