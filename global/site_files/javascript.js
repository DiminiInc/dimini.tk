function changeLocale(language)
{
	var siteurl=window.location.toString();
	if (language==="en")
	{
		newsiteurl=siteurl.replace("/ru/","/en/");
	}
	else
	{
		newsiteurl=siteurl.replace("/en/","/ru/")
	}
	window.open(newsiteurl,"_self");
}

function replaceLocale()
{
		if(localStorage.getItem("lang")=="en")
			localStorage.setItem("lang", "ru");
		else
		{
			if(localStorage.getItem("lang")=="ru")
				localStorage.setItem("lang", "en");
		}
}

function showLanguageChoice(id)
{
	document.getElementById(id).style.display = 'block';
}

function hideNotification(id) 
{
    document.getElementById(id).style.display = 'none';
	id.stopPropagation();
}

function magnifyObject(id)
{
	if(document.getElementById(id).style.height==="600px")
	{
		document.getElementById(id).style.height= 'auto';
	 	document.getElementById(id).style.width= "30%";
	 	document.getElementById(id).title="Нажмите для увеличения";
	}
	else
	{
	 	document.getElementById(id).style.height= "auto";
	 	document.getElementById(id).style.width= "auto";
	 	document.getElementById(id).scrollIntoView(true);
	 	document.getElementById(id).title="Нажмите для уменьшения";
	 }
}

function showMenu() 
{
    var x = document.getElementById("mainmenumobile");
    if (x.className === "menuelements") 
    {
        x.className += " show";
    } 
    else 
    {
        x.className = "menuelements";
    }
}

window.onload = function() 
{
	if (localStorage.getItem("notify_close")!=="yes")
	{
		document.getElementById("notification").style.display = 'block';
	}
	var siteurl=window.location.toString();
	var lang = window.navigator.languages ? window.navigator.languages[0] : null;
	lang = lang || window.navigator.language || window.navigator.browserLanguage || window.navigator.userLanguage;
	if (lang.indexOf('-') !== -1)
		lang = lang.split('-')[0];
	if (lang.indexOf('_') !== -1)
		lang = lang.split('_')[0];
	if (localStorage.getItem("lang")!==null)
	{
		if ((localStorage.getItem("lang")=="en")&&(siteurl.indexOf("/"+localStorage.getItem("lang")+"/")==-1))
		{
			document.getElementById("language-notification").style.display = 'block';
		}
		if ((localStorage.getItem("lang")=="ru")&&(siteurl.indexOf("/"+localStorage.getItem("lang")+"/")==-1))
		{
			document.getElementById("language-notification").style.display = 'block';
		}
	}
	else
	{
		if (((lang=="ru")||(lang=="uk")||(lang=="be"))&&(siteurl.indexOf("/ru/")==-1))
		{
			document.getElementById("language-notification").style.display = 'block';
		}
		if (((lang!=="ru")&&(lang!=="uk")&&(lang!=="be"))&&(siteurl.indexOf("/en/")==-1))
		{
			document.getElementById("language-notification").style.display = 'block';
		}
	}	
};

function sharePage(socialNetwork)
{
	var siteurl=window.location.toString();
	if (socialNetwork==="facebook")
		window.open("http://www.facebook.com/share.php?u="+siteurl, "Popup", "location=1,status=1,scrollbars=1, resizable=1, directories=1, toolbar=1, titlebar=1, width=600, height=300");
	if (socialNetwork==="twitter")
		window.open("https://twitter.com/home?status="+siteurl, "Popup", "location=1,status=1,scrollbars=1, resizable=1, directories=1, toolbar=1, titlebar=1, width=600, height=300");
	if (socialNetwork==="vk")
		window.open("http://vk.com/share.php?url="+siteurl, "Popup", "location=1,status=1,scrollbars=1, resizable=1, directories=1, toolbar=1, titlebar=1, width=600, height=300");
	if (socialNetwork==="googleplus")
		window.open("https://plusone.google.com/_/+1/confirm?hl=en&url="+siteurl, "Popup", "location=1,status=1,scrollbars=1, resizable=1, directories=1, toolbar=1, titlebar=1, width=600, height=300");
	if (socialNetwork==="ok")
		window.open("https://connect.ok.ru/dk?st.cmd=WidgetSharePreview&st.shareUrl="+siteurl, "Popup", "location=1,status=1,scrollbars=1, resizable=1, directories=1, toolbar=1, titlebar=1, width=600, height=300");

}