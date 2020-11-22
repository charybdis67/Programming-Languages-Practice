void main() { 
  
  getValue('apple'); // 3
  getValue('peach'); // 4
  
  var myWardrobe = {
    'pants': 2,
    'dress': 4,
    'tshirt': 10,
  };
  
  //add new element
  myWardrobe['sweatshirt'] = 1;
  
  print(myWardrobe);
  
  //remove an element
  myWardrobe.removeWhere((key, value) => key == "dress");
  print(myWardrobe); //no dress
  
  //update value of existing element
  myWardrobe.update("pants", (value) => value + 1);
  print(myWardrobe); //new pant is added
  
  //if key contains
  if(myWardrobe.containsKey('dress'))
  {
    print("my wardrobe contains a dress.");
  }
  else
  {
    print("I do not have any dress.");
  }
  
  //if value contains
  if(myWardrobe.containsValue(10))
  {
    print("There is 10 item specified to this value.");
  }
  else
  {
    print("There is no item which counts to 10.");
  }
 
  // for each key-value pair in array
  myWardrobe.forEach((k,v) => print('${k}: ${v}')); 

}

getValue(mykey){
  
  //initiliaze a map which is associative array 
  var myFridge = {
    'apple': 3,
    'peach': 4,
    'watermelon': 5
  };
 
  //get the value for given key
  print(myFridge[mykey]);
}


