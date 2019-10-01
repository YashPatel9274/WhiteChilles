function limitchar(e)
{
	var key,keychar;
	if(window.event)
		key=window.event.keyCode;
	else if(e)
		key=e.which;
	else
		return true;
		keychar=String.fromCharCode(key);
		keychar=keychar.toLowerCase();
		goods=goods.toLowerCase();
		if(goods.indexOf(keychar)!=-1)
		{
			goods="0123456789.";
			return true;
		}
		if(key==null || key==0 || key==8 || key==9 || key==13 || key==27)
		{
			goods="0123456789.";
			return true;
		}
		return false;
 }
function loginadmin(obj)
{
    if(obj.adminid.value=="")
    {
        alert("PLEASE enter id");
        obj.adminid.focus();
        return false;
    }
	var i=obj.adminid.value;
    if(i.length!=12)
    {
        alert("PLEASE length=12");
        obj.adminid.focus();
        return false;
    }
    if(obj.adminpsswrd.value=="")
    {
        alert("PLEASE enter password");
        obj.adminpsswrd.focus();
        return false;
    }
    var p=obj.adminpsswrd.value;
    if((p.length<=5)||(p.length>=21))
    {
        alert("PLEASE length(6-20)");
        obj.adminpsswrd.focus();
        return false;
    }
    else 
	{

		return true;
	}

}
function validadmin(obj)
{   if(obj.adminid.value=="")
    {
        alert("PLEASE enter id");
        obj.adminid.focus();
        return false;
    }
	var i=obj.adminid.value;
    if(i.length!=12)
    {
        alert("PLEASE length=12");
        obj.adminid.focus();
        return false;
    }
    if(obj.adminname.value=="")
    {
        alert("PLEASE enter name");
        obj.adminname.focus();
        return false;
    }
	var n=obj.adminname.value;
    if(n.length>=21)
    {
        alert("PLEASE lenght<20");
        obj.adminname.focus();
        return false;
    }
    if(obj.adminaddr.value=="")
    {
        alert("PLEASE enter address");
        obj.adminaddr.focus();
        return false;
    }
    var a=obj.adminaddr.value;
    if(a.length>=51)
    {
        alert("PLEASE length<50");
        obj.adminaddr.focus();
        return false;
    }
    if(obj.adminmob.value=="")
    {
        alert("PLEASE enter mobile");
        obj.adminmob.focus();
        return false;
    }
    var m=obj.adminmob.value;
    if(m.length!=10)
    {
        alert("PLEASE length=10");
        obj.adminmob.focus();
        return false;
    }
    if(obj.adminmail.value=="")
    {
        alert("PLEASE enter mail");
        obj.adminmail.focus();
        return false;
    }
    var ml=obj.adminmail.value;
    if((ml.length<=9)||(ml.length>=31))
    {
        alert("PLEASE length(9-30)");
        obj.adminmail.focus();
        return false;
    }
    if(obj.adminpsswrd.value=="")
    {
        alert("PLEASE enter password");
        obj.adminpsswrd.focus();
        return false;
    }
    var p=obj.adminpsswrd.value;
    if((p.length<=5)||(p.length>=21))
    {
        alert("PLEASE length(6-20)");
        obj.adminpsswrd.focus();
        return false;
    }
	var emailAddressEntered = obj.adminmail.value;
	if ((emailAddressEntered.indexOf('@') < 1) || (emailAddressEntered.lastIndexOf('.') < (emailAddressEntered.indexOf('@') + 2)) || (emailAddressEntered.indexOf('\'') > -1) || (emailAddressEntered.indexOf('"') > -1) ) 
	{
	
		var msg;
		msg = "enter the valid email address..!"
		alert(msg);
		obj.adminmail.value = ""
	}
    else 
	{

		return true;
	}
}
function validres(obj)
{
	var d=new Date();
	var d1=new Date(obj.indate.value);
	if(obj.indate.value=="")
    {
        alert("PLEASE enter indate");
        obj.indate.focus();
        return false;
    }
	if(d1 <= d)
    {
        alert("PLEASE enter valid indate(START FROM TODAY)");
        obj.indate.focus();
        return false;
    }
	if(obj.outdate.value=="")
    {
        alert("PLEASE enter outdate");
        obj.outdate.focus();
        return false;
    }
	if(obj.outdate.value <= obj.indate.value)
    {
        alert("PLEASE enter valid outdate(START FROM INDATE)");
        obj.outdate.focus();
        return false;
    }

	if(obj.room.value==0)
    {
        alert("PLEASE enter roomno");
        obj.room.focus();
        return false;
    }
	if(obj.id.value=="")
    {
        alert("PLEASE enter id");
        obj.id.focus();
        return false;
    }
	var i=obj.id.value;
    if(i.length!=12)
    {
        alert("PLEASE length=12");
        obj.id.focus();
        return false;
    }
    if(obj.name.value=="")
    {
        alert("PLEASE enter name");
        obj.name.focus();
        return false;
    }
	var n=obj.name.value;
    if(n.length>=21)
    {
        alert("PLEASE lenght<20");
        obj.name.focus();
        return false;
    }
    if(obj.address.value=="")
    {
        alert("PLEASE enter address");
        obj.address.focus();
        return false;
    }
    var a=obj.address.value;
    if(a.length>=51)
    {
        alert("PLEASE length<50");
        obj.address.focus();
        return false;
    }
    if(obj.number.value=="")
    {
        alert("PLEASE enter mobile");
        obj.number.focus();
        return false;
    }
    var m=obj.number.value;
    if(m.length!=10)
    {
        alert("PLEASE length=10");
        obj.number.focus();
        return false;
    }
    if(obj.email.value=="")
    {
        alert("PLEASE enter mail");
        obj.email.focus();
        return false;
    }
    var ml=obj.email.value;
    if((ml.length<=9)||(ml.length>=31))
    {
        alert("PLEASE length(9-30)");
        obj.email.focus();
        return false;
    }
  
	var emailAddressEntered = obj.email.value;
	if ((emailAddressEntered.indexOf('@') < 1) || (emailAddressEntered.lastIndexOf('.') < (emailAddressEntered.indexOf('@') + 2)) || (emailAddressEntered.indexOf('\'') > -1) || (emailAddressEntered.indexOf('"') > -1) ) 
	{
	
		var msg;
		msg = "enter the valid email address..!"
		alert(msg);
		obj.email.value = ""
		return false;
	}
	  else 
	{

		return true;
	}
}