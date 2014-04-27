var lastArraySize = 0;
setInterval(function(){refresh()}, 5000);
refresh();
function refresh(){
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

 xmlhttp.onreadystatechange=function()
  {
  	if (xmlhttp.readyState == 4 && xmlhttp.status== 200)
  	{
  		xmlDoc = xmlhttp.responseText;
  		createBlogPost(applyFilter(JSON.parse(xmlDoc)));
  	}
  }
xmlhttp.open("GET","getblogpost.php",true);
xmlhttp.send();
}
function applyFilter(blogposts)
{
	if ( document.getElementById('usernamesearch') != null || document.getElementById('postsearch') != null)
	{
		document.getElementById("blogpostdiv").innerHTML = "";
		var i = 0;
		var inc = true;
		var username = document.getElementById('usernamesearch').value;

		while( i < blogposts.length)
		{
				if (blogposts[i]['email'].indexOf(document.getElementById('usernamesearch').value) == -1 || blogposts[i]['blogpost'].indexOf(document.getElementById('postsearch').value) == -1 )
				{
					blogposts.splice(i,1);
					inc = false;
				}
			if (inc)
				i++;
			else
				inc = true;
		}
		lastArraySize = 0;
		return blogposts;
	}
	else
		return blogposts;
}

function createBlogPost(blogposts)
{
	if ( lastArraySize != blogposts.length)
	{
		for ( var i=lastArraySize; i< blogposts.length; i++)
		{
			var node1 = document.createElement("div");
			node1.className="blogdiv";

			var paragraphNode = document.createElement("p");
			paragraphNode.id = "username";
			textNode = document.createTextNode(blogposts[i]['email']);
			paragraphNode.appendChild(textNode);

			node1.appendChild(paragraphNode);

			paragraphNode = document.createElement("p");
			textNode = document.createTextNode(blogposts[i]['blogpost']);
			paragraphNode.appendChild(textNode);

			node1.appendChild(paragraphNode);

			paragraphNode = document.createElement("p");
			textNode = document.createTextNode(blogposts[i]['timestamp']);
			paragraphNode.appendChild(textNode);

			node1.appendChild(paragraphNode);

			document.getElementById("blogpostdiv").insertBefore(node1,document.getElementById("blogpostdiv").firstChild);

		}
		lastArraySize = blogposts.length;
	}
}