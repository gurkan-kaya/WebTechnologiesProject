function Harf(e) { //Ad Soyada sadece harf girişi sağlamak için kullanıldı

	islem = document.all ? window.event : e;

	karakter = document.all ? islem.keyCode : islem.which;

	if(karakter>=48&&karakter<=57) {

		if(document.all) { islem.returnValue = false; } else { islem.preventDefault(); }

    }
}



function formfunction(frm)
{
    var ad = frm.ad.value;
    var mail = frm.mail.value;
    var nokta=mail.lastIndexOf(".");
    var et=mail.indexOf("@");   
    var mesaj = frm.mesaj.value;
    var bday=document.getElementById("bday").value;
    var kadin = document.getElementById("kadin");
    var erkek = document.getElementById("erkek");
    var checkbox=document.getElementById("checkbox");
   


    if ( ad==null || ad=="")
    {
        alert("Lütfen adınızı giriniz.");
        return false;
    }

    if ( et<1 || nokta<et+2 || nokta+2>=mail.length )
    {
        alert("Lütfen geçerli bir email adresi giriniz.");
        return false;
    } 


    if ( mesaj==null || mesaj=="")
    {
        alert("Lütfen mesaj alanını boş geçmeyiniz.");
        return false;
    }

    if(bday==null || bday=="")
    {
        alert("Lütfen doğum tarihinizi giriniz.");
        return false;
    }

    if( kadin.checked == false && erkek.checked == false)
    {
        alert("Lütfen cinsiyet alanını boş geçmeyiniz.");
        return false;
    }

    if(check.checked==false)
    {
        alert("Lütfen Ben robot değilim. alanını işaretleyiniz");
        return false;
    }

    return true;

}
    