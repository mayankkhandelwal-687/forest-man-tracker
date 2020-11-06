let createbutton = document.getElementById("create-id");
let createform =document.getElementById("create-form");
let newbutton="false";
let edit_button = document.getElementById("edit-id");
let editform =document.getElementById("edit-form");
let editbutton="false";
let delete_button = document.getElementById("delete-id");
let deleteform =document.getElementById("delete-form");
let deletebutton="false";
createbutton.onclick = function(){
	if(newbutton=="false" )
	{
		createform.style.display="block";
		newbutton="true";
	
	
		
	}
	else{
		createform.style.display="none";
		newbutton="false";
	
	}
}

edit_button.onclick = function(){
	if(editbutton=="false")
	{
		editform.style.display="block";
		editbutton="true";
	
	}
	else{
		editform.style.display="none";
		editbutton="false";
		
	}
}
delete_button.onclick = function(){
	if(deletebutton=="false")
	{
		deleteform.style.display="block";
		deletebutton="true";
	
	}
	
	else{
		deleteform.style.display="none";
		deletebutton="false";
		
	}
}